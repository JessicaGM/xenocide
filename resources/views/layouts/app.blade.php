<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    <script src="js/app.js" defer></script>
    <script src="js/script.js" defer></script>
    
</head>
<body class="form-pages">
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
                <li><a href="{{ url('/') }}">Home</a></li>
                @guest
                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif
                    @else
                        <li><a href="{{ route('profile') }}">{{ __('Profile') }}</a></li>
                        <li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
            </ul>
        </div>
    </nav>

        @yield('content')
    </div>
</body>
</html>
