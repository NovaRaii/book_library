<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Author::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book  = new Book();
        $book->name = $request->input('name');
        $book->price = $request->input('price');
        $book->id = $request->input('id'); 
        $book->edition = $request->input('edition'); 
        $book->publication_date = $request->input('publication_date'); 
        $book->category = $request->input('category'); 
        $book->save();
        return redirect()->route('books.index')->with('success', "{$book->name} sikeresen létrehozva");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book  = Book::find($id);
        $book->name = $request->input('name');
        $book->price = $request->input('price');
        $book->id = $request->input('id'); 
        $book->edition = $request->input('edition'); 
        $book->publication_date = $request->input('publication_date'); 
        $book->category = $request->input('category'); 
        $book->save();
        return redirect()->route('books.index')->with('success', "{$book->name} sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book  = Book::find($id);
        $book->delete();
        return redirect()->route('books.index')->with('success', "Sikeresen törölve");    }
}
