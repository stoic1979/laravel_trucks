@extends('master')
 
@section('content')
    <h2>Edit Company</h2><hr>

    {!! Form::model($company, ['method' => 'PATCH', 'route' => ['company.update', $company], 'role' => 'form'] ) !!}
        @include('company/partials/_form', ['submit_text' => 'Edit Company'])
    {!! Form::close() !!}
@endsection
