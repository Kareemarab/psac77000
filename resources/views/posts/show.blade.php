@extends('layouts.master')

@section('content')

<!-- Main -->
<div id="main" class="alt">
	<!-- One -->
		<section style="text-decoration:none; background-color: #fff;" class="article" id="one">
			<div style="background-color: #fff;" class="inner">
				<header class="major">
					<h1 style="color: #000;" >{{$post->title}}</h1>
					<h3>Written on {{$post->created_at}} EST</h3>
				</header>
				<img class="center" style=" position: center; float: center; width: 1000px; height: 500px; object-fit: cover; background-position: 50% 50%; background-repeat: no-repeat; background-size: cover;" src="/storage/cover_images/{{$post->cover_image}}" alt="" data-position="center center" />
				<p>{!!$post->body!!}</p>

				<h3>- {{$post->user->name}}</h3>

				<hr>
				<p><a style="color: #E63946; text-decoration:none;" href="{{ url('/posts') }}">Click here for more articles like this.</a></p>
				
				@foreach($all_posts as $post_)
					@if($post->id == $post_->id)
						@if($loop->index == 0)
							<a style="color: #000;" href="/posts/{{ $all_posts[$loop->index+1]->id }}" class="button pull-right">Next</a>
						@elseif($loop->index == sizeof($all_posts)-1)
							<a style="color: #000;" href="/posts/{{ $all_posts[$loop->index-1]->id }}" class="button">Previous</a>
						@else
							<a style="color: #000;" href="/posts/{{ $all_posts[$loop->index-1]->id }}" class="button">Previous</a>
							<a style="color: #000;" href="/posts/{{ $all_posts[$loop->index+1]->id }}" class="button pull-right">Next</a>
						@endif
					@endif
				@endforeach
				<br>
				<br>
				@if(!Auth::guest())
					@if(Auth::user()->id == $post->user_id)
						<div class="inner">
							<a style="color: #000;" href="/posts/{{$post->id}}/edit" class="button">Edit</a>
			        		{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
			            		{{Form::hidden('_method', 'DELETE')}}
			            		{{Form::submit('Delete', ['class' => 'button'])}}
			        		{!!Form::close()!!}
			        	</div>
        			@endif
        		@endif
			</div>
		</section>
@endsection