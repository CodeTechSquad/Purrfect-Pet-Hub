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

  <form action= "{{ route('admin.login_handler') }}" method="post">
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
      <h1 class="title">Hello Admin!</h1>
      <p class="title-p">Enter your details to sign in to your account.</p>
    </div>

    <!-- Email input -->
    <div>
      <label for="email">Email address</label>
      <i class="far fa-envelope"></i>

      <input type="email" name="email" id="email" placeholder="abc@gmail.com" />
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
    <button class="btn-block btn-primary" type="submit">Sign In</button>

  </form>
</body>
@endsection
