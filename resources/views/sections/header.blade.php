@section('header')

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  <header class="site-navbar site-navbar-target" role="banner">

    <div class="container mb-3">
      <div class="d-flex align-items-center">
        <div class="site-logo mr-auto">
          <a href="index.html">Kiddy<span class="text-primary">.</span></a>
        </div>
        <div class="site-quick-contact d-none d-lg-flex ml-auto ">
          <div class="d-flex site-info align-items-center mr-5">
            <span class="block-icon mr-3"><i class="fas fa-map-marker-alt text-yellow"></i></span>
            <span>34 Street Name, City Name Here, <br> United States</span>
          </div>
          <div class="d-flex site-info align-items-center">
            <span class="block-icon mr-3"><i class="far fa-clock"></i></span>
            <span>Sunday - Friday 8:00AM - 4:00PM <br> Saturday CLOSED</span>
          </div>

        </div>
      </div>
    </div>


    <div class="container">
      <div class="menu-wrap d-flex align-items-center">
        <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

          <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto ">
              <li class="{{ $nav == "index" ? "active": "" }}"><a href="/" class="nav-link">Home</a></li>
              <li class="{{ $nav == "about" ? "active": "" }}"><a href="/sobre" class="nav-link">About</a></li>
              <li class="{{ $nav == "packages" ? "active": "" }}"><a href="/pacotes" class="nav-link">Packages</a></li>
              <li class="{{ $nav == "gallery" ? "active": "" }}"><a href="/galeria" class="nav-link">Gallery</a></li>
              <li class="{{ $nav == "pricing" ? "active": "" }}"><a href="/precos" class="nav-link">Pricing</a></li>
              <li class="{{ $nav == "contact" ? "active": "" }}"><a href="/contato" class="nav-link">Contact</a></li>
            </ul>
          </nav>

          <div class="top-social ml-auto">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram text-danger"></i></a>
            <a href="#"><i class="fab fa-whatsapp text-success"></i></a>
          </div>
      </div>
    </div>

  </header>

@show
