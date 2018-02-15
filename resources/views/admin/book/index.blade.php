@extends('admin.layout.admin')

@section('content')

    <h3>Books</h3>

<ul class="container">
    @forelse($books as $book)
    <li class="row">


       <div class="col-md-8">
        <h4>Name of book:{{$book->name}}</h4>


        </div>

    </li>

        @empty

        <h3>No books added yet</h3>

    @endforelse
</ul>


@endsection
