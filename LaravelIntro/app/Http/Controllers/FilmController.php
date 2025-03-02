<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('films.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = time() . '.' . $request->poster->extension();
        $request->poster->move(public_path('images'), $imageName);

        Film::create([
            'tittle' => $request->tittle,
            'summary' => $request->summary,
            'relese_year' => $request->relese_year,
            'poster' => $imageName,
            'genre_id' => $request->genre_id,
        ]);

        return redirect()->route('films.index');
    }

    public function show(Film $film)
    {
        $reviews = Review::where('film_id', $film->id)->with('user')->get(); // Ambil review dengan user
        return view('films.detail', compact('film', 'reviews')); // Tambahkan reviews ke view
    }

    public function storeReview(Request $request, Film $film)
    {
        $request->validate([
            'context' => 'required|string',
            'point' => 'required|integer|min:1|max:5',
        ]);

        Review::create([
            'user_id' => Auth::id(),
            'film_id' => $film->id,
            'context' => $request->context,
            'point' => $request->point,
        ]);

        return redirect()->route('films.show', $film->id)->with('success', 'Review berhasil ditambahkan!');
    }

    public function edit(Film $film)
    {
        $genres = Genre::all();
        return view('films.edit', compact('film', 'genres'));
    }

    public function update(Request $request, Film $film)
    {
        if ($request->poster) {
            $request->validate([
                'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName = time() . '.' . $request->poster->extension();
            $request->poster->move(public_path('images'), $imageName);
            $film->update([
                'tittle' => $request->tittle,
                'summary' => $request->summary,
                'relese_year' => $request->relese_year,
                'poster' => $imageName,
                'genre_id' => $request->genre_id,
            ]);
        } else {
            $film->update([
                'tittle' => $request->tittle,
                'summary' => $request->summary,
                'relese_year' => $request->relese_year,
                'genre_id' => $request->genre_id,
            ]);
        }

        return redirect()->route('films.index');
    }

    public function destroy(Film $film)
    {
        $film->delete();
        return redirect()->route('films.index');
    }
}