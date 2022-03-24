@extends('layouts.app')

@section('styles')
  <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
@show

@section('content')
    <!-- Start hero section -->
    <section id="hero" class="hero container">
        <div class="hero-content">
            <div class="texture"></div>
            <video src="images/HexBg.mp4" muted loop autoplay>Your browser does not support the
                video</video>
            <h1 class="hero-heading">Xenocide</h1>
            <h2 class="hero-subheading">Now available to play!</h2>
            <a href="https://drive.google.com/file/d/1cdJSFlDtMityytrrCXV_NsdaqtYK1Uiy/view" type="button" class="hero-cta">Download</a>
        </div>
    </section>
    <!-- End hero section -->

    <!-- Start game section -->
    <section class="game container" id="game">
        <div class="game-content">
            <h1 class="game-heading">Game</h1>
            <p class="game-paragraph">Xenocide is a competitive turn-based strategy multiplayer game, where you protect your queen and your kingdom from evil invaders, non-human creatures. It is a perfect game to play with friends as you unlock new characters, rank up and compete against each other. The game is intended for ages between 15 – 35 as it requires tactical skills to plan ahead and anticipate the movement of the opponents. </p>
        </div>
        <div class="game-img">
            <div class="game-img-wrapper">
                <img src="images/game.jpg" alt="preview of the game">
            </div>
        </div>
    </section>
    <!-- End game section -->

    <!-- Start blog section -->
    <section class="blog container" id="blog">
        <div class="blog-content">
            <h1 class="blog-heading">Blog</h1>
            <div class="blog-container">
                {{-- retrive all blog posts from the database --}}
                @if (count($blogs) !== 0)
                @foreach ($blogs as $blog)
                <div class="blog-card">
                    <div class="blog-card-header">
                        <img src=" {{ $blog->image }}" alt="blog image" />
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-info">
                            <span class="blog-card-category">{{ $blog->category }}</span>
                            <span class="blog-card-date">{{ $blog->created_at->ago() }}</span>
                        </div>
                        <h4>{{ $blog->title }}</h4>
                        <p class="blog-card-description">{{ Str::words($blog->paragraph1, 12) }}</p>
                        <p class="blog-card-author"><i>{{ $blog->author }}</i></p>
                        <a href="{{url('/blog',[$blog->title])}}" type="button" class="view-blog">Read more<span>&rarr;</span></a>
                    </div>
                </div>
                @endforeach
                {{-- if no blog posts in the database --}}
                @else
                <div class="no-blogs" style="text-align: center; color: white; font-size: 1.3rem; line-height: 2rem;">
                    Coming soon...
                </div>
                @endif
            </div>
        </div>
    </section>
    <!-- End blog section -->

    <!-- Start about us section -->
    <section class="about container" id="about">
        <div class="about-content">
            <h1 class="about-heading">About us</h1>
            <p class="about-paragraph">We are a team of Aston University students who are currently developing Xenocide. We are passionate about what we do while having fun and trying to create an empowering community. We hope you enjoy playing the game as much as we enjoy creating it!</p>
        </div>
    </section>
    <!-- End about us section -->

    <!-- Start our team section -->
    <section class="team container" id="team">
        <div class="team-content">
            <h1 class="team-heading">Meet our team</h1>
            <div class="card-container">
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/ja-img.jpg" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Junaid A.</h4>
                            <h5>Game Developer</h5>
                        </div>
                        <div class="card-socials">
                            <a href="https://github.com/alienj13"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/gn-img.jpg" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Gia N.</h4>
                            <h5>Game Developer</h5>
                        </div>
                        <div class="card-socials">
                            <a href="https://github.com/IBN5101"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/jg-img.jpg" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Jessica G.</h4>
                            <h5>Full Stack Developer</h5>
                        </div>
                        <div class="card-socials">
                            <a href="https://github.com/JessicaGM"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/default-d5.jpg" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Ahmed A.</h4>
                            <h5>Sound Designer</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/us-img.jpg" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Umayr S.</h4>
                            <h5>Content Creator</h5>
                        </div>
                        <div class="card-socials">
                            <a href="https://github.com/usane001"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/default-d2.jpg" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Andrew B.</h4>
                            <h5>Developer</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/default-d1.jpg" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Rinah N.</h4>
                            <h5>Content Creator</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/default-d4.jpg" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Ramy P.</h4>
                            <h5>Sound Designer</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/default-d3.jpg" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Zain E.</h4>
                            <h5>Documentation Specialist</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End our team section -->

    <!-- Scroll back to top button -->
    <button class="top-btn"><i class="fas fa-angle-up fa-3x"></i></button>
    
    @include('includes.footer')

@endsection