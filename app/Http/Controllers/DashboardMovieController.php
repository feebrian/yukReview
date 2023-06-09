<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;

use function PHPSTORM_META\map;

class DashboardMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.dashboard.movies', [
            'active' => "movie",
            'title' => "Movies",
            'movies' => Movie::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.dashboard.movie', [
            'active' => 'movie',
            'title' => 'New Movie',
            'genres' => Genre::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'genre_id' => 'required',
            'duration' => 'required',
            'actors' => 'required',
            'synopsis' => 'required',
            'poster' => 'required|file|image|mimes:jpg,jpeg,png|max:1024',
            'rating' => 'required',
            'review' => 'required'
        ]);

        $validatedData['genre'] =
        $image_path = $request->file('poster')->store('poster', 'public');

        $validatedData['poster'] = $image_path;

        Movie::create($validatedData);

        return redirect('/dashboard/movies')->with('success', 'Berhasil menambah movie baru!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('auth.dashboard.movieUpdate', [
            'title' => "Edit Movie",
            'active' => "movie",
            'genres' => Genre::all(),
            'movies' => Movie::all()->firstWhere('id', '===', $movie->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        Movie::destroy($movie->id);

        $this->removeImage($movie->poster);

        return redirect('/dashboard/movies')->with('success', 'Berhasil menghapus movie!');
    }

    /**
     * Remove image function
     */
    public function removeImage($imageName)
    {
        if(Storage::exists('/public/'. $imageName))
        {
            Storage::delete('/public/'. $imageName);
        }
    }
}
