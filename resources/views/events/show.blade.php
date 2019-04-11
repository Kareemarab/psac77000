@extends('layouts.master')

@section('content')

<!-- Main -->
<div id="main" class="alt">

	<!-- One -->
	<section style="background-color: #fff;" class="article" id="one">
		<div style="background-color: #fff;" class="inner">
			<header class="major">
				<h1 style="color: #000;">{{$event->title}}</h1>
				<h2 style="font-style: italic; font-size: 30px"> {{$event->location}} - {{$event->time}}</h2>

			</header>
			
			<p>{!!$event->body!!}</p>

			<h3>{{$event->user->name}}</h3>

			<hr>
			
			<a style="color: #E63946; text-decoration:none;" href="{{ url('/posts') }}">Check out our news articles &#8594;</a>
			<br>
			<a style="color: #E63946; text-decoration:none;" href="{{ url('/posts') }}">More events like this &#8594;</a>

			<br><br>

			@if(!Auth::guest())
				@if(Auth::user()->id == $event->user_id)
					<div class="inner">
						<a style="color: #000;" href="/events/{{$event->id}}/edit" class="button">Edit</a>
						{!!Form::open(['action' => ['EventsController@destroy', $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
							{{Form::hidden('_method', 'DELETE')}}
							{{Form::submit('Delete', ['class' => 'button'])}}
						{!!Form::close()!!}
					</div>
				@endif
			@endif
		</div>
	</section>
@endsection