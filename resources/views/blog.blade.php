<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ secure_asset('images/favicon.ico') }}" type="image/x-icon" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <script src="{{ secure_asset('js/script.js') }}" defer></script>

</head>

<body>

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

    <!-- Start blog article section -->
    {{-- retrive blog post from database based on url viewed --}}
    @foreach ($blogs as $blog)
    <main class="blog-article container" id="blog-article">
        <div class="article-container">
            <div class="article-category">
                {{ $blog -> category }}
            </div>
            <div class="article-heading">
                <h1>{{ $blog -> title }}</h1>
            </div>
            <div class="article-info">
                <div class="article-date">
                    <i class="fa-regular fa-calendar"></i>
                    {{ date('jS M Y', strtotime($blog->created_at)) }}
                </div>
                <div class="article-author">
                    <i class="fa-regular fa-user"></i>
                    {{ $blog -> author }}
                </div>
            </div>
            <div class="article-image">
                <!-- insert as url instead of storing the image in database -->
                <img src=" {{ $blog->image }}" alt="blog image" />
            </div>
            <div class="article-description-box">
                <div class="article-description">
                    @if (!empty($blog->paragraph1)) <p> {{ $blog->paragraph1 }} </p> @endif
                    @if (!empty($blog->paragraph2)) <p> {{ $blog->paragraph2 }} </p> @endif
                    @if (!empty($blog->paragraph3)) <p> {{ $blog->paragraph3 }} </p> @endif
                </div>
            </div>
        </div>
    </main>
    @endforeach
    <!-- End blog article section -->

    <!-- Scroll back to top button -->
    <button class="top-btn"><i class="fas fa-angle-up fa-3x"></i></button>

    @include('includes.footer')

</body>
</html>