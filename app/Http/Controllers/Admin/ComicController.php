<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all()->sortByDesc('id');
        //$comics = Comic::all();
        //dd($comics);
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
        /* senza validazione
        $comic = new Comic();
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->author = $request->author;
        $comic->save();
        //dd($comic); */
        $validated = $request->validate([
            'title' => 'required | max:100 | min:5',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required | numeric',
            'series' => 'nullable | max:100',
            'sale_date' => 'nullable | date',
            'type' => 'nullable | max:50',
            'author' => 'required | max:50'
        ]);
        //ddd($validated);
        Comic::create($validated);

        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //dd($comic);
        //return view('comics.show', compact('comic'));
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
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
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validated = $request->validate([
            'title' => 'required | max:100 | min:5',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required | numeric',
            'series' => 'nullable | max:100',
            'sale_date' => 'nullable | date',
            'type' => 'nullable | max:50',
            'author' => 'required | max:50'
        ]);
        $comic->update($validated);
        return redirect()->route('admin.comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('admin.comics.index');
    }
}
