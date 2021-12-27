<?php

namespace App\Http\Controllers;

use App\Http\Resources\NilaiResource;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NilaiController extends Controller
{
    public function index()
    {
        // SELECT
        // *,
        // subquery.total,
        // (CASE
        //      WHEN subquery.total >= 80 AND subquery.total <= 100 THEN "A"
        //      WHEN subquery.total >= 70 AND subquery.total < 80 THEN "B"
        //      WHEN subquery.total >= 60 AND subquery.total < 70 THEN "C"
        //      WHEN subquery.total >= 50 AND subquery.total < 60 THEN "D"
        //      WHEN subquery.total >= 0 AND subquery.total < 50 THEN "E"
        //      ELSE 'T'
        // END) AS grade
        //      FROM nilais, (
        //      SELECT (tugas * 0.3 + uts * 0.3 + uas * 0.3) AS total
        //      FROM nilais
        // ) subquery;

        // $nilai = DB::raw('
        //     SELECT
        //     *,
        //     subquery.total,
        //     (CASE
        //         WHEN subquery.total >= 80 AND subquery.total <= 100 THEN "A"
        //         WHEN subquery.total >= 70 AND subquery.total < 80 THEN "B"
        //         WHEN subquery.total >= 60 AND subquery.total < 70 THEN "C"
        //         WHEN subquery.total >= 50 AND subquery.total < 60 THEN "D"
        //         WHEN subquery.total >= 0 AND subquery.total < 50 THEN "E"
        //         ELSE "T"
        //     END) AS grade
        //         FROM nilais, (
        //         SELECT (tugas * 0.3 + uts * 0.3 + uas * 0.3) AS total
        //         FROM nilais
        //     ) subquery;
        // ');

        $nilai = Nilai::select('nilais.*')
            ->selectRaw('mahasiswas.nama AS mahasiswa_nama, nim, kelas')
            ->selectRaw('mata_kuliahs.nama AS mk_nama, sks, semester')
            ->join('mahasiswas', 'mahasiswas.id', '=', 'nilais.mahasiswa_id')
            ->join('mata_kuliahs', 'mata_kuliahs.id', '=', 'nilais.mata_kuliah_id')
            ->get();

        return response()->json([
            'message' => 'Berhasil mendapatkan nilai',
            'data' => NilaiResource::collection($nilai),
        ], 200);
    }

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

    public function show(Request $request)
    {
        $nilai = Nilai::select('nilais.*')
            ->selectRaw('mahasiswas.nama AS mahasiswa_nama, nim, kelas')
            ->selectRaw('mata_kuliahs.nama AS mk_nama, sks, semester')
            ->join('mahasiswas', 'mahasiswas.id', '=', 'nilais.mahasiswa_id')
            ->join('mata_kuliahs', 'mata_kuliahs.id', '=', 'nilais.mata_kuliah_id')
            ->where('mahasiswas.nim', $request->nim)
            ->get();

        return response()->json([
            'message' => 'Berhasil mendapatkan nilai',
            'data' => NilaiResource::collection($nilai),
        ], 200);
    }
}
