@extends('layout')
 
@section('content')
<h1>Könyvek</h1>

<form method="GET" action="{{ route('books.index') }}">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Keresés...">
    <button type="submit">Keresés</button>
    <select name="category" onchange="this.form.submit()">
        <option value="">-- Összes kategória --</option>
        @foreach($categories as $cat)
            <option value="{{ $cat }}" {{ $cat == request('category') ? 'selected' : '' }}>
                {{ $cat }}
            </option>
        @endforeach
    </select>
</form>

<div>
    <a href="{{ route('books.create') }}" title="Új">Új hozzáadása</a>

    <ul>
        <table>
        @foreach($books as $book)
            <li class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <div class="col id">{{ $book->id }}</div>
                <div class="col cover">
    @if($book->cover)
        <img src="{{ asset('covers/' . $book->cover) }}" alt="{{ $book->name }}" style="height:60px;">
    @else
        <span>No cover</span>
    @endif
</div>

                
                <div class="col">
                    <a href="{{ route('books.show', $book->id) }}">
                        {{ $book->author->name ?? 'Ismeretlen szerző' }} – {{ $book->name }}
                    </a>
                </div>
                
                <div class="right">
                    <div class="col">
                        <a href="{{ route('books.edit', $book->id) }}"><button>Módosít</button></a>
                    </div>
                    <div class="col">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="btn-del-subject">Töröl</button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
        </table>
    </ul>
    <div class="mt-3">
    {{ $books->appends(request()->query())->links() }}
</div>

<style>
/* Hide the Previous and Next arrows */
.pagination .page-item:first-child,
.pagination .page-item:last-child {
    display: none;
}
</style>
</div>
@endsection
