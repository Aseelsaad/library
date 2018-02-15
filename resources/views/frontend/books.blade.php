@extends('layout.main')

@section('title','Books')
@section('content')

<!-- books listing -->
       <!-- Latest books -->
      <div class="row">
        @forelse($books as $book)
          <div class="small-3 columns">
              <div class="item-wrapper">
                  <div class="img-wrapper">
                      <a class="button expanded add-to-cart">
                          Add to Cart
                      </a>
                      <a href="{{url('images',$book->image)}}">
                          <img src="{{url('images',$book->image)}}"/>
                      </a>
                  </div>
                  <a href="{{url('/book')}}/{{$book->id}}">
                      <h3>
                          {{$book->name}}
                      </h3>
                  </a>
                  <p>
                      {{$book->description}}
                  </p>
              </div>
          </div>
          @empty
          <h3>No books added yet</h3>
        @endforelse

      </div>
@endsection
