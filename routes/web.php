<?php
 
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
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
 
Route::post('/book', [BookController::class, 'store'])->name('book.store');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::patch('/book/{book}', [BookController::class, 'update'])->name('book.update');
Route::get('/book/{book}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::delete('/book/{book}', [BookController::class, 'destroy'])->name('book.destroy');
Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/{book}', [BookController::class, 'show'])->name('book.show');
 
