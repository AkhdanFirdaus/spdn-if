<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mahasiswa' => 'required|integer',
            'mata_kuliah' => 'required|integer',
            'tugas' => 'required|integer',
            'uts' => 'required|integer|min:0|max:100',
            'uas' => 'required|integer|min:0|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Gagal Menambahkan Nilai',
            ], 422);
        }

        $nilai = new Nilai();
        $nilai->mata_kuliah_id = $request->mata_kuliah;
        $nilai->mahasiswa_id = $request->mahasiswa;
        $nilai->tugas = $request->tugas;
        $nilai->uts = $request->uts;
        $nilai->uas = $request->uas;

        if ($nilai->save()) {
            return response()->json([
                'message' => 'Berhasil Menambahkan Nilai',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Gagal Menambahkan Nilai',
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
