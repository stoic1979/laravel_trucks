@extends('master')
 
@section('content')
    <h2>Create Company</h2><hr>

    {!! Form::model(new App\Company, ['route' => ['company.store'], 'role' => 'form']) !!}
        @include('company/partials/_form', ['submit_text' => 'Create Company'])
    {!! Form::close() !!}
@endsection
