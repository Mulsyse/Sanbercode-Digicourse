@extends('layouts.master')

@section('content')
    <h1>Edit Genre</h1>
    <form action="{{ route('genres.update', $genre->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Genre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $genre->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('genres.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection