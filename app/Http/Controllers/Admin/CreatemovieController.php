<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CreatemovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::paginate(5);

        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'title' => 'required|unique:movies',
            'description' => 'required',
            'thumb' => 'required|url',
            'cover' => 'nullable|url',
            'director' => 'nullable',
            'genre' => 'nullable'
        ]);

        Movie::create($validate_data);

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('admin.movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $validate_data = $request->validate([
            'title' => [
                'required',
                Rule::unique('movies')->ignore($movie->id)
            ],
            'description' => 'required',
            'thumb' => 'required|url',
            'cover' => 'nullable|url',
            'director' => 'nullable',
            'genre' => 'nullable'
        ]);

        $movie->update($validate_data);

        return redirect()->route('movies.index')->with('message', "Hai modificato il Movie $movie->title correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')->with('message', "Hai cancellato il Movie $movie->title correttamente");
    }
}
