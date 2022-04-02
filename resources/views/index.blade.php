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
            <a href="https://drive.google.com/file/d/1IOMfyJm4r23Y1zk_tEIV9GdJRsUsumEh/view" type="button" class="hero-cta">Download</a>
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

    <!-- Start game section -->
    <section class="characters container" id="characters">
        <h1 class="characters-heading">Characters</h1>
    <div class="characters-accordion">
        <div class="character character-1" id="character">
            <h3>Queen<h3>
            <div class="hide">
                <div class="character-description">
                    <p>HP: 50</p>
                    <p>ATK: 0</p>
                    <p>DEF: 0</p>
                    <br>
                    <p>Immobile and cannot attack, protect the Queen at all cost</p>
                </div>
            </div>
        </div>
        <div class="character character-2" id="character">
            <h3>Drone<h3>
            <div class="hide">
                <div class="character-description">
                    <p>HP: 15</p>
                    <p>ATK: 8</p>
                    <p>DEF: 2</p>
                    <br>
                    <p>Movement range: 5 (square)</p>
                    <br>
                    <p>Attack range: 1 (square)</p>
                </div>
            </div>
        </div>
        <div class="character character-3" id="character">
            <h3>Destroyer<h3>
            <div class="hide">
                <div class="character-description">
                    <p>Rank required to obtain the character: 5</p>
                    <br>
                    <p>HP: 15</p>
                    <p>ATK: 20</p>
                    <p>DEF: 1</p>
                    <br>
                    <p>Movement range: 5 (cross)</p>
                    <br>
                    <p>Attack range: 1 (square)</p>
                </div>
            </div>
        </div>
        <div class="character character-4" id="character">
            <h3>Curer<h3>
            <div class="hide">
                <div class="character-description">
                    <p>Rank required to obtain the character: 3</p>
                    <br>
                    <p>HP: 20</p>
                    <p>ATK: 12</p>
                    <p>DEF: 5</p>
                    <br>
                    <p>Movement range: 5 (diamond)</p>
                    <br>
                    <p>Attack range: 2 (diamond)</p>
                    <br>
                    <p>When killing an enemy, you recover 5 HP</p>
                </div>
            </div>
        </div>
        <div class="character character-5" id="character">
            <h3>Warrior<h3>
            <div class="hide">
                <div class="character-description">
                    <p>HP: 20</p>
                    <p>ATK: 8</p>
                    <p>DEF: 4</p>
                    <br>
                    <p>Movement range: 8 (cross)</p>
                    <br>
                    <p>Attack range: 3 (cross)</p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- End game section -->

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
                            <h5>Game Developer & Animations</h5>
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
                            <h5>UI Designer</h5>
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
                            <h5>Developer</h5>
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
                            <h5>UI Designer</h5>
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