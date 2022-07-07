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

Route::get('/about', function () {
    return '<h1>Halaman About Cavitacantik</h1>';
});

Route::get('/datapribadi/{cavta}', function ($nama) {
    return "Nama Saya : $nama";
});

Route::get('/datasiswa', function () {
    return view('datasiswa', ["siswa1" => "Asep","siswa2" => "Cavitacantik","siswa3" => "Jaenab","siswa4" => "Madun"]);
});

Route::get('/siswa', function () {
    return view('siswa', ['siswa' => 'Cavita', 'nilai' => 75]);
});

Route::get('/loopfor', function () {
    return view('loopfor');
});

Route::get('/datasiswa', function () {
    return view('datasiswa', ['siswa' => ['Asep', 'Cavita','Denis', 'Loki']]);
});

use App\Http\Controllers\PageController;

Route::get('/home', [PageController::class, 'index']);

Route::get('/tampil',[PageController::class, 'devfram']);

Route::get('/ujian', [PageController::class, 'hasilujian']);