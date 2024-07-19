<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoGrafisController extends Controller
{
    public function index() {
        return view('infografis');
    }
}
