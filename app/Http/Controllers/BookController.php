<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = Book::with('author');

    $categories = Book::select('category')
        ->distinct()
        ->orderBy('category', 'asc')
        ->pluck('category');

    if ($search = $request->input('search')) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'like', "%{$search}%")
              ->orWhere('category', 'like', "%{$search}%")
              ->orWhereHas('author', function($q2) use ($search) {
                  $q2->where('name', 'like', "%{$search}%");
              });
        });
    }

    if ($category = $request->input('category')) {
        $query->where('category', $category);
    }

    $books = $query->simplePaginate(10);

    return view('books.index', compact('books', 'categories', 'category'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $book = new Book();
    $book->name = $request->input('name');
    $book->price = $request->input('price');    
    $book->edition = $request->input('edition'); 
    $book->publication_date = $request->input('publication_date'); 
    $book->category = $request->input('category'); 
    $book->author_id = $request->input('author_id');

    $lastBook = Book::orderBy('id', 'desc')->first();
    $nextId   = $lastBook ? $lastBook->id + 1 : 1;
    $book->isbn = "978-1-00000-{$nextId}-0";

    $book->save(); 
    if ($request->hasFile('cover')) {
        $filename = "book" . $book->id . ".jpg"; 
        $request->file('cover')->move(public_path('covers'), $filename);

        $book->cover = $filename;
        $book->save();
    }

    return redirect()->route('books.index')->with('success', "{$book->name} sikeresen létrehozva");
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $authors = Author::find( $id);
        $book = Book::find($id);
        return view('books.show', compact('book','authors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $book = Book::findOrFail($id);
    $authors = Author::all();
    return view('books.edit', compact('book','authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
{
    $book->name = $request->input('name');
    $book->category = $request->input('category');
    $book->price = $request->input('price');
    $book->publication_date = $request->input('publication_date');
    $book->edition = $request->input('edition');
    $book->author_id = $request->input('author_id');

    if ($request->hasFile('cover')) {
        $filename = 'book'.$book->id . '.jpg';
        $request->file('cover')->move(public_path('covers'), $filename);
        $book->cover = $filename; 
    }

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
