@extends('base')

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

    @include('sections.header', ['nav' => 'about'])

    <div class="ftco-blocks-cover-1">
       <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center ">

            <div class="col-md-5 mt-5 pt-5">
              <span class="text-cursive h5 text-red">Welcome To Our Website</span>
              <h1 class="mb-3 font-weight-bold text-teal">About Us</h1>
              <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span> <strong>About</strong></p>
            </div>

          </div>
        </div>
      </div>
    </div>



    @include('sections.about-us')

    <div class="site-section bg-teal">
      <div class="container">
        <div class="row justify-content-center text-center mb-5 section-2-title">
          <div class="col-md-6">
            <span class="text-cursive h5 text-red">The Team</span>
            <h3 class="text-white text-center">Meet The Team</h3>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
          </div>
        </div>
        <div class="row align-items-stretch">

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 teal">

                <img src="images/person_1.jpg" alt="Image"
                 class="img-fluid">

              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 yellow">

                <img src="images/person_2.jpg" alt="Image"
                 class="img-fluid">

              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 red">

                <img src="images/person_3.jpg" alt="Image"
                 class="img-fluid">

              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 green">

                <img src="images/person_4.jpg" alt="Image"
                 class="img-fluid">

              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 blue">

                <img src="images/person_5.jpg" alt="Image"
                 class="img-fluid">

              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1 red">

                <img src="images/person_1.jpg" alt="Image"
                 class="img-fluid">

              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>


    <div class="site-section bg-info">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red d-block">Packages You Like</span>
            <h2 class="text-white">Our Packages</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="package text-center bg-white">
              <span class="img-wrap"><img src="images/flaticon/svg/001-jigsaw.svg" alt="Image" class="img-fluid"></span>
              <h3 class="text-teal">Indoor Games</h3>
              <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>
              <p><a href="#" class="btn btn-primary btn-custom-1 mt-4">Learn More</a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="package text-center bg-white">
              <span class="img-wrap"><img src="images/flaticon/svg/002-target.svg" alt="Image" class="img-fluid"></span>
              <h3 class="text-success">Outdoor Game and Event</h3>
              <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>
              <p><a href="#" class="btn btn-warning btn-custom-1 mt-4">Learn More</a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="package text-center bg-white">
              <span class="img-wrap"><img src="images/flaticon/svg/003-mission.svg" alt="Image" class="img-fluid"></span>
              <h3 class="text-danger">Camping for Kids</h3>
              <p>Lorem ipsum dolor sit amet. Consequatur aliquam, fuga maiores amet quo corporis distinctio soluta recusandae?</p>
              <p><a href="#" class="btn btn-success btn-custom-1 mt-4">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('sections.footer')

    </div>

  </body>

</html>

