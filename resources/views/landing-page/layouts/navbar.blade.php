<!-- ======= Header ======= -->
  <header id="header" class="fixed-top navbar-scroll">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Etnochem.</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <!-- <a href="index.html" class="logo me-auto"><img src="./img/logo.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link @if(request()->routeIs('landing-page.home.index')) active @endif" href="{{route('landing-page.home.index')}}">Home</a></li>
          <li><a class="nav-link @if(request()->routeIs('landing-page.tentang-kami.index')) active @endif" href="{{route('landing-page.tentang-kami.index')}}">Tentang Kami</a></li>
          <li><a class="nav-link @if(request()->routeIs('landing-page.hubungi-kami.index')) active @endif" href="{{route('landing-page.hubungi-kami.index')}}">Hubungi Kami</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{route('auth.login.index')}}" class="get-started-btn">Masuk</a>

    </div>
  </header><!-- End Header -->
