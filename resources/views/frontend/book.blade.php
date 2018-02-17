@extends('layout.main')

@section('title','Book')
@section('content')

<!-- Book details -->
      <div class="row">
          <div class="small-5 small-offset-1 columns">
              <div class="item-wrapper">
                  <div class="img-wrapper">
                      <a href="#">
                           <img src="{{url('images',$book->image)}}"/>
                      </a>
                  </div>
              </div>
          </div>
          <div class="small-6 columns">
              <div class="item-wrapper">
                  <h3 class="subheader">
                     <span class="price-tag">{{$book->name}}</span> Al-Nahrain E-library
                  </h3>
                  <div class="row">
                      <div class="large-12 columns">
                          <label>
                              Book's description :

                            <p>
                                {{$book->description}}
                            </p>
                              <hr>
                          </label>
                          <a  href="{{route('cart.addItem',$book->id)}}" class="button expanded add-to-cart">
                              Add to Cart
                          </a>
                      </div>
                  </div>
              <p class="text-left subheader"><small>* Designed by NUC </small></p>

              </div>
          </div>
      </div>

@endsection
