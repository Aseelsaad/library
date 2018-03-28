@extends('layout.main')

@section('content')
<section class="hero text-center">
    <br/>
    <br/>
    <br/>
    <br/>
    <h2 >
        <strong>
            Al-Nahrain E-Library
        </strong>
    </h2>
    <br>
    <a href="{{url('/books')}}"><button class="btn btn-danger btn-lg">Check out available books</button></a>
</section>
  <!-- Display message after entering the information of graduation documentation -->
   @if (session('status'))
       <div class="alert alert-success">
           <h3 class="text-center">{{ session('status') }}</h3>
       </div>
       @endif
<br>
<div class="subheader text-center">
     <h2>
     Latest Books
</h2>
</div>

<!-- Latest books -->
<div class="row">
  @forelse($books as $book)

    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a  href="{{route('cart.addItem',$book->id)}}" class="button  expanded add-to-cart">
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
        </div>
    </div>

    @empty
    <h3>No books added yet</h3>
  @endforelse
</div>
<br>


@endsection
