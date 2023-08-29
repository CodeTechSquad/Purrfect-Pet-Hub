@extends('main') 

@section('title') Services @endsection 

@section('head')
<link rel="stylesheet" href="{{ asset('css/individualService.css') }}" />
@endsection @section('body')
<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />
@endsection @section('body')
<body>
  <!-- Top banner in home page  -->
  <div class="top-header">
    Call us for Veterinary Support:
    <a href="tel:+977-9810101020">+977-9810101020</a>
  </div>

  @include('components.nav')

  <!-- Main section starts -->
  <main class="gallery-container">
    <div class="gallery-content">
      <h2>Our Gallery</h2>
      <p>
        This is the gallery section of our website. Here you can see the images
        of our clinic, our staffs and our services.
      </p>
    </div>
    <div class="gallery-cards"></div>
  </main>

  <!-- Footer section  -->
  @include('components.footer')
  <script type="module" src="{{ asset('js/gallery.js') }}"></script>
</body>

@endsection
