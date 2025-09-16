@extends('layout')
@section('content')
<h1>Új Könyv</h1>
<div>


<form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <fieldset>
        <label for="name">Megnevezés</label>
        <input type="text" id="name" name="name">

        <label for="category">Kategória</label>
        <input type="text" id="category" name="category">

        <label for="price">Ár</label>
        <input type="text" id="price" name="price">

        <label for="publication_date">Kiadási Év</label>
        <input type="text" id="publication_date" name="publication_date">

        <label for="edition">Kiadás</label>
        <input type="text" id="edition" name="edition">

        <label for="author_id">Szerző</label>
        <select name="author_id" id="select-author" required>
            <option value="" disabled selected>-- Válassz szerzőt --</option>
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
        </select>

        <label for="cover">Borító</label>
        <input type="file" id="cover" name="cover" accept="image/*">
    </fieldset>

    <button type="submit">Ment</button>
    <a href="{{ route('books.index') }}">Mégse</a>
</form>
</div> 
@endsection