@extends('layouts.master')

@section('content')
    <h1>Tambah Genre</h1>
    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Genre</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('genres.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection