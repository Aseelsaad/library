@extends('layout.main')

@section('title','Books')
@section('content')

<!-- books listing -->
       <!-- Latest books -->
       <div class="container">
         <!-- specify which type we are looking for -->
         <h1>Choose your resource type</h1>
         Filter :
         <a href="/books/?type=book">Book | </a>
         <a href="/books/?type=thesis">Thesis | </a>
         <a href="/books/?type=graduationProject"> Graduation project |</a>
         <a href="/books">All</a>
       <div class="row">
         <!-- create a pagination link that make me move from one page to another -->
         {{$books->links()}}
       </div>
      <div class="row">
        @forelse($books as $book)
          <div class="small-3 columns">
              <div class="item-wrapper">
                  <div class="img-wrapper">
                    <a  href="{{route('cart.addItem',$book->id)}}" class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                      <a href="{{url('images',$book->image)}}">
                          <img  src="{{url('images',$book->image)}}"/>
                      </a>
                  </div>
                  <a href="{{url('/book')}}/{{$book->id}}">
                      <h3>
                          {{$book->name}}
                      </h3>
                  </a>
                  <!-- <p>
                      {{$book->description}}
                  </p> -->
                  <p>
                      {{$book->type}}
                  </p>
              </div>
          </div>
          @empty
          <h3>No books added yet</h3>
        @endforelse

      </div>
      </div>
@endsection
