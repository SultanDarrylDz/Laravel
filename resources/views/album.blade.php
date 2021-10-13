@extends('layouts.master')

@section('judul')
Halaman Utama
@endsection

@section('content')
Content
<a class="btn btn-primary btn-lg" href="{{route('profile')}}">profile</a>
@endsection
