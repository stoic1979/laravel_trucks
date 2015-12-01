@extends('master')
 
@section('content')
    <h2>Edit Driver</h2><hr>

    {!! Form::model($driver, ['method' => 'PATCH', 'route' => ['driver.update', $driver], 'role' => 'form'] ) !!}
        @include('driver/partials/_form', ['submit_text' => 'Edit Driver'])
    {!! Form::close() !!}
@endsection
