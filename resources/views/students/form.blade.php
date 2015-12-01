<div class="form-group">
	{!! Form::label('last_name', 'Last Name') !!}
	{!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('first_name', 'First Name') !!}
	{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('phone', 'Phone') !!}
	{!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>