@extends('layouts.master')

@section('tittle')
    halaman pendaftaran
@endsection

@section('content')
<h1>Selamat Datang, {{ $firstName }} {{ $lastName }}!</h1>
    <h2>Terima kasih telah bergabung di SanberBook. Social media kita bersama!</h2>
@endsection
