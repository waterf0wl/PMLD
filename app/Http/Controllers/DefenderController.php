<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefenderController extends Controller
{
    public function index()
    {
        return view('defender'); // Nama view yang akan kamu gunakan untuk halaman Defender
    }
}
