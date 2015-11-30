@extends('master')
 
@section('content')
    <h2>Companies, count: {{ $companies->count() }} </h2>

    @if(Session::has('flash_message'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('flash_message') }}
    </div>
    @endif

    @if ( !$companies->count() )
        You have no company
    @else
        <table border="1" width="100%">
            @foreach( $companies as $company )
                <tr>

                    {!! Form::open(array(
                            'class' => 'form-inline', 
                            'method' => 'DELETE', 
                            'id' => 'frmDelete-' . $company->id,
                            'style' => 'display:inline',
                            'route' => array('company.destroy', $company->id))) 
                    !!}
                        <td><a href="{{ route('company.show', $company->id) }}">{{ $company->title }}</a></td>
                        
                        <td>{!! link_to_route('company.edit', 'Edit', array($company), array('class' => 'btn btn-info')) !!}</td>
                        <td>
                            {!! 
                                Form::button(
                                'Delete', 
                                 array('class'        => 'btn btn-danger', 
                                       'data-toggle'  => 'modal',
                                       'data-target'  => '#confirmDelete', 
                                       'data-title'   => 'Delete Company',
                                       'id'           => $company->id ,
                                       'data-message' => 'Are you sure you want to delete this company ?'
                                )) 
                            !!}
                        </td>
                        
                    {!! Form::close() !!}
                </tr>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('company.create', 'Create Company') !!}
    </p>
@endsection
 

