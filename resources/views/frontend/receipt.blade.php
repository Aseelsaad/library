@extends('layout.main')
@section('content')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <h3 class="display-4">Hope you to get advantage</h3>
      <p class="lead">Show this appeared form to the librarian(Save it as image or screenshoot it)</p>
      <hr class="my-4">
      @foreach($orders as $order)

            <h4>Order#: {{$order->id}} </h4>
            <hr>
              <h4>Ordered by: {{$order->user->name}} </h4>
              <div class="clearfix"></div>
              <hr>
              <h4>Borrowed books</h4>
              <table class="table table-bordered">
                  <tr>
                      <th class="text-center">Book name</th>
                      <th class="text-center">Book category</th>
                      <th class="text-center">Book type</th>
                  </tr>
                  @foreach($order->orderItems as $item)
                      <tr>
                          <td class="text-center">{{$item->name}}</td>
                          <td class="text-center">{{$item->category->name}}</td>
                          <td class="text-center">{{$item->type}}</td>
                      </tr>
                  @endforeach
              </table>
      @endforeach
    </div>
  </div>
</div>
@endsection
