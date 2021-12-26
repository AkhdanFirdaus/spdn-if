<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'welcome']);
Route::get('/info', [PageController::class, 'info']);
Route::get('/mata-kuliah', [PageController::class, 'mataKuliah']);
Route::get('/mahasiswa', [PageController::class, 'mahasiswa']);

Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'detail']);
