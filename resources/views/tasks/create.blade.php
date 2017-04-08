@extends('layouts.app')

@section('content')

	{!! Form::open(['url' => 'tasks']) !!}

		@include('partials.form', ['submitButtonText' => '+ Create'])

	{!! Form::close() !!}

	@include ('errors.list')

@stop