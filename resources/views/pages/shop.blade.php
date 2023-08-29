@extends('main') @section('title') Shop @endsection @section('head')
<link rel="stylesheet" href="{{ asset('css/shop.css') }}" />
@endsection @section('body')
<body>
  <!-- Top banner in home page  -->
  <div class="top-header">
    Call us for Veterinary Support:
    <a href="tel:+977-9810101020">+977-9810101020</a>
  </div>

  @include('components.nav')

  <!-- Main section starts -->
  <main class="shop-container">
    <div class="shop-content">
      <h2>Our Pet shop</h2>
      <p>
        "Bring joy to your home with a furry companion from our pet selection."
      </p>
      <p style="text-align: justify;">
        Please note that we do not sell pets online. You can visit our shop to
        see the pets and buy or adopt them. You can also call us at
        <a href="tel:+977-9810101020">+977-9810101020</a> to book an appointment
        to visit our shop.
      </p>
    </div>
    <div class="shop-cards"></div>
  </main>

  <!-- Footer section  -->
  @include('components.footer')

  <script type="module" src="{{ asset('js/shop.js') }}"></script>
</body>

@endsection
