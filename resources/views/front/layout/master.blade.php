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
    bottom: 86px;
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: #25d366;
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    z-index: 100;
    opacity: 0;
    visibility: hidden;
    transform: translateY(18px) scale(0.95);
    transition: opacity 0.25s ease, visibility 0.25s ease, transform 0.25s ease, box-shadow 0.2s ease;
  }

  .floating-whatsapp.active-whatsapp {
    opacity: 1;
    visibility: visible;
    transform: translateY(0) scale(1);
    animation: whatsapp-float 1.8s ease-in-out infinite;
  }

  .floating-whatsapp:hover {
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.35);
    color: #fff;
  }

  .progress-wrap {
    left: 20px;
    right: auto;
    z-index: 100;
  }

  .progress-wrap::after {
    font-family: "Font Awesome 6 Free";
    font-weight: 900;
    content: "\f062";
  }

  @media (max-width: 767px) {
    .floating-whatsapp {
      right: 16px;
      bottom: 82px;
      width: 48px;
      height: 48px;
      font-size: 24px;
    }

    .progress-wrap {
      left: 16px;
    }
  }

  @keyframes whatsapp-float {
    0%,
    100% {
      transform: translateY(0) scale(1);
    }

    50% {
      transform: translateY(-8px) scale(1.02);
    }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var whatsappButton = document.querySelector('.floating-whatsapp');

    if (!whatsappButton) {
      return;
    }

    var toggleWhatsapp = function () {
      if (window.scrollY > 50) {
        whatsappButton.classList.add('active-whatsapp');
      } else {
        whatsappButton.classList.remove('active-whatsapp');
      }
    };

    toggleWhatsapp();
    window.addEventListener('scroll', toggleWhatsapp, { passive: true });
  });
</script>

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
