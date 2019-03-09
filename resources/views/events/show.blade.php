@extends('layouts.master')

@section('content')

<!-- Main -->
<div id="main" class="alt">

	<!-- One -->
		<section class="article" id="one">
			<div class="inner">
				<header class="major">
					<h1>{{$event->title}}</h1>
					<h2>{{$event->location}} - {{$event->time}}</h2>

				</header>
				
				<p>{!!$event->body!!}</p>
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