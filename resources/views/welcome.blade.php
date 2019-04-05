
@extends('layouts.master')

@section('title')
  Home
@endsection

@section('content')


<!-- Banner -->
<section id="banner" class="major">
  <div class="inner">
    <header class="major">
       <h1><span class="spanIot">PSAC</span> <span class="mainIot">77000 PostDoctoral</span><span class="spanIot"> Union</span></h1>
      <div class="element">
        <div class="sub-element">The website is under-construction.</div>
        {{-- <div class="sub-element">Collective Bargaining Training Event.</div>
        <div class="sub-element">Welcome, Alberto!</div> --}}
      </div>
    </header>
    <div style="position: center;" class="content">
      <ul style="padding-left: 40%;" class="actions">
        <li><a style=" box-shadow: inset 0 0 0 2px #fff; color: #fff;" href="{{ url('/benefits') }}" class="button next scrolly">Apply for Benefits!</a></li>
      </ul>
    </div>
  </div>
</section>

<!-- Main -->
<div id="main">

    <!-- CTA -->
    <section id="cta2">
      <h1>Latest News</h1>
    </section>

  <!-- One -->
    <section id="one" class="tiles">
        @if(count($posts) > 0)
        @foreach($posts as $post)
          <article>
                  <span class="image">
                    <img src="/storage/cover_images/{{$post->cover_image}}" alt="" />
                  </span>
                  <header class="major">
                    <h3 style="color: #fff;"><a href="/posts/{{ $post->id }}" class="link">{{ $post->title }}</a></h3>
                    <p style="color: #fff;">Posted by {{ $post->user->name }} @ {{ $post->created_at }}</p>
                  </header>
                </article>
        @endforeach        
      @endif

      <article>
        <span class="image">
          <img src="images/4.jpeg" alt="" />
        </span>
        <header class="major">
          <h3 style="background-color: #E63946 color: #fff;"><a href="{{ url('/posts') }}" class="link">See more.</a></h3>
          <p></p>
        </header>
      </article>
    </section>

</div>

      <!-- Main -->
<div id="main">

      <!-- CTA -->
    <section id="cta2">
      <h1>Events</h1>
    </section>


    <section id="one" class="tiles"> 
      <!-- One -->
      @if(count($events) > 0)
        @foreach($events as $event)
          <article>
                  <span class="image">
                  </span>
                  <header class="major">
                    <h3 style="color: #fff;"><a href="/events/{{ $event->id }}" class="link">{{ $event->title }}</a></h3>
                    <br>
                    <h4 style="color: #fff">{{ $event->location }} - {{ $event->time }}</h4>
                    </header>
                </article>
        @endforeach        
      @endif 
      <article>
        <span class="image">
          <img src="images/4.jpeg" alt="" />
        </span>
        <header class="major">
          <h3><a href="{{ url('/events') }}" class="link">See More</a></h3>
          <p></p>
        </header>
      </article>
    </section>
</div>

<!-- CTA
<section id="cta">

<h2 style="color: #fff;">Stay in touch</h2>
<p style="color: #fff;">Subscribe to our newsletter so we can spam you with amazing PSAC content.</p>

<form>
  <div class="row uniform 50%">
    <div class="8u 12u(mobilep)">
      <input type="email" name="email" id="email" placeholder="Your e-mail here" />
    </div>
    <div class="4u 12u(mobilep)">
      <input type="submit" value="Sign Up!" class="fit" />
    </div>
  </div>
</form>
-->

</section>

@endsection
