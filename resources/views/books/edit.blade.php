@extends('layout')

@section('content')
    <div>
        <form action="{{ route('books.update', $book->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <fieldset>
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $book->name) }}">  

                <label for="category">Kategória</label>
                <input type="text" id="category" name="category" required value="{{ old('category', $book->category) }}">  

                <label for="price">Ár</label>
                <input type="text" id="price" name="price" required value="{{ old('price', $book->price) }}">  

                <label for="publication_date">Kiadási Év</label>
                <input type="text" id="publication_date" name="publication_date" required value="{{ old('publication_date', $book->publication_date) }}">  

                <label for="edition">Kiadás</label>
                <input type="text" id="edition" name="edition" required value="{{ old('edition', $book->edition) }}">  

                <label for="author_id">Szerző</label>
                <select name="author_id" id="select-author" required>
                    <option value="" disabled>-- Válassz szerzőt --</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}" 
                            {{ $book->author_id == $author->id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>

                <label for="cover">Borító</label><br>
                <img 
                    src="{{ asset('covers/' . ($book->id . '.jpg')) }}" 
                    alt="{{ $book->name }}" 
                    class="img-fluid mb-2" 
                    style="max-height: 200px;">
                <br>
                <input type="file" id="cover" name="cover" accept="image/*">
            </fieldset>

            <button type="submit">Ment</button>
            <a href="{{ route('books.index') }}">Mégse</a>
        </form>
    </div>
@endsection
