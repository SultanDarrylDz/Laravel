@extends('layouts.master')

@section('content')

    @php
        $satu = 1;
        $dua = 2;
        $tiga = 3;
        $empat = 4;
        $lima = 5;
        $status = 2;
    @endphp

{{--
    <p> Baris ke {{ $satu }} </p>
    <p> Baris ke {{ $dua }} </p>
    <p> Baris ke {{ $tiga }} </p>
    <p> Baris ke {{ $empat }} </p>
    <p> Baris ke {{ $lima }} </p> --}}


    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2 == 1)
            Bilangan ke {{$i}} Ganjil <br>
        @else
            Bilangan ke {{$i}} Genap <br>
        @endif
        <br>
    @endfor

    <a class="btn btn-primary btn-lg" href="{{ route ('album') }}">Album</a>

@endsection