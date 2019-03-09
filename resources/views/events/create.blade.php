@extends('layouts.master')

@section('content')

<div id="main">
	<h1>Create Event</h1>
	{!! Form::open(['action' => 'EventsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
		</div>
		<div class="">
			{{Form::label('location', 'Location')}}
			{{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Event Location'])}}
		</div>
		<div class="">
			{{Form::label('time', 'Time')}}
			{{Form::text('time', '', ['class' => 'form-control', 'placeholder' => 'Format: 7PM May 9th 2019'])}}
		</div>
		<div class="">
			{{Form::label('body', 'body')}}
			{{Form::textarea('body', 'body text', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Title'])}}
		</div>
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
</div>

@endsection