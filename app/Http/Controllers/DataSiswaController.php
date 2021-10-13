<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function datasiswa() {
        $nama = "ehe";
        return $nama;
    }

    public function datasiswi() {
        $nama = "aha";
        return $nama;
    }

    public function nama($nama = null) {
        return 'Nama Anda Adalah ' .$nama;
    }
}
