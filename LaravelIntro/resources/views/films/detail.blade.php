@extends('layouts.master')

@section('content')
    <h1>Detail Film</h1>
    <img src="{{ asset('images/' . $film->poster) }}" alt="{{ $film->tittle }}" width="200">
    <p>Judul: {{ $film->tittle }}</p>
    <p>Ringkasan: {{ $film->summary }}</p>
    <p>Tahun Rilis: {{ $film->relese_year }}</p>
    <p>Genre: {{ $film->genre->name }}</p>

    @auth
        <h2>Tambah Review</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('films.storeReview', $film->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="context">Review:</label>
                <textarea name="context" id="context" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="point">Poin (1-5):</label>
                <input type="number" name="point" id="point" class="form-control" min="1" max="5" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Review</button>
        </form>
    @else
        <p>Login untuk memberikan review.</p>
    @endauth

    <h2>Review Film</h2>
    @if(count($reviews) > 0)
        <ul>
            @foreach($reviews as $review)
                <li>
                    <strong>{{ $review->user->name }}</strong> (Poin: {{ $review->point }}):<br>
                    {{ $review->context }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Belum ada review.</p>
    @endif
    <a href="{{ route('films.index') }}" class="btn btn-secondary">Kembali</a>
@endsection