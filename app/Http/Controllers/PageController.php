<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function info()
    {
        return view('info');
    }

    public function mataKuliah()
    {
        return view('matakuliah');
    }

    public function mahasiswa()
    {
        return view('mahasiswa');
    }
}
