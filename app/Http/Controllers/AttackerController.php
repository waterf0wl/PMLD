<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttackerController extends Controller
{
    public function index()
    {
        return view('attacker'); // Nama view yang akan kamu gunakan untuk halaman Attacker
    }
}
