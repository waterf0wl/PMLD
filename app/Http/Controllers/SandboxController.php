<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sandboxController extends Controller
{
    public function index()
    {
        return view('sandbox');
    }
}