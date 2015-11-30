@extends('master')
 
@section('content')
    <h2>{{ $company->title }}</h2><hr>

    Address: {{ $company->address}} <br>
    State: {{ $company->address}}   <br>
    Country: {{ $company->address}} <br>


   <br>
    <p>
        Description:<br>
        {{ $company->description }}
    </p>
@endsection