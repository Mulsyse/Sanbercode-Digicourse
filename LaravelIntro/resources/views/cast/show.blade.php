@extends('layouts.master')

@section('content')
    <h1>Detail Pemain Film</h1>
    <p>Nama: {{ $cast->name }}</p>
    <p>Umur: {{ $cast->age }}</p>
    <p>Bio: {{ $cast->bio }}</p>
    <a href="{{ url('/cast') }}">Kembali</a>
@endsection
