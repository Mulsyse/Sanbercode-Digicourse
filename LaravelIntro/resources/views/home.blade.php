@extends('layouts.master')

@section('tittle')
    halaman utama
@endsection

@section('content')
<li>Mengunjungi Website ini</li>
        <li>Mendaftar di <a href="{{ url('/register') }}">Form Sign Up</a></li>
        <li>Selesai!</li>
@endsection