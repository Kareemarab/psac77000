@extends('layouts.master')

@section('content')

<!-- Banner -->
<!-- Note: The "styleN" class below should match that of the header element. -->
<section id="banner" class="style2">
	<div class="inner">
		<span class="image">
			<img src="../c.jpg" alt="" />
		</span>
		<header class="major">
			<h1 style="color: #E63946">News</h1>
		</header>
		<div class="content">
			<h4 style="color: #fff">Catch up with our latest stories.</h4>
		</div>
	</div>
</section>

<!-- Main -->
<div id="main">


	<!-- Two -->
		<section id="two" class="spotlights">
			@if(count($posts) > 0)
				@foreach($posts as $post)
					<section>
						{{-- <a href="generic.html" class="image">
							<img style="width: 100%; height: 100%;" src="/storage/cover_images/{{$post->cover_image}}" alt="" data-position="center center" />
						</a> --}}
						<div class="content">
							<div class="inner">
								<header class="major">
									<h1>{{ $post->title }}</h1>
									@if (strlen($post->body) != 0)
										<p>{!! str_limit($post->body, 50) !!}</p>
									@endif
								</header>
								<p style="color: #fff">Posted by {{ $post->user->name }} on {{ $post->created_at }}</p>
								<ul class="actions">
									<li><a style="background-color: #fff; box-shadow: inset 0 0 0 2px #fff; color: #000;" href="/posts/{{$post->id}}" class="button">Learn more</a></li>
								</ul>
							</div>
						</div>
					</section>
				@endforeach
				{{$posts->links()}}	

			@else
				<!-- CTA -->
			    <section id="cta2">
			      <h2 style="padding-left: 20px;">There are no articles at this time.</h2>
			    </section>				
			@endif					
		</section>

</div>


@endsection