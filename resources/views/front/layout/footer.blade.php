      <!-- footer area start  -->
      <footer class="footer-area">
        <div class="container large">
          <div class="footer-top-inner">
            <div class="footer-logo">
              <a href="{{ route('front.home') }}"><img src="{{ asset('assets/imgs/logo/logo-2-light.png') }}" alt="site-logo"></a>
            </div>
            <div class="info-text">
              <div class="text-wrapper">
                <p class="text">Specializing in integrated digital marketing, branding, web development, mobile applications, and ERP systems.</p>
              </div>
              <div class="info-link">
                <a href="mailto:info@bishop-solutions.com">info@bishop-solutions.com</a>
              </div>
              <ul class="footer-social-icons" aria-label="Social links">
                <li><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#" aria-label="X"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#" aria-label="Behance"><i class="fa-brands fa-behance"></i></a></li>
                <li><a href="#" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="footer-widget-wrapper-box">
            <div class="footer-widget-wrapper footer-widget-wrapper-custom">
              <div class="footer-widget-box footer-widget-contact">
                <h2 class="title">Contact Information</h2>
                <ul class="footer-nav-list footer-contact-list">
                  <li><span class="icon"><i class="fa-solid fa-phone"></i></span><a href="tel:+2035864443">035864443 (2+)</a></li>
                  <li><span class="icon"><i class="fa-solid fa-mobile-screen-button"></i></span><a href="tel:+201555665776">01555665776</a></li>
                  <li><span class="icon"><i class="fa-solid fa-location-dot"></i></span><a href="https://maps.google.com/?q=Ahmed+Bin+Hanbal+Street+Al+Naseem+Al+Gharbi+Riyadh" target="_blank" rel="noopener">Ahmed Bin Hanbal Street - Al Naseem Al Gharbi - Riyadh - Saudi Arabia</a></li>
                  <li><span class="icon"><i class="fa-solid fa-location-dot"></i></span><a href="https://maps.google.com/?q=78+Abdel+Salam+Aref+Street+Glim+Alexandria" target="_blank" rel="noopener">78 Abdel Salam Aref Street - Glim - Alexandria - Egypt</a></li>
                  <li><span class="icon"><i class="fa-solid fa-envelope-open-text"></i></span><a href="mailto:info@bishop-solutions.com">info@bishop-solutions.com</a></li>
                </ul>
              </div>
              <div class="footer-widget-box">
                <h2 class="title">Our Services</h2>
                <ul class="footer-nav-list">
                  <li><a href="{{ route('front.services.index') }}">Web Design &amp; Development</a></li>
                  <li><a href="{{ route('front.services.index') }}">Ecommerce Web Development</a></li>
                  <li><a href="{{ route('front.services.index') }}">Digital Marketing</a></li>
                  <li><a href="{{ route('front.services.index') }}">Search Engine Optimization (SEO)</a></li>
                </ul>
              </div>
              <div class="footer-widget-box">
                <h2 class="title">Latest Articles</h2>
                <ul class="footer-nav-list">
                  <li><a href="{{ route('front.blog.index') }}">The best web development companies in KSA</a></li>
                  <li><a href="{{ route('front.blog.index') }}">The best web design company in Saudi Arabia</a></li>
                  <li><a href="{{ route('front.blog.index') }}">Website quality: 6 strategies for better performance</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-area">
          <div class="copyright-area-inner">
            <div class="copyright-text">
              <p class="text">© 2026 <a href="#">Bishop Integrated Solutions.</a> All rights reserved</p>
            </div>
          </div>
        </div>
      </footer>
      <!-- footer area end  -->


      <a href="https://wa.me/201555665776"
         class="floating-whatsapp-footer"
         target="_blank"
         rel="noopener"
         aria-label="WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
      </a>

      <style>
        .floating-whatsapp-footer {
          position: fixed;
          right: 20px;
          bottom: 90px;
          height: 46px;
          width: 46px;
          display: inline-flex;
          align-items: center;
          justify-content: center;
          border-radius: 50px;
          z-index: 999;
          opacity: 0;
          visibility: hidden;
          transform: translateY(-100px);
          transition: all 300ms linear;
        }

        .floating-whatsapp-footer.active-progress {
          opacity: 1;
          visibility: visible;
          transform: translateY(0);
          mix-blend-mode: normal;
          background-color: #25D366;
        }

        .floating-whatsapp-footer i {
          font-size: 20px;
          color: #ffffff;
          transition: all 200ms linear;
        }

        .dark .floating-whatsapp-footer i {
          color: #ffffff;
        }

        @media (max-width: 767px) {
          .floating-whatsapp-footer {
            right: 16px;
            bottom: 84px;
          }
        }
      </style>

      <script>
        document.addEventListener('DOMContentLoaded', function () {
          var whatsappButton = document.querySelector('.floating-whatsapp-footer');
          var progressWrap = document.querySelector('.progress-wrap');

          if (!whatsappButton || !progressWrap) {
            return;
          }

          var syncWhatsappState = function () {
            whatsappButton.classList.toggle('active-progress', progressWrap.classList.contains('active-progress'));
          };

          syncWhatsappState();

          var observer = new MutationObserver(syncWhatsappState);
          observer.observe(progressWrap, { attributes: true, attributeFilter: ['class'] });
        });
      </script>
