<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));

        /* OPPURE: 

        return view('comics.index', [
            'comics' => $comics
        ]);

        */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comicData = $request->all();

        $comic = new Comic();
        $comic->title = $singleComicData['title'];
        $comic->description = $singleComicData['description'];
        $comic->thumb = $singleComicData['thumb'];
        $comic->price = $singleComicData['price'];
        $comic->series = $singleComicData['series'];
        $comic->sale_date = $singleComicData['sale_date'];
        $comic->type = $singleComicData['type'];

        $validatedData = $request->validate([
            'title'             => 'required|max:256',
            'description'       => 'nullable|max:1024',
            'thumb'             => 'nullable|max:1024|url',
            'price'             => 'nullable|numeric|min:1|max:1000',
            'series'            => 'nullable|max:64',
            'sale_date'         => 'nullable|date',
            'type'              => 'required|max:32',
            'artists'           => 'required|max:2000|json',
            'writers'           => 'required|max:2000|json',
        ], [
            'title.required' => 'Title required',
            'title.max' => 'Insert a maximum of 256 characters'
        ]);
        

        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $comic = Comic::findOrFail ();

        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comics)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $newComic = $request->all();

        $comic->title = $newComic['title'];
        $comic->description = $newComic['description'];
        $comic->thumb = $newComic['thumb'];
        $comic->price = $newComic['price'];
        $comic->series = $newComic['series'];
        $comic->sale_date = $newComic['sale_date'];
        $comic->type = $newComic['type'];
        $comic->artists = str_replace(',', '|', $newComic['artists']);
        $comic->writers = str_replace(',', '|', $newComic['writers']);



        $validatedData = $request->validate([
            'title'             => 'required|max:256',
            'description'       => 'nullable|max:1024',
            'thumb'             => 'nullable|max:1024|url',
            'price'             => 'nullable|numeric|min:1|max:1000',
            'series'            => 'nullable|max:64',
            'sale_date'         => 'nullable|date',
            'type'              => 'required|max:32',
            'artists'           => 'required|max:2000|json',
            'writers'           => 'required|max:2000|json',
        ], [
            'title.required' => 'Title required',
            'title.max' => 'Insert a maximum of 256 characters'
        ]);


        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
