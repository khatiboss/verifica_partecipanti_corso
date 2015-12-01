@extends('app')

@section('title')
Create a student
@stop

@section('content')
<h1 class="page-header">Students</h1>

<h2 class="sub-header">Create</h2>
{!! Form::model($student = new \App\Student, array('action' => 'StudentsController@index')) !!}
	@include('students.form', ['submitButtonText' => 'Create'])
{!! Form::close() !!}

@include('errors.list')

@stop