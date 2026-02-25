@include('front.layout.header')


  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">

      <main>
        @yield('content')

      </main>

      @include('front.layout.footer')

    </div>
  </div>

  <a href="https://wa.me/201555665776"
     class="floating-whatsapp"
     target="_blank"
     rel="noopener"
     aria-label="WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>


<style>
  .floating-whatsapp {
    position: fixed;
    right: 20px;
    bottom: 20px;
    height: 56px;
    width: 56px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    z-index: 100;
    background-color: #25d366;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
  }

  .floating-whatsapp i {
    font-size: 30px;
    color: #fff;
  }

  .floating-whatsapp:hover {
    transform: translateY(-4px) scale(1.03);
    box-shadow: 0 16px 32px rgba(0, 0, 0, 0.25);
  }

  .progress-wrap {
    left: 20px;
    right: auto;
    z-index: 99;
  }

  .progress-wrap::after {
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    content: "\f062";
  }

  @media (max-width: 767px) {
    .floating-whatsapp {
      right: 16px;
      bottom: 20px;
    }

    .progress-wrap {
      left: 16px;
    }
  }
</style>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery-3.7.1.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/gsap.min.js')}}"></script>
  <script src="{{asset('assets/vendor/ScrollTrigger.min.js')}}"></script>
  <script src="{{asset('assets/vendor/ScrollSmoother.min.js')}}"></script>
  <script src="{{asset('assets/vendor/ScrollToPlugin.min.js')}}"></script>
  <script src="{{asset('assets/vendor/SplitText.min.js')}}"></script>
  <script src="{{asset('assets/vendor/TextPlugin.js')}}"></script>
  <script src="{{asset('assets/vendor/customEase.js')}}"></script>
  <script src="{{asset('assets/vendor/Flip.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.meanmenu.min.js')}}"></script>
  <script src="{{asset('assets/vendor/backToTop.js')}}"></script>
  <script src="{{asset('assets/vendor/matter.js')}}"></script>
  <script src="{{asset('assets/vendor/throwable.js')}}"></script>
  <script src="{{asset('assets/js/magiccursor.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>


</html>
