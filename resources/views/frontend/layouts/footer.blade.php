  <!-- Footer Area -->

  <footer class="footer-area py-0">
      <div class="container">
          <div class="footer-up py-md-5 py-4">
              <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                      {{-- <a href="{{ url('/') }}" class="logo">
                          <img src="{{ asset('frontend/assets/img/solar-logo.png') }}" alt="solar-logo">
                      </a> --}}
                      <p>Solar Techmach is company who sells only production plant and machinerys related to solar
                          energy and also renewable energy like hydrogen gas oxygen gas from waster by using
                          electrolysis.</p>
                  </div>
                  {{-- <div class="col-lg-1"></div> --}}
                  <div class="col-lg-4   col-md-6 com-sm-12 section--right-20">
                      <h5>Important Links</h5>
                      <ul>
                          <li class="mobile-links">
                              <a href="{{ url('/') }}">Home</a>
                              <a href="{{ url('/about-us') }}">About Us</a>
                              <a href="{{ url('/products') }}">Products</a>
                              <a href="{{ url('/solutions') }}">Solutions</a>
                              <a href="{{ url('/business-process') }}">Business Process</a>
                              <a href="{{ url('/connect-with-us') }}">Connect With Us</a>
                              <a href="{{ url('/exhibitions') }}">Exhibitions</a>
                              <a href="{{ url('/contact-us') }}">Contact Us</a>
                          </li>
                      </ul>
                  </div>
                  <div class="col-lg-4 col-md-6 office section--right-20 contact-info">
                      <h5 class="mb-3">Contact Us</h5>

                      <div class="company-email ">
                          <p class="my-0"><i class="fa-solid fa-envelope"></i>&nbsp; <a
                                  href="mailto:sales@solartechmach.com " class="text-muted text-decoration-none">
                                  sales@solartechmach.com </a></p>
                      </div>
                      <div class="phone-number">
                          <p class="mt-2 pt-1"><i class="fa-solid fa-headset"></i>&nbsp; <a href="tel:919326606599"
                                  class="text-muted"> +91-9326606599</a></p>
                      </div>

                      <div class="d-flex align-items-center"> <i
                              class="fa-solid text-muted fa-location-dot d-block position-custom-icon"></i> &nbsp;<p
                              class="text-muted my-0 mx-2"> India | USA | China | Turkey | EU | Dubai & S.Africa<br>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>

  <!-- Footer Bottom Area -->

  <div class="footer-bottom">
      <div class="container">
          <div class="row justify-content-center align-items-center justify-content-center">
              <div class="text-center">
                  <p class="copyright-line text-muted"> © {{ date('Y') }} All Rights Reserved Solar Techmach |
                      Designed &
                      Developed By <a href="https://acetrot.com/" target="_blank" class="active-clr-bottom">Acetrot</a>
                  </p>
              </div>
          </div>
      </div>
  </div>

  <!-- Off-canvas Area-->
  <div class="offcanvas-overly"></div>

  <!-- back to top start -->
  <div class="progress-wrap toop">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
  </div>

  {{-- <div class="progress-wrap wa">
      <a href="https://api.whatsapp.com/send?phone=9326606599" class="float bounce" target="_blank" id="myID">
          <i class="fa fa-whatsapp my-float"></i>
      </a>
  </div> --}}
  <!-- Popper JS -->
  <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
  <!-- Bootstrap JS -->
  <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
  <!-- Wow JS -->
  <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
  <!-- Way Points JS -->
  <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
  <!-- Counter Up JS -->
  <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
  <!-- Owl Carousel JS -->
  <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
  <!-- Slick Slider JS -->
  <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
  <!-- Magnific Popup JS -->
  <script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
  <!-- Isotope JS -->
  <script src="{{ asset('frontend/assets/js/isotope-3.0.6-min.js') }}"></script>
  <!-- Sticky JS -->
  <script src="{{ asset('frontend/assets/js/jquery.sticky.js') }}"></script>
  <!-- Nice Select JS -->
  <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
  <!-- Back To Top JS -->
  <script src="{{ asset('frontend/assets/js/backToTop.js') }}"></script>
  <!-- Progress Bar JS -->
  <script src="{{ asset('frontend/assets/js/jquery.barfiller.js') }}"></script>
  <!-- Circle Progress Bar JS -->
  <script src="{{ asset('frontend/assets/js/circle-progress.min.js') }}"></script>
  <!-- Main JS -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

  <script>
      $(document).ready(function() {
          var text = ['Residential', 'Commercial', 'Utility', 'PV Energy', 'Other'];
          var index = 0;
          var changeText = setInterval(function() {
              if (index == text.length - 1)
                  index = 0;
              else
                  index++;
              $('.rotate-text').animate({
                  "opacity": "0",
                  "margin-left": "10px"
              }, 500, function() {
                  $('.rotate-text').text(text[index]);
                  $('.rotate-text').animate({
                      "opacity": "1",
                      "margin-left": "0"
                  }, 500);
              });

          }, 2000);
      });
  </script>




  <!--load WOW js from CDN-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

  <!--Initiate WOW js, can be at the bottom of your file -->
  <script>
      wow = new WOW({
          boxClass: 'wow', // default
          animateClass: 'animated', // change this if you are not using animate.css
          offset: 0, // default
          mobile: true, // keep it on mobile
          live: true,
          iteration: 10,
          duration: 3,
          delay: 2

          // track if element updates
      })
      wow.init();
  </script>


  <script>
      $("#home-1").owlCarousel({
          loop: true,
          autoplay: 5000,
          stopOnHover: true,
          navigation: true,
          singleItem: true,
          autoHeight: true,
          autoplayTimeout: 5000,
          navigationText: ['<div class="left">left</div>', '<div class="right">right</div>']
      });
  </script>
  <script>
      $(".main-btn,.product-btn,.bordered-btn").mousedown(function() {
          $(this).addClass("pressed");
      });

      $(".main-btn,.product-btn,.bordered-btn").mouseup(function() {
          $(this).removeClass("pressed");
      });



      $(".main-btn,.product-btn,.bordered-btn").on("tap", function() {
          $(this).removeClass("pressed");
      });

      $(".main-btn,.product-btn,.bordered-btn").mouseout(function() {
          $(this).removeClass("pressed");
      });
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.8.3/lightgallery.min.js" integrity="sha512-n02TbYimj64qb98ed5WwkNiSw/i9Xlvv4Ehvhg0jLp3qMAMWCYUHbOMbppZ0vimtyiyw9NqNqxUZC4hq86f4aQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    lightGallery(document.getElementById('lightgallery'))
</script>
