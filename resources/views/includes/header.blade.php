<!-- Header -->
<header id="header" class="alt">
<a href="{{ url('/') }}" class="logo"> <img style="max-height: 50px; 
max-width: 100px; 
position: center; 
margin-top: 5px; 
margin-left: 40px;" 
src="../images/CUPU_PSAC77000.png"></span></a>

<nav>
  <a style="color: #fff;" href="{{ url('/about') }}">About Us</a>
  <a style="color: #fff;" href="{{ url('/empissues') }}">Employee Issues</a>
  <a style="color: #fff;" href="{{ url('/unionadv') }}">Union Advantage</a>
  <a style="color: #fff;" href="{{ url('/events') }}">Events</a>
  <a style="color: #fff;" href="{{ url('/posts') }}">News</a>
  <a style="color: #fff;" href="{{ url('/benefits') }}">Benefits</a>
  <div class="dropdown">
    <a class="dropbtn" style="color: #fff;">Resources</a>
    <div class="dropdown-content">
      <a style="font-size: 12px;" href="{{ url('/resources') }}">Useful Links</a>
    <a style="font-size: 12px;" href="{{ url('/docsandforms') }}">Docs & Forms</a>
      <a style="font-size: 12px;" href="#">Health Care</a>
    </div>
  </div>
  <a style="color: #fff;" href="{{ url('/contactus') }}">Contact Us</a>

  {{-- Here we control the login/dash-logout buttons. --}}
  @guest
  <a style="color: #000;" href="{{ route('login') }}">{{ __('Login') }}</a>
  @else
  <a style="color: #000;" href="{{ route('dashboard') }}">Dashboard</a>
  <a style="color: #000;" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
  </a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
  </form>
  @endguest
  
</nav>
</header>
