@extends('main') @section('title') Home @endsection @section('head')
<link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection @section('body')
<body>
  <!-- Top banner in home page  -->
  <div class="top-header">
    Call us for Veterinary Support:
    <a href="tel:+977-9810101020">+977-9810101020</a>
  </div>
  @include('components.nav')

  <!-- Main section starts -->
  <main>
  <a href="{{ route('admin.login') }}">Admin Login</a>
    <!-- Hero Section -->
    <section class="hero">
      <p class="image-text">
        We provide the best care to our furry friends!
      </p>
      <p class="image-text-2">Top Quality of Pet Product Store.</p>
    </section>

    <!-- About section -->
    <section class="about">
      <div class="about-container">
        <div class="about-left"></div>
        <div class="about-right">
          <h1>About Us</h1>
          <p>
            Purrfect Pet Hub was established with moto to provide qualitative
            and affordable animal healthcare service to your doorstep.
          </p>
          <ul class="listIcon">
            <li>Comprehensive</li>
            <li>Professional</li>
            <li>Compassionate veterinary service</li>
          </ul>
          <a href="{{ url('/about') }}" class="about-contact-button"
            >Read More<span
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="7"
                height="10"
                viewBox="0 0 7 10"
                fill="none"
              >
                <path
                  d="M6.22579 4.61366L1.79129 9.22754L0.313476 7.68885L3.27016 4.61366L0.313476 1.53846L1.79129 -0.000223227L6.22579 4.61366Z"
                  fill="#007FFF"
                /></svg></span
          ></a>
        </div>
      </div>
    </section>

    <!-- Services section -->
    <section class="services">
      <div class="services-container">
        <div class="services-content">
          <h2>Our Services</h2>
          <p>
            We provide a wide range of products & services for pets such as
            food, toys, grooming supplies, and veterinary care. We aim to meet
            the needs of pet owners and ensure the health and happiness of their
            furry friends.
          </p>
        </div>
        <div class="services-cards"></div>
      </div>
    </section>

    <!-- Collections section -->
    <section class="collections">
      <div class="collections-container">
        <div class="collections-content">
          <h2>Our Pet collections</h2>
          <p>
            "Bring joy to your home with a furry companion from our pet
            selection."
          </p>
        </div>
        <div class="collections-cards"></div>
      </div>
    </section>

    <!-- Shop section -->
    <section class="shop">
      <div class="shop-container">
        <div class="shop-content">
          <p class="shop-text">One More Friend Thousands More Fun!</p>
          <p class="shop-text-2">"Find your furry soulmate at Our Pet Shop."</p>
          <a href="{{ url('/about') }}" class="shop-contact-button"
            >Get Now<span class="shop-contact-button-span"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="7"
                height="10"
                viewBox="0 0 7 10"
                fill="none"
                class="shop-contact-button-svg"
              >
                <path
                  d="M6.22579 4.61366L1.79129 9.22754L0.313476 7.68885L3.27016 4.61366L0.313476 1.53846L1.79129 -0.000223227L6.22579 4.61366Z"
                  fill="#fff"
                /></svg></span
          ></a>
        </div>
      </div>
    </section>

    <!-- Blog section -->
    <section class="blog">
      <div class="blog-container">
        <h1>Our Blogs</h1>
        <div class="blog-content-container"></div>
      </div>
    </section>
  </main>
  <!-- Main section ends -->

  <!-- Footer section  -->
  @include('components.footer')
</body>

<script type="module" src="{{ asset('js/home.js') }}"></script>
@endsection
