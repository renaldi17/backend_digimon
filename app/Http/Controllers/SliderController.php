<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'gambar' => 'image',
            'deskripsi' => 'required|string',
        ]);

        $gambarPath = $request->file('gambar') ? $request->file('gambar')->store('sliders', 'public') : null;

        Slider::create([
            'nama' => $request->nama,
            'gambar' => $gambarPath,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('slider.index')->with('success', 'Slider berhasil dibuat.');
    }

    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'nama' => 'required|string',
            'gambar' => 'image',
            'deskripsi' => 'required|string',
        ]);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('sliders', 'public');
            Storage::disk('public')->delete($slider->gambar);
            $slider->update(['gambar' => $gambarPath]);
        }

        $slider->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('slider.index')->with('success', 'Slider berhasil diperbaharui.');
    }

    public function destroy(Slider $slider)
    {
        Storage::disk('public')->delete($slider->gambar);
        $slider->delete();

        return redirect()->route('slider.index')->with('success', 'Slider berhasil dihapus.');
    }
}
