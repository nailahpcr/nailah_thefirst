<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

//Route::get('/mahasiswa', function () {
    //return 'Halo Mahasiswa';
//});

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: Nailah '.$param1;
})->name('mahasiswa.show');

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('mahasiswa/{param1}',[MahasiswaController::class,'show']);

Route::get('/about', function () {
    return view('halaman-about');
});
