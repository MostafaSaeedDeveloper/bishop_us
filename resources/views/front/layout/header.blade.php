<!DOCTYPE html>
<html lang="en" data-cursor="c1">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Redox HTML Template">

  <title>Bishop Integrated Solutions</title>

  <!-- Fav Icon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/imgs/logo/favicon.png') }}">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/meanmenu.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/animate.min.css')}}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>


<body class="body-wrapper dark body-digital-agency font-heading-instrumentsans-medium">

  <!-- custom-cursor -->
  <div class="custom-cursor">
    <img src="{{ asset('assets/imgs/cursor/cursor-2-xs.svg') }}" alt="cursor" id="cursorImg">
  </div>

  <!-- Preloader -->
  <div id="preloader">
    <div id="container" class="container-preloader">
      <div class="animation-preloader">
        <div class="spinner"></div>

      </div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
  </div>

  <!-- Sroll to top -->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
  </div>

  <!-- cursorAnimation start -->
  <div class="cursor-wrapper relative">
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
  </div>
  <!-- cursorAnimation end -->

  <!-- side toggle start -->
  <aside class="fix">
    <div class="side-info">
      <div class="side-info-content">
        <div class="offset-widget offset-header">
          <div class="offset-logo">
            <a href="{{ route('front.home') }}">
              <img src="{{ asset('assets/imgs/logo/logo-light.png') }}" alt="site logo">
            </a>
          </div>
          <button id="side-info-close" class="side-info-close">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="mobile-menu d-xl-none fix"></div>
        <div class="offset-button">
          <a href="{{ route('front.contact') }}" class="rr-btn hover-bg-theme">
            <span class="btn-wrap">
              <span class="text-one">Let's Talk</span>
              <span class="text-two">Let's Talk</span>
            </span>
          </a>
        </div>
        <div class="offset-widget-box">
          <h2 class="title">Contact US</h2>
          <div class="contact-meta">
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-location-dot"></i></span>
              <span class="text">3891 Ranchview Dr. Richardson</span>
            </div>
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-envelope"></i></span>
              <span class="text"><a href="mailto:hello@redoxagency.com">hello@redoxagency.com</a></span>
            </div>
            <div class="contact-item">
              <span class="icon"><i class="fa-solid fa-phone"></i></span>
              <span class="text"><a href="tel:(505)555-0125">(505) 555-0125</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </aside>
  <div class="offcanvas-overlay"></div>
  <!-- side toggle end -->

  <!-- Header area start -->
  <header class="header-area">
    <div class="header-main">
      <div class="container large">
        <div class="header-area__inner">
          <div class="header__logo">
            <a href="{{ route('front.home') }}">
              <img src="{{ asset('assets/imgs/logo/logo-light.png') }}" class="normal-logo" alt="Site Logo">
            </a>
          </div>
          <div class="header__nav">
            <nav class="main-menu">
              <ul>
                <li><a href="{{ route('front.home') }}">Home</a></li>
                <li><a href="{{ route('front.about') }}">About Us</a></li>
                <li><a href="{{ route('front.services.index') }}">Services</a></li>
                <li><a href="{{ route('front.projects.index') }}">Projects</a></li>
                <li><a href="{{ route('front.blog.index') }}">Blog</a></li>
                <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
              </ul>
            </nav>
          </div>
          <div class="header__button">
            <a href="{{ route('front.contact') }}" class="rr-btn hover-bg-theme">
              <span class="btn-wrap">
                <span class="text-one">Let’s Talk</span>
                <span class="text-two">Let’s Talk</span>
              </span>
            </a>
          </div>
          <div class="header__navicon d-xl-none">
            <button class="side-toggle">
              <i class="fa-solid fa-bars"></i></button>
          </div>
        </div>
      </div>
    </div>
  </header>
    <!-- Header area end -->
