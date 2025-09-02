@extends('layout')
 
@section('content')
<h1>Könyvek</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
 
    <ul>
        <table>
        <a href="{{ route(name: 'books.create') }}" title="Új">Új hozzáadása</a>
        @foreach($books as $book)
            <li class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <div class="col id">{{ $book->id }}</div>
                <div class="col">{{$book->name}}</div>
                <div class="right">
                    <div class="col">
{{--                        <a href="{{ route('books.show', $book->id) }}"><button><i class="fa fa-binoculars" title="Mutat"></i></button></a></div>--}}
                       
                    </div>
 
                    
                        <div class="col">
                            <a href="{{ route('books.edit', $book->id) }}"><button>Módosít</button></a>
                        </div>
                        <div class="col">
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST">
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
    @isset($abc)
        <div class="paginator">
            {{ $subjects
                ->appends([
                    'sort_by' => request('sort_by'),
                    'sort_dir' => request('sort_dir'),
                ])
                ->links()
 
            }}
        </div>
    @endisset
</div>
@endsection