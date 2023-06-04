<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Middleware (Function untuk langsung ke halaman dashboard)
Route::group(['middleware' => ['auth']], function(){
    Route::get('/');
});

// Dashboard //
Route::get('/dashboard','WebController@dashboard')->name('dashboard');

// Kendaraan //
Route::get('/kendaraan','KendaraanController@kendaraan');
// Show
Route::get('/kendaraanshow/{idkendaraan}','KendaraanController@show');
// Tambah
Route::get('/kendaraantambah','KendaraanController@tambah');
Route::post('/kendaraanstore','KendaraanController@store');
// Edit
Route::get('/kendaraanedit/{idkendaraan}','KendaraanController@edit');
Route::post('/kendaraanupdate','KendaraanController@update');
// Hapus
Route::get('/kendaraanhapus/{idkendaraan}','KendaraanController@hapus');

// Siswa
Route::get('/siswa','SiswaController@siswa');
// Show
Route::get('/siswashow/{idsiswa}','SiswaController@show');
// Tambah
Route::get('/siswatambah','SiswaController@tambah');
Route::post('/siswastore','SiswaController@store');
// Edit
Route::get('/siswaedit/{idsiswa}','SiswaController@edit');
Route::post('/siswaupdate','SiswaController@update');
// Hapus
Route::get('/siswahapus/{idsiswa}','SiswaController@hapus');

// About
Route::get('/about','WebController@about');



