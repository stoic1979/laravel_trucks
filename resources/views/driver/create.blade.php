@extends('master')
 
@section('content')
    <h2>Create Driver</h2><hr>

    {!! Form::model(new App\Driver, ['route' => ['driver.store'], 'role' => 'form']) !!}
        @include('driver/partials/_form', ['submit_text' => 'Create Driver'])
    {!! Form::close() !!}
@endsection
