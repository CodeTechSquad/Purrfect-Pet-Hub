@extends('main')

@section('title')
    Blog
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}" />
@endsection

@section('body')
    <body>
        <!-- Top banner in home page  -->
        <div class="top-header">
            Call us for Veterinary Support:
            <a href="tel:+977-9810101020">+977-9810101020</a>
        </div>

        @include('components.nav')

        <!-- Main section starts -->
        <main class="blog-container">
            <h1>Our Blogs</h1>
            <div class="blog-content-container">
                @foreach ($blogs as $blog)
                    <div class="blog-content">
                        <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}">
                        <h2>{{ $blog->title }}</h2>
                        <p>{{ $blog->description }}</p>
                        <a href="{{ $blog->link }}" target="_blank">View Details</a>
                    </div>
                @endforeach
            </div>
        </main>

        <!-- Footer section  -->
        @include('components.footer')
    </body>
    <script type="module" src="{{ asset('js/blog.js') }}"></script>
@endsection
