@extends('layouts.master')

@section('content')
<h1 class="mb-4">Daftar Film</h1>
@auth
<a href="{{ route('films.create') }}" class="btn btn-primary mb-4">Tambah Film</a>
@endauth
    <div class="row">
        @foreach ($films as $film)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('images/' . $film->poster) }}" class="card-img-top w-100" alt="{{ $film->title }}">
                    <h6 class="text-center mt-2" style="font-size: 1.2em;">{{ $film->tittle }}</h6>
                    <div class="card-body">
                        <p class="card-text">{{ Str::limit($film->summary, 20) }}</p>
                        <p class="card-text">Tahun Rilis: {{ $film->release_year }}</p>
                        <p class="card-text mb-4"> Genre: 
                            <span style="background-color: green; color: white; padding: 5px 10px; border-radius: 5px; font-size: 1.1em;">
                                {{ $film->genre->name }}
                            </span>
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('films.show', $film->id) }}" class="btn btn-info">Detail</a>
                            @auth
                                <a href="{{ route('films.edit', $film->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('films.destroy', $film->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection