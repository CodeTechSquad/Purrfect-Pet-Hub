<header class="nav-header">
  <div class="logo">
    <a href="{{ url('/') }}">
      <img src="images/logo.png" alt="logo" class="logo" />
    </a>
  </div>
  <nav class="navbar">
    <ul class="navbar-list">
      <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
      <li><a href="{{ url('/about') }}" class="nav-link">About</a></li>
      <li><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
      <li><a href="{{ url('/shop') }}" class="nav-link">Shop</a></li>
      <li><a href="{{ url('/gallery') }}" class="nav-link">Gallery</a></li>
      <li><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
      <li><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
      <div class="login-box">
        <a href="{{ url('/login') }}" class="login-link">Log In</a>
      </div>
    </ul>
  </nav>

  <!-- Mobile hamburger menu -->
  <div class="mobile-navbar-btn">
    <i class="fa fa-bars mobile-nav-icon" id="bars"></i>
    <i class="fa fa-close mobile-nav-icon" id="close"></i>
  </div>
</header>

<script>
  const mobile_nav = document.querySelector('.mobile-navbar-btn');
  const nav_header = document.querySelector('.nav-header');
  const body = document.getElementsByTagName('body');

  const toogleNavbar = () => {
    nav_header.classList.contains('active')
      ? nav_header.classList.remove('active')
      : nav_header.classList.add('active');
  };

  mobile_nav.addEventListener('click', () => toogleNavbar());
</script>
