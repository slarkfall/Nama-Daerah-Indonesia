<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/desa', [DesaController::class, 'index']);
Route::get('/kecamtan', [KecamatanController::class, 'index']);
Route::get('/kabupaten', [KabupatenController::class, 'index']);
Route::get('/provinsi', [ProvinsiController::class, 'index']);

Route::resource('/desa', App\http\Controllers\DesaController::class)->except('show');;
Route::resource('/kecamatan', App\http\Controllers\KecamatanController::class)->except('show');;
Route::resource('/kabupaten', App\http\Controllers\KabupatenController::class)->except('show');;
Route::resource('/provinsi', App\http\Controllers\ProvinsiController::class)->except('show');;
