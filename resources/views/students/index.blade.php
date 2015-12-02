@extends('app')

@section('title')
Students
@stop

@section('content')
<h1 class="page-header">Students</h1>

<h2 class="sub-header">Index</h2>
@if (count($students))
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($students as $student)
					<tr>
						<td><a href="{{action('StudentsController@show', [$student->id])}}">{{$student->id}}</a></td>
						<td>{{$student->last_name}}</td>
						<td>{{$student->first_name}}</td>
						<td>{{$student->email}}</td>
						<td>{{$student->phone}}</td>
						<td><a href="{{action('StudentsController@edit', [$student->id])}}" class="btn btn-primary">Update</a></td>
						<td>
							{!! Form::open(array('url' => 'students/'. $student->id)) !!}
			                    {!! Form::hidden('_method', 'DELETE') !!}
			                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
			                {!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@else
<p>no students</p>
@endif
@stop