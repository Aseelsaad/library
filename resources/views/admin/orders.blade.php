@extends('admin.layout.admin')
@section('content')
    <h3>Orders</h3>
    <hr>

    <ul>
        @foreach($orders as $order)
            <li>
                <h4>Order by {{$order->user->name}} </h4>

                <form action="{{route('toggle.retrieved',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle">
                    {{csrf_field()}}
                    <label>Retrieved</label>
                    <input type="checkbox" value="1" name="retrieved"  {{$order->retrieved==1?"checked":"" }}>
                    <input type="submit" value="Submit">
                </form>

                <div class="clearfix"></div>
                <hr>
                <h3>Borrowed books</h3>
                <table class="table table-bordered">
                    <tr>
                        <th style="text-align:center">Book name</th>
                        <th style="text-align:center">Book category</th>
                        <th style="text-align:center">Book type</th>
                    </tr>
                    @foreach($order->orderItems as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>{{$item->type}}</td>
                        </tr>

                    @endforeach
                </table>
            </li>

        @endforeach

    </ul>
@endsection
