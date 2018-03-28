@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Borrower account</div>

                <div class="panel-body">
                  <div class="alert">
                      User name : {{ $user->name }}
                  </div>
                  <div class="alert">
                     User email : {{ $user->email }}
                  </div>
                </div>

            </div>
        </div>
    </div>


</div>
@endsection
