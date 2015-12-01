@extends('app')

@section('title')
Update a student
@stop

@section('content')
<h1 class="page-header">Students</h1>

<h2 class="sub-header">Update</h2>
{!! Form::model($student, ['method' => 'PATCH', 'action' => ['StudentsController@update', $student->id]]) !!}
	@include('students.form', ['submitButtonText' => 'Update'])
{!! Form::close() !!}

@include('errors.list')

@stop