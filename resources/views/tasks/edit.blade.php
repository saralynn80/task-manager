@extends('layouts.app')

@section('content')

<h3>{!! $task->name !!} </h3>

	<hr/>

	<!-- We edit the article at tasks/{tasks}/edit, and when that form submits 
		a PATCH request is submitted to tasks/{id} -->

	{!! Form::model($task, ['method' => 'PATCH', 'action' => ['TasksController@update', $task->id]]) !!}

		@include('partials.form', ['submitButtonText' => 'Update'])

		<!-- Cancel -->
		<div>
			<a href="/tasks" class="btn btn-labeled btn-danger" role="button" style="margin-bottom: 20px">Cancel</a>
		</div>

	{!! Form::close() !!}

	@include ('errors.list')

@stop