@extends('main')

@section('title')
    Create Blog Post
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
            <h1>Create a New Blog Post</h1>
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                   <strong> {{ $message }}</strong>
                </div>
            @endif    
            <form action="{{route('admin.blog.store') }}" method="post" enctype="multipart/form-data">
                @method("POST")
                @csrf
                <label for="title">Title:</label>
                <input type="text" name="title" required>
                @if($errors->has('title'))
                      <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif      
                <label for="description">Description:</label>
                <textarea name="description" rows="4" required></textarea>
                @if($errors->has('description'))
                      <span class="text-danger">{{ $errors->first('description') }}</span>
                      @endif
                <label for="image">Image:</label>
                <input type="file" name="image" accept="image/*" required>
                @if($errors->has('image'))
                      <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
                <button type="submit">Create Post</button>
            </form>
        </main>

        <!-- Footer section  -->
        @include('components.footer')
    </body>
    <script type="module" src="{{ asset('js/blog.js') }}"></script>
@endsection
