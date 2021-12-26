<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return response()->json([
            'message' => 'Sukses mendapatkan data mahasiswa',
            'data' => $mahasiswas,
        ], 200);
    }

    public function detail(Request $request)
    {
        $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();
        return view('mahasiswa-detail', ['mahasiswa' => $mahasiswa]);
    }

    public function show(Request $request)
    {
        $mahasiswa = Mahasiswa::where('nim', $request->nim)->first();

        if ($mahasiswa) {
            return response()->json([
                'message' => 'Mahasiswa ditemukan',
                'data' => $mahasiswa,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Mahasiswa tidak ditemukan',
            ], 200);
        }
    }
}
