@extends('main') @section('title') Login @endsection @section('head')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
@endsection @section('body')
<body>
  <nav>
    <a href="{{ url('/') }}">
      <img src="images/logo.png" alt="logo" class="logo" />
    </a>
  </nav>

  <img src="images/login-dog.png" alt="login-bg" class="login-bg" />

  <form id="form" action="/" method="post">
    <div class="social">
      <h1 class="title">Welcome Back User!</h1>
      <p class="title-p">Enter your details to sign in to your account.</p>
    </div>

    <!-- Email input -->
    <div>
      <label for="email">Email address</label>
      <i class="far fa-envelope"></i>

      <input type="email" name="email" id="email" placeholder="abc@gmail.com" />

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

      <i class="fas fa-exclamation-circle failure-icon"></i>
      <i class="far fa-check-circle success-icon"></i>

      <div class="error"></div>
    </div>
    <p class="forgot-password">
      <span
        ><input
          type="checkbox"
          name="remeber"
          id="remember"
          style="margin-right: 5px;"
        />Remember me</span
      >
      <span><a href="{{ url('/forgot-password') }}">Forgot Password?</a></span>
    </p>
    <button type="submit">Sign In</button>

    <div class="separator">
      <hr class="line" />
      <span class="or-text">Or</span>
      <hr class="line" />
    </div>

    <div class="google-btn">
      <img
        src="https://img.icons8.com/color/30/000000/google-logo.png"
        alt="Google Logo"
      />Login with Google
    </div>
    <div class="question">
      Don't have an account?
      <span><a href="{{ url('/register') }} ">Sign Up</a></span>
    </div>
  </form>
</body>
@endsection
