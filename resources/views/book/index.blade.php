@extends('layouts.master')

@section('content')
@foreach ($buku as $data)

    Nama Buku : {{ $data->nama_buku}}<br>
    Jumlah Halaman : {{ $data->jumlah_halaman}}<br>
    Translate Judul Buku : {{ $data->translate_judul_buku ?? 'Belum Ada Translate'}}<hr>

<hr>
@endforeach

    Pengarang Buku : {{ $data->pengarang->nama_pengarang}}<br>
    Email : {{ $data->pengarang->email}}<br>
    No Telepon : {{ $data->pengarang->tlp}}<br>
    Daftar Buku <br>
@endsection
