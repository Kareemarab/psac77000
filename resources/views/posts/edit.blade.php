@extends('layouts.master')

@section('content')

<!-- Main -->
<div style="background-color:#fff;" id="main" class="alt">
	<div class="inner">
		<section>
			<h1 style="color: #000">Edit Post</h1>
			{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
				<div style="color: #fff" class="field">
					{{Form::label('title', 'Title')}}
					{{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
				</div>

				<div class="field">
					{{Form::label('body', 'body')}}
					{{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Title'])}}
				</div>
				
				<div class="form-group">
					{{ Form::file('cover_image') }}
				</div>

				<ul class="actions">
					{{Form::hidden('_method','PUT')}}
					{{Form::submit('Submit', ['class' => 'button'])}}
				</ul>
			</form>
			{!! Form::close() !!}
		</section>
	</div>
</div>

@endsection