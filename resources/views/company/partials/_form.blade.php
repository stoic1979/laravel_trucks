
<div style="width:450px; ">
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, array('class' => 'form-control')) !!}
</div>


<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) !!}
</div>

<div class="form-group">
    {!! Form::label('phone_number', 'Phone No.:') !!}
    {!! Form::text('phone_number', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('mobile_number', 'Mobile No.:') !!}
    {!! Form::text('mobile_number', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::label('registered_on', 'Registered On:') !!} (YYYY-MM-DD)
    {!! Form::text('registered_on', null, array('class' => 'form-control')) !!}
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
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>

</div>