<?php

use Illuminate\Support\Facades\Route;

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

