@include('front.layout.header')


  <div class="has-smooth" id="has_smooth"></div>
  <div id="smooth-wrapper">
    <div id="smooth-content">

      <main>
        @yield('content')

      </main>

      @include('front.layout.footer')

      <a href="https://wa.me/201555665776"
         class="floating-whatsapp"
         target="_blank"
         rel="noopener"
         aria-label="WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
      </a>

    </div>
  </div>



<style>
  .floating-whatsapp {
    position: fixed;
    right: 20px;
    bottom: 20px;
    height: 46px;
    width: 46px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50px;
    z-index: 999;
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
    transition: all 300ms linear;
    mix-blend-mode: exclusion;
    background-color: var(--black);
  }

  .floating-whatsapp i {
    font-size: 20px;
    color: var(--primary);
    transition: all 200ms linear;
  }

  .dark .floating-whatsapp i {
    color: var(--black);
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
