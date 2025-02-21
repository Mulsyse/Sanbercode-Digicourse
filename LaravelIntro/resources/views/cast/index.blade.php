@extends('layouts.master')

@section('title', 'List Pemain Film')

@section('content')
    <div class="container">
        <h1 class="mb-3">List Pemain Film</h1>
        <a href="{{ url('/cast/create') }}" class="btn btn-primary mb-3">Tambah Pemain</a>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="fw-bold" style="border-bottom: 2px solid #ddd;">
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Bio</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($casts as $cast)
                    <tr>
                        <td>{{ $cast->id }}</td>
                        <td>{{ $cast->name }}</td>
                        <td>{{ $cast->age }}</td>
                        <td>{{ $cast->bio }}</td>
                        <td>
                            <a href="{{ url('/cast/'.$cast->id) }}" class="btn btn-info btn-sm text-white">Detail</a>
                            <a href="{{ url('/cast/'.$cast->id.'/edit') }}" class="btn btn-warning btn-sm text-white">Edit</a>
                            <form action="{{ url('/cast/'.$cast->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm text-white">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
