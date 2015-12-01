@extends('app')

@section('title')
{{$student->last_name}} {{$student->first_name}}
@stop

@section('content')
<h1 class="page-header">Students</h1>

<h2 class="sub-header">{{$student->last_name}} {{$student->first_name}}</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<tr>
			<td>ID</td>
			<td>{{$student->id}}</td>
		</tr>
		<tr>
			<td>Last name</td>
			<td>{{$student->last_name}}</td>
		</tr>
		<tr>
			<td>First name</td>
			<td>{{$student->first_name}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$student->email}}</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>{{$student->phone}}</td>
		</tr>

	</table>
<ul>
@stop