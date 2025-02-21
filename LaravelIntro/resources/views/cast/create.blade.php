@extends('layouts.master')

@section('title', 'Tambah Pemain Film')

@section('content')
    <div class="container">
        <h1 class="mb-3">Tambah Pemain Film</h1>
        <form action="{{ url('/cast') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Umur:</label>
                <input type="number" name="age" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Bio:</label>
                <textarea name="bio" class="form-control" rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
