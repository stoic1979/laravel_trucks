@extends('master')
 
@section('content')
    <h2>Edit Customer</h2><hr>

    {!! Form::model($customer, ['method' => 'PATCH', 'route' => ['customer.update', $customer], 'role' => 'form'] ) !!}
        @include('customer/partials/_form', ['submit_text' => 'Edit Customer'])
    {!! Form::close() !!}
@endsection
