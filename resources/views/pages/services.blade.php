@extends('main') @section('title') Services @endsection @section('head')
<link rel="stylesheet" href="{{ asset('css/services.css') }}" />
@endsection @section('body')
<body>
  <!-- Top banner in home page  -->
  <div class="top-header">
    Call us for Veterinary Support:
    <a href="tel:+977-9810101020">+977-9810101020</a>
  </div>

  @include('components.nav')

  <!-- Main section starts -->
  <main class="services-container">
    <!-- Services section -->
    <div class="services-content">
      <h2>Our Services</h2>
      <p>
        We provide a wide range of products & services for pets such as food,
        toys, grooming supplies, and veterinary care. We aim to meet the needs
        of pet owners and ensure the health and happiness of their furry
        friends.
      </p>
    </div>
    <div class="services-cards"></div>
  </main>
  <!-- Main section ends -->

  <!-- Footer section  -->
  @include('components.footer')
</body>

<script type="module" src="{{ asset('js/services.js') }}"></script>
@endsection
