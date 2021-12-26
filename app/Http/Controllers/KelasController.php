<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return response()->json([
            'message' => 'Sukses mendapatkan data kelas',
            'data' => $kelas,
        ], 200);
    }
}
