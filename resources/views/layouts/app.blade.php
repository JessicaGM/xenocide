<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ secure_asset('images/favicon.ico') }}" type="image/x-icon" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    @section('styles')
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    @show 

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @section('scripts')
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <script src="{{ secure_asset('js/script.js') }}" defer></script>
    @show
</head>

<body>

    <!-- Start navbar -->
    @section('navbar')
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
                <li><a href="#characters">Characters</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#team">Our team</a></li>
                @else
                <li><a href="{{ url('/') }}">Home</a></li>
                @endif
                <li><a href="{{ url('/blogs') }}">Blogs</a></li>
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
    @show
    <!-- End navbar -->
    
    @yield('content')
    

</body>

</html>