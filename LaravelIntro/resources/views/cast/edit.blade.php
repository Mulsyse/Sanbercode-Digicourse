@extends('layouts.master')

@section('content')
    <h1>Edit Pemain Film</h1>
    <form action="{{ url('/cast/'.$cast->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="name" value="{{ $cast->name }}" required>
        <br>
        <label>Umur:</label>
        <input type="number" name="age" value="{{ $cast->age }}" required>
        <br>
        <label>Bio:</label>
        <textarea name="bio" required>{{ $cast->bio }}</textarea>
        <br>
        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
