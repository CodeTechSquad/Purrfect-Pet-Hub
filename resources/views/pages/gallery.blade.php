@extends('main') @section('title') Gallery @endsection @section('head')
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
@endsection @section('body')
<body>
  <!-- Top banner in home page  -->
  <div class="top-header">
    Call us for Veterinary Support:
    <a href="tel:+977-9810101020">+977-9810101020</a>
  </div>

  @include('components.nav')

  <!-- Main section starts -->
  <main></main>

  <!-- Footer section  -->
  @include('components.footer')
</body>

@endsection
