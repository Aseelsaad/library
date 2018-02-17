@extends('layout.main')

@section('content')
    <div class="container mt-5">
<div class="row justify-content-center">
    <div class="col-md-6">
        <h3>Borrower Information</h3>

        {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

        <div class="form-group">
          <div class="form-group">
              {{ Form::label('fname', 'First name') }}
              {{ Form::text('fname', null, array('class' => 'form-control')) }}
          </div>
          <div class="form-group">
              {{ Form::label('lname', 'Last name') }}
              {{ Form::text('lname', null, array('class' => 'form-control')) }}
          </div>
          <div class="form-group">
              {{ Form::label('phone', 'Phone number') }}
              {{ Form::text('phone', null, array('class' => 'form-control')) }}
          </div>
        <div class="form-group">
            {{ Form::label('address', 'Address') }}
            {{ Form::text('address', null, array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('idnumber', 'University ID Number') }}
            {{ Form::text('idnumber', null, array('class' => 'form-control')) }}
        </div>
        {{ Form::submit('Get borrowing receipt', array('class' => 'button success')) }}
        {!! Form::close() !!}
    </div>
</div>
</div>
@endsection
