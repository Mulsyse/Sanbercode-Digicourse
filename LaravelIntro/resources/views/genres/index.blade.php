@extends('layouts.master')

@section('content')
<h1 class="mb-4">Daftar Genre</h1>
    @auth
    <a href="{{ route('genres.create') }}" class="btn btn-primary mb-4">Tambah Genre</a>
@endauth
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
                <tr>
                    <td>{{ $genre->name }}</td>
                    <td>
                        <a href="{{ route('genres.show', $genre->id) }}" class="btn btn-info">Detail</a>
                        @auth
                            <a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('genres.destroy', $genre->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                            </form>
                        @endauth
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection