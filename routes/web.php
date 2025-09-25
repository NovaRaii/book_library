<?php
 
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::patch('/authors/{author}', [AuthorController::class, 'update'])->name('authors.update');
Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show');
 
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::patch('/books/{book}', [BookController::class, 'update'])->name('books.update');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
 
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::patch('/categories/{author}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/{author}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::delete('/categories/{author}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{author}', [CategoryController::class, 'show'])->name('categories.show');