@extends('layouts.app')

@section('styles')
  <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
@show

@section('content')

    <!-- Start blog section -->
    <section class="blog container" id="blog">
        <div class="blog-content">
            <h1 class="blog-heading">Blogs</h1>
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

    <!-- Scroll back to top button -->
    <button class="top-btn"><i class="fas fa-angle-up fa-3x"></i></button>
    
    @include('includes.footer')

@endsection