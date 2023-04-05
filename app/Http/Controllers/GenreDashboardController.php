<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // view to dshboard genre
        return view('auth.dashboard.genres', [
            'active' => "genres",
            'title' => "Genre",
            'genres' => Genre::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // view to form new genre
        return view('auth.dashboard.genre', [
            'active' => "genres",
            'title' => "New Genre"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate data from new genre form
        $validatedData = $request->validate([
            'genre' => 'required|max:20'
        ]);

        $validatedData['name'] = $validatedData['genre'];

        Genre::create($validatedData);

        return redirect('/dashboard/genres')->with('success', 'Berhasil membuat genre baru!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        // view to update genre form
        return view('auth.dashboard.genreUpdate', [
            'active' => "genres",
            'title' => "Edit Genre",
            'genre' => Genre::all()->firstWhere('id', '===', $genre->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        // update selected genre
        $rules = [
            'name' => 'required|max:20'
        ];

        $validatedData = $request->validate($rules);

        Genre::where('id', $genre->id)->update($validatedData);
        return redirect('/dashboard/genres')->with('success', 'Berhasil mengedit genre!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        // delete existing genre
        Genre::destroy($genre->id);

        return redirect('/dashboard/genres')->with('success', 'Berhasil menghapus genre!');
    }
}
