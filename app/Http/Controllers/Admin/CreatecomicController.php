<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CreatecomicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(5);

        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
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
            'title' => 'required|unique:comics',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'nullable',
            'series' => 'nullable',
            'sale_date' => 'nullable',
            'type' => 'nullable'
        ]);

        Comic::create($validate_data);

        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validate_data = $request->validate([
            'title' => [
                'required',
                Rule::unique('comics')->ignore($comic->id)
            ],
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'nullable',
            'series' => 'nullable',
            'sale_date' => 'nullable',
            'type' => 'nullable'
        ]);

        $comic->update($validate_data);

        return redirect()->route('admin.comics.index')->with('message', 'Hai modificato il Comic ' . $comic->title . ' correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('admin.comics.index')->with('message', 'Hai cancellato il Comic ' . $comic->title . ' correttamente');
    }
}
