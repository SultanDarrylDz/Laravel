<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\DataSiswaController;
use App\http\Controllers\UserController;
Route::get('/', function () {
    return ('Ini Nomor 1');
});

// Parameter Wajib
Route::get('/nama/framework/{nama}/tahun-rilis/{tahun}', function ($nama, $tahun) {
    return ('Nama Framework yang dimasukan adalah: ' . $nama . '<br>Tahun Rilisnya: ' . $tahun);
});

// Optional Parameter
Route::get('/nama-saya-adalah/{nama?}', function ($nama = 'Wajib Diisi') {
    return 'Nama Saya Adalah: ' . $nama;
});


Route::get('/menghitung-alas-segitiga/alas/{alas?}/tinggi/{tinggi?}', function ($alas = 1, $tinggi = 1) {
$luas=$alas+$tinggi*0.5;
    return 'Alas: ' . $alas . '<br>' . 'Tingginya: ' . $tinggi . '<br>' . 'Luasnya Adalah: ' . $luas;
});
// Route Group
Route::group(['prefix'=>'jurusan'], function () {
    Route::get('/', function (){
        return 'Berhasil';
    });
    Route::get('/kelas/{namakelas}', function ($namakelas) {
        return $namakelas;
    });
    Route::get('/wali-kelas/{nama}', function ($nama) {
        return $nama;
    });
});

Route::get('data-siswa', [DataSiswaControler::class, 'datasiswa']);
Route::get('data-siswi', [DataSiswaControler::class, 'datasiswi']);
Route::get('nama/{nama?}', [DataSiswaControler::class, 'nama']);

Route::resource('user', UserController::class);



