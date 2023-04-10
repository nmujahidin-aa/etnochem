<nav class="navbar fixed-top">
  <div class="container">
    <div class="navbar-logo">
      <a href="#"><img src="/img/logo/logo.png" alt="" height="60px;"></a>
    </div>
    <ul class="navbar-menu">
      <li><a href="{{route('landing-page.home.index')}}" class="nav-link  @if(request()->routeIs('landing-page.home.index')) active @endif">Home</a></li>
      <li><a href="{{route('landing-page.tentang-kami.index')}}" class="nav-link  @if(request()->routeIs('landing-page.tentang-kami.index')) active @endif">Tentang Kami</a></li>
      <li><a href="{{route('landing-page.hubungi-kami.index')}}" class="nav-link  @if(request()->routeIs('landing-page.hubungi-kami.index')) active @endif">Hubungi Kami</a></li>
    </ul>
    <div class="navbar-login">
      <a href="{{route('auth.login.index')}}">Login</a>
    </div>
  </div>
</nav>