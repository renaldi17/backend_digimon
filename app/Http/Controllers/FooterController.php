<?php

namespace App\View\Components\Common;

use App\Models\Kontak;
use Illuminate\View\Component;

class Footer extends Component
{
    public $kontaks;

    public function __construct()
    {
        $this->kontaks = Kontak::limit(3)->get();
    }

    public function render()
    {
        return view('components.common.footer', [
            'kontaks' => $this->kontaks,
        ]);
    }
}
