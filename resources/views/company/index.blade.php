@extends('master')
 
@section('content')
    <h3>My Companies</h3>

    @if(Session::has('flash_message'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ Session::get('flash_message') }}
    </div>
    @endif

    @if ( !$companies->count() )
        You have no company
    @else
        <table class="table" border="0" width="100%">
            <tr class="info"><td>Company Name</td><td>Edit</td><td>Delete</td>
            </tr>
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
        {!! link_to_route('company.create', 'Create Company', '', array('class' => 'btn btn-info')) !!}
    </p>
@endsection
 

