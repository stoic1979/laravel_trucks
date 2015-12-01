@extends('master')
 
@section('content')
    <h2>Create Customer</h2><hr>

    {!! Form::model(new App\Customer, ['route' => ['customer.store'], 'role' => 'form']) !!}
        @include('customer/partials/_form', ['submit_text' => 'Create Customer'])
    {!! Form::close() !!}
@endsection
