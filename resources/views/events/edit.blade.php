@extends('layouts.master')

@section('content')

<!-- Main -->
<div id="main" class="alt">
	<div class="inner">

		<section>
			<h1 style="color: #000">Edit Event</h1>
			{!! Form::open(['action' => ['EventsController@update', $event->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
				<div style="color: #fff" class="field">
					{{Form::label('title', 'Title')}}
					{{Form::text('title', $event->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
				</div>
				<div style="color: #fff" class="field">
					{{Form::label('location', 'Location')}}
					{{Form::text('location', $event->location, ['class' => 'form-control', 'placeholder' => 'Event Location'])}}
				</div>
				<div style="color: #fff" class="field">
					{{Form::label('time', 'Time')}}
					{{Form::text('time', $event->time, ['class' => 'form-control', 'placeholder' => 'Format: May 9th 2019'])}}
				</div>

				<div class="field">
					{{Form::label('body', 'body')}}
					{{Form::textarea('body', $event->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Title'])}}
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