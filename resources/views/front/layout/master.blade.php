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
