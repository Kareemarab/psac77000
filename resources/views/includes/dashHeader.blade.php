<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a>
            PSAC77000 Dashborad
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar <a href="/posts/create">Create Post</a> -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    
                @else
                    <a class="nav-item dropdown">
                        <a>{{ Auth::user()->name }} <span class="caret"></span></a>


                    </a>
                    <a class="dropdown-item" target="_blank" href="{{ url('/') }}">Website</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    

                @endguest
            </ul>
        </div>
    </div>
</nav>