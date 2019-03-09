
@extends('layouts.master')

@section('title')
  Home
@endsection

@section('content')


        <!-- Banner -->
          <section id="banner" class="major">
            <div class="inner">
              <header class="major">
                 <h1><span class="spanIot">PSAC</span> 77000<br> PostDoctoral<span class="spanIot"> Union</span></h1>
                <div class="element">
                  <div class="sub-element">Welcome to the PSAC 77000 Official Website.</div>
                  <div class="sub-element">Explore the PSAC 77000.</div>
                  <div class="sub-element">Join our negotiations.</div>
                </div>
              </header>
              <div class="content">

                <ul class="actions">
                  <li><a href="#one" class="button next scrolly">More About CUPU</a></li>
                </ul>
              </div>
            </div>
          </section>

        <!-- Main -->
          <div id="main">

            <!-- One -->
              <section id="one" class="tiles">


                <article>
                  <span class="image">
                    <img src="images/4.jpeg" alt="" />
                  </span>
                  <header class="major">
                    <h3><a href="#" class="link">See more.</a></h3>
                    <p></p>
                  </header>
                </article>
              </section>
          </div>


      <!-- CTA -->
        <section id="cta">

          <h2>Sign up for our newsletter</h2>
          <p>We'll be sending you updates and important news rearding the union.</p>

          <form>
            <div class="row uniform 50%">
              <div class="8u 12u(mobilep)">
                <input type="email" name="email" id="email" placeholder="Email Address" />
              </div>
              <div class="4u 12u(mobilep)">
                <input type="submit" value="Sign Up" class="fit" />
              </div>
            </div>
          </form>

        </section>

                <!-- Main -->
          <div id="main">

            <!-- One -->
              <section id="one" class="tiles">
                @foreach($posts as $post)
                  <article>
                      <span class="image">
                          <img src="1.jpg" alt="" />
                      </span>
                      <header class="major">
                        <h3><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                        <p>{!! $post->body !!}</p>
                        <p>Posted by kareem on {{ $post->created_at }}</p>
                      </header>
                  </article>
                @endforeach
                {{$posts->links()}}
                <article>
                  <span class="image">
                    <img src="images/4.jpeg" alt="" />
                  </span>
                  <header class="major">
                    <h3><a href="#" class="link">See more.</a></h3>
                    <p></p>
                  </header>
                </article>
              </section>
          </div>

@endsection
