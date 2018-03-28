@extends('layout.main')

@section('content')
<div class="container mt-4">
  <center><h3>Cart items</h3></center>
  <div class="row justify-content-center">
      <div class="col-md-4">
        <table class="table-hover">
          <thead class="thead-dark">
            <tr>
              <th>Resource name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($cartItems as $cartItem)
            <tr>
              <td>{{$cartItem->name}}</td>
              <td>
            <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
               {{csrf_field()}}
               {{method_field('DELETE')}}
               <input class="button small alert" type="submit" value="Delete">
             </form>
        </td>
    </tr>
          </tbody>
            @endforeach
        </table>
      </div>
  </div>
  <div class="row justify-content-center">
    <h6>No. of ordered resources : {{Cart::count()}}</h6>
  </div>
  <div class="row justify-content-center">
    <a href="{{route('checkout.shipping')}}" class="button">Confirmation</a>
  </div>
</div>
  @endsection
