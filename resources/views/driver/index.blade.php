@extends('master')
 
@section('content')
    <h3>My Drivers</h3>

    @if ( !$drivers->count() )
        You have no driver
    @else
        <table class="table" border="0" width="100%">
            <tr class="info"><td>Driver Name</td><td>Firm Name</td><td>Edit</td><td>Delete</td>
            </tr>
            @foreach( $drivers as $driver )
                <tr>

                    {!! Form::open(array(
                            'class' => 'form-inline', 
                            'method' => 'DELETE', 
                            'id' => 'frmDelete-' . $driver->id,
                            'style' => 'display:inline',
                            'route' => array('driver.destroy', $driver->id))) 
                    !!}
                        <td><a href="{{ route('driver.show', $driver->id) }}">{{ $driver->name }}</a></td>
                        <td>{{ $driver->firm_name }}</td>
                        
                        <td>{!! link_to_route('driver.edit', 'Edit', array($driver), array('class' => 'btn btn-info')) !!}</td>
                        <td>
                            {!! 
                                Form::button(
                                'Delete', 
                                 array('class'        => 'btn btn-danger', 
                                       'data-toggle'  => 'modal',
                                       'data-target'  => '#confirmDelete', 
                                       'data-title'   => 'Delete driver',
                                       'id'           => $driver->id ,
                                       'data-message' => 'Are you sure you want to delete this driver ?'
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
 

