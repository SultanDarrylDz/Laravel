@extends('layouts.master')

@section('content')
@foreach ($buku as $data)
    Nama Buku : {{ $data->nama_buku}}<br>
    Jumlah Halaman : {{ $data->jumlah_halaman}}<br>
    Translate Judul Buku : {{ $data->translate_judul_buku ?? 'Belum Ada Translate'}}<p>
@endforeach

@endsection
