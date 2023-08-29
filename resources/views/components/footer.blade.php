<footer>
  <div class="footer">
    <!-- Top layer -->
    <div class="top-footer" style="padding-top: 3rem;">
      <!-- Primary div -->
      <div class="primary-div">
        <!-- Logo and text div -->
        <div class="logo-and-text">
          <a href=" {{ url('/') }} " class="footer-logo">
            <img src="images/logo.png" alt="logo" class="logo" />
          </a>
          <p>
            "Purrfect Pet Hub: Quality and affordable animal care
            at your doorstep. Comprehensive, professional, and compassionate
            veterinary services by our dedicated and experienced team."
          </p>
        </div>

        <!-- Contact info div -->
        <div class="contact-info">
          <h3>Phone Number:</h3>
          <p class="font-bold">+977-9810101020</p>
        </div>

        <!-- Location div -->
        <div class="location">
          <h3>Location:</h3>
          <p class="font-bold">Kathmandu, Nepal</p>
        </div>
      </div>

      <!-- Menu div -->
      <div class="menu-div">
        <h3 class="font-bold">Menu</h3>
        <ul>
          <li><a href=" {{ url('/') }} ">Home</a></li>
          <li><a href=" {{ url('/about') }} ">About</a></li>
          <li><a href=" {{ url('/services') }} ">Services</a></li>
          <li><a href=" {{ url('/blog') }} ">Blog</a></li>
          <li><a href=" {{ url('/shop') }} ">Shop</a></li>
          <li><a href=" {{ url('/contact') }} ">Contact</a></li>
        </ul>
      </div>

      <!-- Gallery div -->
      <div class="gallery-div">
        <h3 class="font-bold">Gallery</h3>
        <div class="gallery-grid">
          <div class="image">
            <img src="images/gallery/pic1.png" alt="" />
          </div>
          <div class="image">
            <img src="images/gallery/pic2.png" alt="" />
          </div>
          <div class="image">
            <img src="images/gallery/pic3.png" alt="" />
          </div>
          <div class="image">
            <img src="images/gallery/pic4.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <hr />

    <!-- Bottom layer -->
    <div class="bottom-footer">
      <p class="copyright">
        Copyright © <span id="year"></span> Purrfect Pet Hub | All Rights
        Reserved
      </p>
      <div class="social-icons">
        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/"
          ><i class="fab fa-instagram"></i
        ></a>
        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>
</footer>
<script>
  let year = document.getElementById('year');
  year.innerHTML = new Date().getFullYear();
</script>
