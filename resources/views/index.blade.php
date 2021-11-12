<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/script.js" defer></script>
    <title>Xenocide</title>
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
                <li><a href="#game">Game</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#team">Our team</a></li>
            </ul>
        </div>
    </nav>
    <!-- End navbar -->

    <!-- Start hero section -->
    <section id="hero" class="hero container">
        <div class="hero-content">
            <div class="texture"></div>
            <video src="images/HexBg.mp4" muted loop autoplay>Your browser does not support the
                video</video>
            <h1 class="hero-heading">Xenocide</h1>
            <h2 class="hero-subheading">Coming soon...</h2>
            <a href="#game" type="button" class="hero-cta">&#x2193</a>
        </div>
    </section>
    <!-- End hero section -->

    <!-- Start game section -->
    <section class="game container" id="game">
        <div class="game-content">
            <h1 class="game-heading">Game</h1>
            <p class="game-paragraph">Xenocide is a competitive turn-based strategy multiplayer game, where you protect your queen and your kingdom from evil invaders, non-human creatures. It is a perfect game to play with friends as you unlock new characters, rank up  and compete against each other. The game is intended for ages between 15 – 35 as it requires tactical skills to plan ahead and anticipate the movement of the opponents. </p>
        </div>
        <div class="game-img">
            <div class="game-img-wrapper">
                <img src="images/sampleimage.png" alt="preview of the game">
            </div>
        </div>
    </section>
    <!-- End game section -->

    <!-- Start blog section -->
    <section class="blog container" id="blog">
        <div class="blog-content">
            <h1 class="blog-heading">Blog</h1>
            <div class="blog-container">
                @if (count($blogs) !== 0)
                @foreach ($blogs as $blog)
                <div class="blog-card">
                    <div class="blog-card-header">
                        <img src="data:image/png;base64,{{ chunk_split(base64_encode($blog->image)) }}"
                            alt="blog image" />
                    </div>
                    <div class="blog-card-content">
                        <div class="blog-card-info">
                            <span class="blog-card-category">{{ $blog->category }}</span>
                            <span class="blog-card-date">{{ date('jS M Y', strtotime($blog->created_at)) }}</span>
                        </div>
                        <h4>{{ $blog->title }}</h4>
                        <p class="blog-card-description">{{ Str::words($blog->description, 12) }}</p>
                        <p class="blog-card-author"><i>{{ $blog->author }}</i></p>
                        <a href="{{url('/blog',[$blog->title])}}" type="button" class="view-blog">Read more
                            <span>&rarr;</span></a>
                    </div>
                </div>
                @endforeach
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
                            <img src="images/ja-img.jfif" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Junaid A.</h4>
                            <h5>Programmer</h5>
                        </div>
                        <div class="card-socials">
                            <a href="https://github.com/alienj13"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/gn-img.jfif" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Gia N.</h4>
                            <h5>Programmer</h5>
                        </div>
                        <div class="card-socials">
                            <a href="https://github.com/IBN5101"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/jg-img.jfif" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Jessica G.</h4>
                            <h5>Web Developer</h5>
                        </div>
                        <div class="card-socials">
                            <a href="https://github.com/JessicaGM"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/default-d5.png" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Ahmed A.</h4>
                            <h5>Game UI artist</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/us-img.jfif" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Umayr S.</h4>
                            <h5>Documentation Specialist</h5>
                        </div>
                        <div class="card-socials">
                            <a href="https://github.com/usane001"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/default-d2.png" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Andrew B.</h4>
                            <h5>Documentation Specialist</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/default-d1.png" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Rinah N.</h4>
                            <h5>Documentation Specialist</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/default-d4.png" alt="member icon">
                        </div>
                        <div class="card-info">
                            <h4>Ramy P.</h4>
                            <h5>Documentation Specialist</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="images/default-d3.png" alt="member icon">
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

    <!-- Start footer section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <h4 class="footer-heading">&copy {{ date('Y') }} Team 5 Xenocide</h4>
            </div>
            <div class="footer-right">
                <h4 class="footer-contact">Contact us: team5xenocide@outlook.com</h4>
            </div>
        </div>
    </footer>
    <!-- End footer section -->

</body>

</html>