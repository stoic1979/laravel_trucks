@extends('master')
 
@section('content')
    <h2>{{ $driver->name }}</h2><hr>

    Address: {{ $driver->address}} <br>
    State: {{ $driver->address}}   <br>
    Country: {{ $driver->address}} <br>


   <br>
    <p>
        Social Security No.:<br>
        {{ $driver->social_security_no }}
    </p>
@endsection