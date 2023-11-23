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
            <table class ="table-hover">
                <thead>
                    <tr>
                        <th> S.No </th>
                        <th> Title  </th>
                        <th>  Description   </th>
                        <th>   Images</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->description }}</td>
                        <td><img src="{{ asset('blog_images/' . $blog->image) }}"></td>
                        <form method="post" action="{{ route('admin.blogs.delete', $blog->id) }}" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <td><button type="submit" class="btn btn-danger">Delete</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- <div class="blog-content-container">
                @foreach ($blogs as $blog)
                    <div class="blog-content"> -->
                        <!-- Adjusted the image path -->
                        <!-- <img src="blogs/{{ $blog->image }}">
                        <h2>{{ $blog->title }}</h2>
                        <p>{{ $blog->description }}</p>
                        <a href="{{ $blog->link }}" target="_blank">View Details</a>
                    </div> -->
                <!-- @endforeach
            </div> -->
        </main>

        <!-- Footer section  -->
        @include('components.footer')
    </body>
    <script type="module" src="{{ asset('js/blog.js') }}"></script>
@endsection
