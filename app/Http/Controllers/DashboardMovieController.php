<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

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
            'movies' => Movie::all('title')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.dashboard.movie', [
            'active' => 'movie',
            'title' => 'New Movie'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'duration' => 'required',
            'actors' => 'required',
            'synopsis' => 'required',
            'poster' => 'required',
            'rating' => 'required',
            'review' => 'required'
        ]);

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
        //
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

        return redirect('/dashboard/movies')->with('success', 'Berhasil menghapus movie!');
    }
}
