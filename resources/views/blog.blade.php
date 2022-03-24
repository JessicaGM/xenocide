@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@show 

@section('content')
    <!-- Start blog article section -->
    {{-- retrive blog post from database based on url viewed --}}
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
                    @if (!empty($blog->paragraph1)) <p> {{ $blog->paragraph1 }} </p> @endif 
                    @if (!empty($blog->paragraph2)) <p> {{ $blog->paragraph2 }} </p> @endif 
                    @if (!empty($blog->paragraph3)) <p> {{ $blog->paragraph3 }} </p> @endif 
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- End blog article section -->

    <!-- Scroll back to top button -->
    <button class="top-btn"><i class="fas fa-angle-up fa-3x"></i></button>
    
    @include('includes.footer')

@endsection