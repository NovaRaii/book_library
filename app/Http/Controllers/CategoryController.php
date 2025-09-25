<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $categories = Category::orderBy('id', 'asc')->get();
    return view('categories.index', compact('categories'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category  = new Category();
        $category->name = $request->input('name');
        $category->save();
        return redirect()->route('categories.index')->with('success', "{$category->name} sikeresen létrehozva");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category  = Category::find($id);
        $category->name = $request->input('name');
        $category->save();
        return redirect()->route('categories.index')->with('success', "{$category->name} sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category  = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success', "Sikeresen törölve");
    }
}
