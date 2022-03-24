 <!-- Start navbar -->
 <nav class="navbar">
     <div class="logo">Team 5</div>
     <a href="#" class="toggle-btn">
         <span class="line"></span>
         <span class="line"></span>
         <span class="line"></span>
         <span class="line"></span>
     </a>
     <div class="nav-links">
         <ul>
             @if (Request::path()=='/')
             <li><a href="#game">Game</a></li>
             <li><a href="#blog">Blog</a></li>
             <li><a href="#about">About us</a></li>
             <li><a href="#team">Our team</a></li>
             @else
             <li><a href="{{ url('/') }}">Home</a></li>
             @endif
             <li><a href="{{ url('/leaderboard') }}">Leaderboard</a></li>
             <li><a href="{{ url('/profile') }}">Profile</a></li>
             @guest
             <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
             @if (Route::has('register'))
             <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
             @endif
             @else
             <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                 {{ csrf_field() }}
             </form>
             @endguest
         </ul>
     </div>
 </nav>
 <!-- End navbar -->