<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function index($kode)
    {
        return view('test', compact('kode'));
    }
}
