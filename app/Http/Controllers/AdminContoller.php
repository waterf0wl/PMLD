<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index()
    {
        return view('administrator'); // Nama view yang akan kamu gunakan untuk halaman Attacker
    }
}
