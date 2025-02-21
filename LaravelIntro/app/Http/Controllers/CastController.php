<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    // Menampilkan semua data pemain film
    public function index()
    {
        $casts = DB::table('casts')->get();
        return view('cast.index', compact('casts'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('cast.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        DB::table('casts')->insert([
            'name' => $request->name,
            'age' => $request->age,
            'bio' => $request->bio,
        ]);

        return redirect('/cast')->with('success', 'Data pemain film berhasil ditambahkan!');
    }

    // Menampilkan detail pemain film
    public function show($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();
        return view('cast.show', compact('cast'));
    }

    // Menampilkan form edit pemain film
    public function edit($id)
    {
        $cast = DB::table('casts')->where('id', $id)->first();
        return view('cast.edit', compact('cast'));
    }

    // Menyimpan perubahan data (update)
    public function update(Request $request, $id)
    {
        DB::table('casts')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'age' => $request->age,
                'bio' => $request->bio,
            ]);

        return redirect('/cast')->with('success', 'Data pemain film berhasil diperbarui!');
    }

    // Menghapus data pemain film
    public function destroy($id)
    {
        DB::table('casts')->where('id', $id)->delete();
        return redirect('/cast')->with('success', 'Data pemain film berhasil dihapus!');
    }
}
