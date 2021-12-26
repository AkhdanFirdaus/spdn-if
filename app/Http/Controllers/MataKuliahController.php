<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mataKuliahs = MataKuliah::all();
        return response()->json([
            'message' => 'Sukses mendapatkan data mata kuliah',
            'data' => $mataKuliahs,
        ], 200);
    }

    public function show(Request $request)
    {
        $mataKuliah = MataKuliah::find($request->id);
        return response()->json([
            'message' => 'Sukses mendapatkan data mata kuliah',
            'data' => $mataKuliah,
        ], 200);
    }
}
