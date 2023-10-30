@extends('main') @section('title') Register @endsection 

@section('head')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
@endsection 

@section('body')
<body>
  <nav>
    <a href="{{ url('/') }}">
      <img src="images/logo.png" alt="logo" class="logo" />
    </a>
  </nav>

  <img src="images/register-bird.png" alt="login-bg" class="login-bg" />

  <!-- <form id="form" action="/" method="post"> -->
  <!-- <form action="{{route('register-user')}}" method="post"> -->
  <form id = "form" action="{{route('register-user')}}" method="post">    
            @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif (Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @csrf
    <div class="social">
      <h1 class="title">Create your account</h1>
      <p class="title-p">Enter your details to create a account.</p>
    </div>

    <!-- First Name and Last Name input -->

    <!-- First name input -->
    <div class="name-div">
      <div>
        <label for="first_name">First Name</label>
        <input
          type="first_name"
          name="first_name"
          id="first_name"
          placeholder="Tanmay"
          value="{{ old('first_name') }}"
        />
        <span class = "text-danger">@error('first_name'){{ $message }} @enderror</span>

        <i class="fas fa-exclamation-circle failure-icon"></i>
        <i class="far fa-check-circle success-icon"></i>

        <div class="error"></div>
      </div>

      <!-- Last name input  -->
      <div>
        <label for="last_name">Last name</label>
        <input
          type="last_name"
          name="last_name"
          id="last_name"
          placeholder="Seimens"
          value="{{ old('last_name') }}"
        />
        <span class = "text-danger">@error('last_name'){{ $message }} @enderror</span>

      </div>
    </div>

    <!-- Email input -->
    <div>
      <label for="email">Email address</label>
      <i class="far fa-envelope"></i>

      <input
        type="email"
        name="email"
        id="email"
        placeholder="tanmay@gmail.com"
        value="{{ old('email') }}"
      />
      <span class = "text-danger">@error('email'){{ $message }} @enderror</span>
   
      <i class="fas fa-exclamation-circle failure-icon"></i>
      <i class="far fa-check-circle success-icon"></i>

      <div class="error"></div>
    </div>

    <!-- Password input -->
    <div>
      <label for="password">Password</label>
      <i class="fas fa-lock"></i>

      <input
        type="password"
        name="password"
        id="password"
        placeholder="Enter your password"
      />
      <span class = "text-danger">@error('password'){{ $message }} @enderror</span>

      <i class="fas fa-exclamation-circle failure-icon"></i>
      <i class="far fa-check-circle success-icon"></i>

      <div class="error"></div>
    </div>
    <p style="text-align: left;">
      <input
        type="checkbox"
        name="terms"
        id="terms"
        style="margin-right: 5px;"
        checked
      />I agree to the
      <span style="text-decoration: underline;">Terms & Privacy.</span>
    </p>
    <button class="btn-block btn-primary" type="submit">Create Account</button>

    <div class="separator">
      <hr class="line" />
      <span class="or-text">Or</span>
      <hr class="line" />
    </div>

    <div class="google-btn">
      <img
        src="https://img.icons8.com/color/30/000000/google-logo.png"
        alt="Google Logo"
      />Sign Up with Google
    </div>
    <div class="question">
      Already have an account?
      <span><a href="login">Log In</a></span>
    </div>
  </form>
</body>
@endsection
