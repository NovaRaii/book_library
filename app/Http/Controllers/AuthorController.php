<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $author  = new Author();
        $author->name = $request->input('name');
        $author->nationality = $request->input('nationality'); 
        $author->age = $request->input('age'); 
        $author->gender = $request->input('gender'); 
        $author->save();
        return redirect()->route('authors.index')->with('success', "{$author->name} sikeresen létrehozva");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author = Author::find($id);
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::find($id);
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $author  = Author::find($id);
        $author->name = $request->input('name');
        $author->nationality = $request->input('nationality'); 
        $author->age = $request->input('age'); 
        $author->gender = $request->input('gender'); 
        $author->save();
        return redirect()->route('authors.index')->with('success', "{$author->name} sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author  = Author::find($id);
        $author->delete();
        return redirect()->route('authors.index')->with('success', "Sikeresen törölve");
    }
}
