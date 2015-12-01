@extends('master')
 
@section('content')
    <h3>My Trucks</h3>

    @if ( !$trucks->count() )
        You have no trucks.
    @else
        <table class="table" border="0" width="100%">
            <tr class="info"><td>Make</td><td>Year Model</td><td>Edit</td><td>Delete</td>
            </tr>
            @foreach( $trucks as $truck )
                <tr>

                    {!! Form::open(array(
                            'class' => 'form-inline', 
                            'method' => 'DELETE', 
                            'id' => 'frmDelete-' . $truck->id,
                            'style' => 'display:inline',
                            'route' => array('truck.destroy', $truck->id))) 
                    !!}
                        <td><a href="{{ route('truck.show', $truck->id) }}">{{ $truck->make }}</a></td>
                        <td>{{ $truck->yr_model }}</td>
                        
                        <td>{!! link_to_route('truck.edit', 'Edit', array($truck), array('class' => 'btn btn-info')) !!}</td>
                        <td>
                            {!! 
                                Form::button(
                                'Delete', 
                                 array('class'        => 'btn btn-danger', 
                                       'data-toggle'  => 'modal',
                                       'data-target'  => '#confirmDelete', 
                                       'data-title'   => 'Delete truck',
                                       'id'           => $truck->id ,
                                       'data-message' => 'Are you sure you want to delete this truck ?'
                                )) 
                            !!}
                        </td>
                        
                    {!! Form::close() !!}
                </tr>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('driver.create', 'Create Driver', '', array('class' => 'btn btn-info')) !!}
    </p>
@endsection
 

