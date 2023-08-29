@extends('main') @section('title') Contact @endsection @section('head')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
@endsection @section('body')
<body>
  <!-- Top banner in home page  -->
  <div class="top-header">
    Call us for Veterinary Support:
    <a href="tel:+977-9810101020">+977-9810101020</a>
  </div>

  @include('components.nav')

  <!-- Main section starts -->
  <main class="contact">
    <div class="contact-container">
      <!-- left container with location and stuff -->
      <div class="contact-left-container">
        <div class="contact-left-container-top">
          <h2>
            GET IN TOUCH WITH US
          </h2>
          <p>
            We're here to help and answer any question you might have, We look
            forward to hearing from you! Please fill out the form, or us the
            contact information bellow .
          </p>
        </div>
        <div class="contact-left-container-bottom">
          <div class="contact-left-container-bottom-inner">
            <i class="fa fa-home" aria-hidden="true"></i>
            <div class="contact-left-container-bottom-inner-content">
              <h4>Our Location</h4>
              <p>Kathmandu, Nepal</p>
            </div>
          </div>
          <div class="contact-left-container-bottom-inner">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <div class="contact-left-container-bottom-inner-content">
              <h4>Phone Number</h4>
              <p>+977-9810101020</p>
            </div>
          </div>
          <div class="contact-left-container-bottom-inner">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <div class="contact-left-container-bottom-inner-content">
              <h4>Email Address</h4>
              <p>test@purrfect.com</p>
            </div>
          </div>
        </div>
      </div>

      <!-- right container with forms -->
      <div class="contact-right-container">
        <form class="form-container">
          <div>
            <input type="text" placeholder="Your Name" />
          </div>
          <div>
            <input type="email" placeholder="Your Email" />
          </div>
          <div>
            <input type="text" placeholder="Your Phone" />
          </div>
          <div>
            <textarea rows="6" placeholder="Your Message"></textarea>
          </div>
          <button type="submit">
            Send Message
          </button>
        </form>

        <span class="circle">
            <svg
              width="100"
              height="100"
              viewBox="0 0 100 100"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z"
                fill="#3056D3"
              ></path></svg
          ></span>

          <span class="dots-1"
            ><svg
              width="34"
              height="134"
              viewBox="0 0 34 134"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <circle
                cx="31.9993"
                cy="132"
                r="1.66667"
                transform="rotate(180 31.9993 132)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 31.9993 117.333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 31.9993 102.667)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="88"
                r="1.66667"
                transform="rotate(180 31.9993 88)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 31.9993 73.3333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="45"
                r="1.66667"
                transform="rotate(180 31.9993 45)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="16"
                r="1.66667"
                transform="rotate(180 31.9993 16)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="59"
                r="1.66667"
                transform="rotate(180 31.9993 59)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="30.6666"
                r="1.66667"
                transform="rotate(180 31.9993 30.6666)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="1.66665"
                r="1.66667"
                transform="rotate(180 31.9993 1.66665)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="132"
                r="1.66667"
                transform="rotate(180 17.3333 132)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 17.3333 117.333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 17.3333 102.667)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="88"
                r="1.66667"
                transform="rotate(180 17.3333 88)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 17.3333 73.3333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="45"
                r="1.66667"
                transform="rotate(180 17.3333 45)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="16"
                r="1.66667"
                transform="rotate(180 17.3333 16)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="59"
                r="1.66667"
                transform="rotate(180 17.3333 59)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="30.6666"
                r="1.66667"
                transform="rotate(180 17.3333 30.6666)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="1.66665"
                r="1.66667"
                transform="rotate(180 17.3333 1.66665)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="132"
                r="1.66667"
                transform="rotate(180 2.66536 132)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 2.66536 117.333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 2.66536 102.667)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="88"
                r="1.66667"
                transform="rotate(180 2.66536 88)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 2.66536 73.3333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="45"
                r="1.66667"
                transform="rotate(180 2.66536 45)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="16"
                r="1.66667"
                transform="rotate(180 2.66536 16)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="59"
                r="1.66667"
                transform="rotate(180 2.66536 59)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="30.6666"
                r="1.66667"
                transform="rotate(180 2.66536 30.6666)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="1.66665"
                r="1.66667"
                transform="rotate(180 2.66536 1.66665)"
                fill="#13C296"
              ></circle>
            </svg>
          </span>

          <span class="dots-2">
            <svg
              width="107"
              height="134"
              viewBox="0 0 107 134"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <circle
                cx="104.999"
                cy="132"
                r="1.66667"
                transform="rotate(180 104.999 132)"
                fill="#13C296"
              ></circle>
              <circle
                cx="104.999"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 104.999 117.333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="104.999"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 104.999 102.667)"
                fill="#13C296"
              ></circle>
              <circle
                cx="104.999"
                cy="88"
                r="1.66667"
                transform="rotate(180 104.999 88)"
                fill="#13C296"
              ></circle>
              <circle
                cx="104.999"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 104.999 73.3333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="104.999"
                cy="45"
                r="1.66667"
                transform="rotate(180 104.999 45)"
                fill="#13C296"
              ></circle>
              <circle
                cx="104.999"
                cy="16"
                r="1.66667"
                transform="rotate(180 104.999 16)"
                fill="#13C296"
              ></circle>
              <circle
                cx="104.999"
                cy="59"
                r="1.66667"
                transform="rotate(180 104.999 59)"
                fill="#13C296"
              ></circle>
              <circle
                cx="104.999"
                cy="30.6666"
                r="1.66667"
                transform="rotate(180 104.999 30.6666)"
                fill="#13C296"
              ></circle>
              <circle
                cx="104.999"
                cy="1.66665"
                r="1.66667"
                transform="rotate(180 104.999 1.66665)"
                fill="#13C296"
              ></circle>
              <circle
                cx="90.3333"
                cy="132"
                r="1.66667"
                transform="rotate(180 90.3333 132)"
                fill="#13C296"
              ></circle>
              <circle
                cx="90.3333"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 90.3333 117.333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="90.3333"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 90.3333 102.667)"
                fill="#13C296"
              ></circle>
              <circle
                cx="90.3333"
                cy="88"
                r="1.66667"
                transform="rotate(180 90.3333 88)"
                fill="#13C296"
              ></circle>
              <circle
                cx="90.3333"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 90.3333 73.3333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="90.3333"
                cy="45"
                r="1.66667"
                transform="rotate(180 90.3333 45)"
                fill="#13C296"
              ></circle>
              <circle
                cx="90.3333"
                cy="16"
                r="1.66667"
                transform="rotate(180 90.3333 16)"
                fill="#13C296"
              ></circle>
              <circle
                cx="90.3333"
                cy="59"
                r="1.66667"
                transform="rotate(180 90.3333 59)"
                fill="#13C296"
              ></circle>
              <circle
                cx="90.3333"
                cy="30.6666"
                r="1.66667"
                transform="rotate(180 90.3333 30.6666)"
                fill="#13C296"
              ></circle>
              <circle
                cx="90.3333"
                cy="1.66665"
                r="1.66667"
                transform="rotate(180 90.3333 1.66665)"
                fill="#13C296"
              ></circle>
              <circle
                cx="75.6654"
                cy="132"
                r="1.66667"
                transform="rotate(180 75.6654 132)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="132"
                r="1.66667"
                transform="rotate(180 31.9993 132)"
                fill="#13C296"
              ></circle>
              <circle
                cx="75.6654"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 75.6654 117.333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 31.9993 117.333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="75.6654"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 75.6654 102.667)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 31.9993 102.667)"
                fill="#13C296"
              ></circle>
              <circle
                cx="75.6654"
                cy="88"
                r="1.66667"
                transform="rotate(180 75.6654 88)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="88"
                r="1.66667"
                transform="rotate(180 31.9993 88)"
                fill="#13C296"
              ></circle>
              <circle
                cx="75.6654"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 75.6654 73.3333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 31.9993 73.3333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="75.6654"
                cy="45"
                r="1.66667"
                transform="rotate(180 75.6654 45)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="45"
                r="1.66667"
                transform="rotate(180 31.9993 45)"
                fill="#13C296"
              ></circle>
              <circle
                cx="75.6654"
                cy="16"
                r="1.66667"
                transform="rotate(180 75.6654 16)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="16"
                r="1.66667"
                transform="rotate(180 31.9993 16)"
                fill="#13C296"
              ></circle>
              <circle
                cx="75.6654"
                cy="59"
                r="1.66667"
                transform="rotate(180 75.6654 59)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="59"
                r="1.66667"
                transform="rotate(180 31.9993 59)"
                fill="#13C296"
              ></circle>
              <circle
                cx="75.6654"
                cy="30.6666"
                r="1.66667"
                transform="rotate(180 75.6654 30.6666)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="30.6666"
                r="1.66667"
                transform="rotate(180 31.9993 30.6666)"
                fill="#13C296"
              ></circle>
              <circle
                cx="75.6654"
                cy="1.66665"
                r="1.66667"
                transform="rotate(180 75.6654 1.66665)"
                fill="#13C296"
              ></circle>
              <circle
                cx="31.9993"
                cy="1.66665"
                r="1.66667"
                transform="rotate(180 31.9993 1.66665)"
                fill="#13C296"
              ></circle>
              <circle
                cx="60.9993"
                cy="132"
                r="1.66667"
                transform="rotate(180 60.9993 132)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="132"
                r="1.66667"
                transform="rotate(180 17.3333 132)"
                fill="#13C296"
              ></circle>
              <circle
                cx="60.9993"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 60.9993 117.333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 17.3333 117.333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="60.9993"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 60.9993 102.667)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 17.3333 102.667)"
                fill="#13C296"
              ></circle>
              <circle
                cx="60.9993"
                cy="88"
                r="1.66667"
                transform="rotate(180 60.9993 88)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="88"
                r="1.66667"
                transform="rotate(180 17.3333 88)"
                fill="#13C296"
              ></circle>
              <circle
                cx="60.9993"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 60.9993 73.3333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 17.3333 73.3333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="60.9993"
                cy="45"
                r="1.66667"
                transform="rotate(180 60.9993 45)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="45"
                r="1.66667"
                transform="rotate(180 17.3333 45)"
                fill="#13C296"
              ></circle>
              <circle
                cx="60.9993"
                cy="16"
                r="1.66667"
                transform="rotate(180 60.9993 16)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="16"
                r="1.66667"
                transform="rotate(180 17.3333 16)"
                fill="#13C296"
              ></circle>
              <circle
                cx="60.9993"
                cy="59"
                r="1.66667"
                transform="rotate(180 60.9993 59)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="59"
                r="1.66667"
                transform="rotate(180 17.3333 59)"
                fill="#13C296"
              ></circle>
              <circle
                cx="60.9993"
                cy="30.6666"
                r="1.66667"
                transform="rotate(180 60.9993 30.6666)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="30.6666"
                r="1.66667"
                transform="rotate(180 17.3333 30.6666)"
                fill="#13C296"
              ></circle>
              <circle
                cx="60.9993"
                cy="1.66665"
                r="1.66667"
                transform="rotate(180 60.9993 1.66665)"
                fill="#13C296"
              ></circle>
              <circle
                cx="17.3333"
                cy="1.66665"
                r="1.66667"
                transform="rotate(180 17.3333 1.66665)"
                fill="#13C296"
              ></circle>
              <circle
                cx="46.3333"
                cy="132"
                r="1.66667"
                transform="rotate(180 46.3333 132)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="132"
                r="1.66667"
                transform="rotate(180 2.66536 132)"
                fill="#13C296"
              ></circle>
              <circle
                cx="46.3333"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 46.3333 117.333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="117.333"
                r="1.66667"
                transform="rotate(180 2.66536 117.333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="46.3333"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 46.3333 102.667)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="102.667"
                r="1.66667"
                transform="rotate(180 2.66536 102.667)"
                fill="#13C296"
              ></circle>
              <circle
                cx="46.3333"
                cy="88"
                r="1.66667"
                transform="rotate(180 46.3333 88)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="88"
                r="1.66667"
                transform="rotate(180 2.66536 88)"
                fill="#13C296"
              ></circle>
              <circle
                cx="46.3333"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 46.3333 73.3333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="73.3333"
                r="1.66667"
                transform="rotate(180 2.66536 73.3333)"
                fill="#13C296"
              ></circle>
              <circle
                cx="46.3333"
                cy="45"
                r="1.66667"
                transform="rotate(180 46.3333 45)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="45"
                r="1.66667"
                transform="rotate(180 2.66536 45)"
                fill="#13C296"
              ></circle>
              <circle
                cx="46.3333"
                cy="16"
                r="1.66667"
                transform="rotate(180 46.3333 16)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="16"
                r="1.66667"
                transform="rotate(180 2.66536 16)"
                fill="#13C296"
              ></circle>
              <circle
                cx="46.3333"
                cy="59"
                r="1.66667"
                transform="rotate(180 46.3333 59)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="59"
                r="1.66667"
                transform="rotate(180 2.66536 59)"
                fill="#13C296"
              ></circle>
              <circle
                cx="46.3333"
                cy="30.6666"
                r="1.66667"
                transform="rotate(180 46.3333 30.6666)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="30.6666"
                r="1.66667"
                transform="rotate(180 2.66536 30.6666)"
                fill="#13C296"
              ></circle>
              <circle
                cx="46.3333"
                cy="1.66665"
                r="1.66667"
                transform="rotate(180 46.3333 1.66665)"
                fill="#13C296"
              ></circle>
              <circle
                cx="2.66536"
                cy="1.66665"
                r="1.66667"
                transform="rotate(180 2.66536 1.66665)"
                fill="#13C296"
              ></circle>
            </svg>
          </span>
      </div>
    </div>
  </main>

  <!-- Footer section  -->
  @include('components.footer')
</body>

@endsection
