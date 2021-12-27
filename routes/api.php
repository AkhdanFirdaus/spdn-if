<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\NilaiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mata-kuliah', [MataKuliahController::class, 'index']);
Route::get('mata-kuliah/{id}', [MataKuliahController::class, 'show']);

Route::get('mahasiswa/', [MahasiswaController::class, 'index']);
Route::get('mahasiswa/{nim}', [MahasiswaController::class, 'show']);

Route::get('nilai', [NilaiController::class, 'index']);
Route::post('nilai', [NilaiController::class, 'store']);
Route::get('nilai/{nim}', [NilaiController::class, 'show']);
