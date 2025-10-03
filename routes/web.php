<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\MahasiswaController;
Route::get('/', function () {
   return view('welcome')
;
});
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

 Route::get('/nama/{param1?}', function ($param1) {
     return 'Nama saya: Nailah '.$param1;
 })->name('mahasiswa.show');

Route::get('/nim/{param1?}', function ($param1 = '') {
   // return 'NIM saya: '.$param1;
});

Route::get('mahasiswa/{param1?}',[MahasiswaController::class,'show'])->name('mahasiswa.show');;

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home',[HomeController::class,'index']);


Route::get('/pegawai', [PegawaiController::class, 'index']);


Route::post('question/store', [QuestionController::class, 'store']) //nyimpan data
		->name('question.store');
