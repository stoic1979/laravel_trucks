@extends('master')

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
 
@section('content')
    <h2>Companies, count: {{ $companies->count() }} </h2>
 
    @if ( !$companies->count() )
        You have no company
    @else
        <table border="1" width="100%">
            @foreach( $companies as $company )
                <tr>
                    {!! Form::open(array('class' => 'form-inline', 
                    'method' => 'DELETE', 
                    'route' => array('company.destroy', $company->slug))) !!}
                        <td><a href="{{ route('company.show', $company->slug) }}">{{ $company->title }}</a></td>
                        
                        <td>{!! link_to_route('company.edit', 'Edit', array($company->slug), array('class' => 'btn btn-info')) !!}</td>
                        <td>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>
                        
                    {!! Form::close() !!}
                </tr>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('company.create', 'Create Company') !!}
    </p>
@endsection
 

