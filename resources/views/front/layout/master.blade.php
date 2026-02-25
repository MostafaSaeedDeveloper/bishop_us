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
    right: 24px;
    bottom: 24px;
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: #25d366;
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    z-index: 9999;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  .floating-whatsapp:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.35);
    color: #fff;
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
