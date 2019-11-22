@extends('base')

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap" id="home-section">

      @include('sections.header', ['nav' => 'index'])

      <div class="ftco-blocks-cover-1">

        <div class="site-section-cover overlay">
          <div class="container">
            <div class="row align-items-center ">
              <div class="col-md-5 mt-5 pt-5">
                <span class="text-cursive h5 text-red">Welcome To Our Website</span>
                <h1 class="mb-3 font-weight-bold text-teal">Bring Fun Life To Your Kids</h1>
                <p>Amazing Playground for your kids</p>
                <p class="mt-5"><a href="#" class="btn btn-primary py-4 btn-custom-1">Learn More</a></p>
              </div>
              <div class="col-md-6 ml-auto align-self-end">
                <img src="images/kid_transparent.png" alt="Image" class="img-fluid">

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="block-2 red">
                <span class="wrap-icon">
                  <span class="fas fa-home"></span>
                </span>
                <h2>Indoor Games</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt, mollitia, hic enim id culpa.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="block-2 yellow">
                <span class="wrap-icon">
                  <span class="fas fa-user"></span>
                </span>
                <h2>Outdoor Game And Event</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt, mollitia, hic enim id culpa.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="block-2 teal">
                <span class="wrap-icon">
                  <span class="fas fa-cog"></span>
                </span>
                <h2>Camping for Kids</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima nesciunt, mollitia, hic enim id culpa.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('sections.about-us')

      @include('sections.our-packages')

      @include('sections.pricing-plan')

      @include('sections.testimonial')

      @include('sections.banner')

      @include('sections.footer')

    </div>
{{--
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>
--}}

  </body>

</html>

