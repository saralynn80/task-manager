@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">

<h2>All Tasks: </h2>

    @foreach ($tasks as $task)
        <ul>
            <li><a href="tasks/{{ $task->id }}" style="font-size: 18px; color: #000000">{{ $task->name }} - </a>
            	<a href="tasks/{{ $task->id }}" style="font-weight: bold">{{ $task->due_date }}</a>
                
            		<form action="tasks/{{ $task->id }}" method="POST">
            			{{ csrf_field() }}
            			{{ method_field('DELETE') }}

            		 <button class="btn btn-labeled btn-danger" style="margin-top: 10px; margin-bottom: 10px">
            		 	<i class="glyphicon glyphicon-trash"></i></button>


                	<button class="btn btn-labeled btn-success" style="margin-top: 10px; margin-bottom: 10px">
                		<i class="glyphicon glyphicon-ok"></i></button>
                	</form>
        			
        	</li>
        </ul>
    @endforeach

    <div>
        <a href="tasks/create" class="btn btn-primary" role="button" style="margin-top: 20px">+ New Task</a>
    </div>

@stop