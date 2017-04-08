@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">

<h3>Task: {{ $task->name }}</h3>

<h3> {{ $task->body }}</h3>

<h3>Due: {{ $task->due_date }}</h3>

<div>
    <a href="{{ $task->id }}/edit" class="btn btn-primary" role="button">Edit Task</a>
</div>

<form action="/{{ $task->id }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}

	<button class="btn btn-labeled btn-danger" style="margin-top: 10px; margin-bottom: 10px">
        <i class="glyphicon glyphicon-trash"></i>
    </button>

    <button class="btn btn-labeled btn-success" style="margin-top: 10px; margin-bottom: 10px">
    	<i class="glyphicon glyphicon-ok"></i>
    </button>
</form>

@stop