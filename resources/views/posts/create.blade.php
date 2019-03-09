@extends('layouts.master')

@section('content')

<div id="main">
	<h1>Create Post</h1>
	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		<div class="">
			{{Form::label('title', 'Title')}}
			{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
		</div>
		<div class="">
			{{Form::label('body', 'body')}}
			{{Form::textarea('body', 'body text', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Title'])}}
		</div>
		<div class="form-group">
			{{ Form::file('cover_image') }}
		</div>
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
</div>

@endsection