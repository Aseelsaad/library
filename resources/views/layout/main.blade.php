<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title','Al-Nahrain library')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


    </head>
    <body>
        <div  class="top-bar">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                    <a href="{{url('/')}}">
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                       Al-Nahrain E-library
                    </a>
                </h4>
            </div>
            <div class="top-bar-right">
                <ol class="menu">
                    <li>
                        <a href="{{url('/books')}}">
                            BOOKS
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            CONTACT
                        </a>
                    </li>
                    <li>
                        <a href="{{route('cart.index')}}">
                            <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                            </i>
                            CART
                            <span class="alert badge">
                                {{Cart::count()}}
                            </span>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
          @yield('content')
          <br><br>
<!-- Footer -->
<!-- <footer class="footer">
  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-laptop"></i>
      <p></p>
    </div>
    <div class="small-12 medium-4 large-4 columns">
      <i class="fi-html5"></i>
      <p></p>
    </div>

    <div class="small-6 medium-4 large-4 columns">
      <h4>Follow Us</h4>
      <ul class="footer-links">
        <li><a href="https://github.com/webdevmatics">GitHub</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="https://twitter.com/webdevmatics">Twitter</a></li>
      <ul>
    </div>
  </div>
</footer> -->
<div class="footer">
  <div >
    <center>
          <a href='#'><i class="fa fa-facebook fa-3x fa-fw"></i></a>
          <a href='#'><i class="fa fa-twitter fa-3x fa-fw"></i></a>
          <a href='#'><i class="fa fa-youtube-play fa-3x fa-fw"></i></a>
          <a href='#'><i class="fa fa-linkedin fa-3x fa-fw"></i></a>
        </center>
  </div>
</div>
    <script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('dist/js/app.js')}}"></script>
    </body>
</html>
