@extends('master')
 
@section('content')
    <h2>{{ $customer->name }}</h2><hr>

    Address: {{ $customer->address}} <br>
    State: {{ $customer->address}}   <br>
    Country: {{ $customer->address}} <br>


   <br>
    <p>
        Firm:<br>
        {{ $customer->firm_name }}
    </p>
@endsection