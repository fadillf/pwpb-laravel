<?php

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


Route::get('/test', function() {
    echo "test berhasil";
});

Route::get('/coba', function() {
    echo "Berhasil echo";
});

Route::get('/test-route', function() {
    echo "berhasil test route dengan (-) strip";
});

Route::get('/hal1', function() {
    return view('halaman1');
});

Route::get('/hal2', function() {
    return view('halaman2');
});

Route::get('/belajar', function(){
    $nama = "Fadillah Fadlurrahman";
    $kelas = "XI RPL 2";
    return view('belajar', compact('nama', 'kelas'));
});
  


