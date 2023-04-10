<header class="fixed-top">
  <nav class="navbar">
    <div class="container">
      <div class="navbar-logo">
        <a href="{{route('student.index')}}"><img src="{{URL::to('/')}}/img/logo/logo.png" alt="Logo"></a>
      </div>
      <div class="navbar-links">
        <ul>
          <li><a href="{{route('student.index')}}" class="@if(request()->routeIs('student.index')) active @endif">Home</a></li>
          <li><a href="">Tentang Kami</a></li>
        </ul>
      </div>
      <div class="navbar-profile">
        <a href="#"><img src="{{URL::to('/')}}/img/testimonials/testimonials-1.jpg" alt="Profil"></a>
        <small class="text-white" style="font-size: 15px;"> Hy, {{$row->name}}</small>
      </div>
    </div>
  </nav>
</header>
