@extends('master')
 
@section('content')
    <h3>My Customers</h3>

    @if ( !$customers->count() )
        You have no customer
    @else
        <table class="table" border="0" width="100%">
            <tr class="info"><td>Customer Name</td><td>Firm Name</td><td>Edit</td><td>Delete</td>
            </tr>
            @foreach( $customers as $customer )
                <tr>

                    {!! Form::open(array(
                            'class' => 'form-inline', 
                            'method' => 'DELETE', 
                            'id' => 'frmDelete-' . $customer->id,
                            'style' => 'display:inline',
                            'route' => array('customer.destroy', $customer->id))) 
                    !!}
                        <td><a href="{{ route('customer.show', $customer->id) }}">{{ $customer->name }}</a></td>
                        <td>{{ $customer->firm_name }}</td>
                        
                        <td>{!! link_to_route('customer.edit', 'Edit', array($customer), array('class' => 'btn btn-info')) !!}</td>
                        <td>
                            {!! 
                                Form::button(
                                'Delete', 
                                 array('class'        => 'btn btn-danger', 
                                       'data-toggle'  => 'modal',
                                       'data-target'  => '#confirmDelete', 
                                       'data-title'   => 'Delete customer',
                                       'id'           => $customer->id ,
                                       'data-message' => 'Are you sure you want to delete this customer ?'
                                )) 
                            !!}
                        </td>
                        
                    {!! Form::close() !!}
                </tr>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('customer.create', 'Create Customer', '', array('class' => 'btn btn-info')) !!}
    </p>
@endsection
 

