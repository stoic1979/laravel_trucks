
<div style="width:450px; ">
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('firm_name', 'Firm Name:') !!}
    {!! Form::text('firm_name', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('mobile_number', 'Mobile No.:') !!}
    {!! Form::text('mobile_number', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) !!}
</div>

<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('state', 'State:') !!}
    {!! Form::text('state', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>

</div>