@extends('layouts.master')

@section('content')
    <h1>Detail Genre</h1>
    <p>Nama: {{ $genre->name }}</p>
    <h2>Film dalam Genre Ini</h2>
    @if ($genre->films->count() > 0)
        <ul>
            @foreach ($genre->films as $film)
                <li>{{ $film->tittle }}</li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada film dalam genre ini.</p>
    @endif
    <a href="{{ route('genres.index') }}" class="btn btn-secondary">Kembali</a>
@endsection