<?php

use App\Http\Controllers\DataSiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

// Route::get('1', function () {
//     return 'satu';
// });

// Route::get('2', function () {
//     return 'dua';
// });

// Route::get('3', function () {
//     return 'tiga';
// });

// Route::get('4', function () {
//     return 'empat';
// });

// Route::get('5', function () {
//     return 'lima';
// });

// parameter wajib
// Route::get('/{nama}/{tahun_lahir}', function ($nama, $tahun_lahir) {
//     return 'Nama : ' . $nama .'<br>' .'Tahun : ' . $tahun_lahir;
// });

// parameter opsional
// Route::get('/{nama?}/{tahun_lahir}', function ($nama, $tahun_lahir = null) {
//     return 'Nama : ' . $nama .'<br>' .'Tahun : ' . $tahun_lahir;
// });


// Route::get('/hitung-luas-segitiga/{alas?}/{tinggi?}', function ($alas = 1, $tinggi = 1) {
//     $luas = $alas * $tinggi / 2;
//     return 'Alas nya : ' . $alas . '<br>'
//     . 'Tingginya : ' . $tinggi . '<br>'
//     . 'Hasil luas segitiga : ' .$luas;
// });

// route group
// route::group(['prefix' => 'jurusan'], function(){
//     route::get('/kelas/{kelas}', function($kelas){
//         return 'Kelas : ' .$kelas;
//     }  ) ;

//     route::get('/wali-kelas/{nama}', function($nama){
//         return 'Nama Wali Kelas : ' .$nama;
//     }  ) ;
// } ) ;

// Route::get('data-siswa', [DataSiswaController::class, 'datasiswa' ]);
// Route::get('data-siswi', [DataSiswaController::class, 'datasiswi' ]);
// Route::get('nama/{nama?}', [DataSiswaController::class, 'nama' ]);

// Route::resource('user', UserController::class);

// Route::get('album', function () {
//     return view('profile.album');
// }) -> name('album');

Route::get('index', function () {
     return view('profile.index');
})->name('index');

Route::resource('user', UserController::class);
Route::resource('book', BookController::class);

// show
// Route::resource('user/{$id}', UserController::class, 'show');
