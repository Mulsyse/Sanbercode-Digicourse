@extends('layouts.master')

@section('content')
    <h1>Tambah Film</h1>
    <form action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="tittle" class="form-label">Judul</label>
            <input type="text" name="tittle" id="tittle" class="form-control">
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Ringkasan</label>
            <textarea name="summary" id="summary" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="relese_year" class="form-label">Tahun Rilis</label>
            <input type="text" name="relese_year" id="relese_year" class="form-control">
        </div>
        <div class="mb-3">
            <label for="poster" class="form-label">Poster</label>
            <input type="file" name="poster" id="poster" class="form-control">
        </div>
        <div class="mb-3">
            <label for="genre_id" class="form-label">Genre</label>
            <select name="genre_id" id="genre_id" class="form-select">
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('films.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection