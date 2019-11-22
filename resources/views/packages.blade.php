@extends('base')

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap" id="home-section">

    @include('sections.header', ['nav' => 'packages'])

    <div class="ftco-blocks-cover-1">
       <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center ">

            <div class="col-md-5 mt-5 pt-5">
              <span class="text-cursive h5 text-red">Welcome To Our Website</span>
              <h1 class="mb-3 font-weight-bold text-teal">Packages</h1>
              <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Packages</strong></p>
            </div>

          </div>
        </div>
      </div>
    </div>


    @include('sections.our-packages')

    @include('sections.testimonial')

    @include('sections.banner')

    @include('sections.footer')

    </div>

  </body>

</html>

