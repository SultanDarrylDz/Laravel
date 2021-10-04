<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function datasiswa()
    {
        $nama = 'Sultan Darryl Dzulfikar';
        return $nama;
    }
    public function datasiswi()
    {
        $nama = "Sulten";
        return $nama;
    }
    public function nama($nama = "Isi Bro")
    {
        $nama = "Sulten";
        return $nama;
    }
}
