<!-- Header -->
<header id="header" class="alt">
<a href="{{ url('/') }}" class="logo"> <img style="max-height: 50px; max-width: 100px; position: center; margin-top: 5px; margin-left: 40px;" src="/storage/images/logoo.png"></span></a>
<nav>
  <a href="{{ url('/about') }}">About Us</a>
  <a href="{{ url('/collective') }}">Collective Bargaining</a>
  <a href="{{ url('/unionadv') }}">Union Advantage</a>
  <a href="{{ url('/resources') }}">Resources</a>
  <a href="{{ url('/posts') }}">Articles</a>
  <a href="{{ url('/events') }}">Events</a>
  <a href="{{ url('/contactus') }}">Contact Us</a>
  <!--<a href="#">Contact Us</a>-->
  <a href="#menu"></a>
  
</nav>
</header>

<nav id="menu">
<ul class="">
  @guest
  <a class="button fit" href="{{ route('login') }}">{{ __('Login') }}</a>
  @else

          <div>
            <a class="button fit" href="{{ route('dashboard') }}">Dashboard</a>
              <a class="button fit" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
  @endguest
</ul>
</nav>

