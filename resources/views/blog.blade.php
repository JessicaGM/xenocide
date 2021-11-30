<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../js/script.js" defer></script>
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
        </a>
        <div class="nav-links">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
            </ul>
        </div>
    </nav>
    <!-- End navbar -->
    
    <!-- Start blog article section -->
    @foreach ($blogs as $blog)
    <section class="blog-article container" id="blog-article">
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
                    {{ $blog->description }}
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- End blog article section -->

    <!-- Start footer section -->
    @include('layouts.footer')
    <!-- End footer section -->

</body>

</html>