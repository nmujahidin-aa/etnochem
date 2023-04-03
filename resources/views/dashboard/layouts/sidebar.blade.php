  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('landing-page.home.index')}}">
          <i class="bi bi-browser-chrome"></i><span>Landingpage</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed active" href="{{route('dashboard.index')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('dashboard.user.index')}}">
          <i class="bi bi-person"></i><span>User</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('dashboard.kompetensi.index')}}">
          <i class="bi bi-clipboard2-pulse-fill"></i>
          <span>Kompetensi</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('dashboard.peta-konsep.index')}}">
          <i class="bi bi-diagram-3-fill"></i>
          <span>Peta Konsep</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-newspaper"></i><span>Ayo Berwawasan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('dashboard.video.index')}}">
              <i class="bi bi-circle"></i><span>Video</span>
            </a>
          </li>
          <li>
            <a href="{{route('dashboard.bahan.index')}}l">
              <i class="bi bi-circle"></i><span>Bahan Pembelajaran</span>
            </a>
          </li>
          <li>
            <a href="{{route('dashboard.soal.index')}}">
              <i class="bi bi-circle"></i><span>Soal</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('dashboard.info-pengembang.index')}}">
          <i class="bi bi-code-slash"></i>
          <span>Info Pengembang</span>
        </a>
      </li><!-- End Contact Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->