@extends('landing-page.layouts.master')
@section('content')

<!-- ======= Hero Section ======= -->
<div class="hero-section">
  <div class="video-container">
    <video control autoplay muted loop>
      <source src="/video/landingpage.mp4" type="video/mp4">
    </video>
    <div class="overlay"></div>
  </div>
</div> 
<!-- Hero Section End -->


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="/img/logo/logo2.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h1 style="padding-top: 60px;">Apa itu Etnochem?</h1>
            <p class="fst-italic" style="text-align: justify;">
              Etnochem merupakan inovasi media pembelajaran digital untuk materi asam basa berbasis kearifan lokal malang terintegrasi etno-STEAM. Dalam website ini terdapat fitur unggulan yaitu Ayo Belajar yang didalamnya menerapkan model pembelajaran Project Based Learning (PjBL) sesuai dengan perkembangan kurikulum merdeka. Selain itu, terdapat fitur tambahan yaitu Ayo Berwawasan yaitu menyediakan wadah sumber belajar bagi siswa untuk meningkatkan berpikir kritis siswa
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-4 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-4 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Teacher</p>
          </div>

          <div class="col-4 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Project</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Section ======= -->

    <section style="padding-top: 40px;">
      <div class="container">
        <h1 class="text-center"><strong>Mengapa harus Etnochem?</strong></h1>
        <div class="row" style="margin-top: 80px; margin-bottom: 100px;">
          <div class="col text-center"><img src="/img/icon/video.png" alt="" height="150px"><p class="mt-3 text-center">Video pembelajaran berbasis kearifan lokal</p> </div>
          <div class="col text-center"><img src="/img/icon/flipbook.png" alt="" height="150px"><p class="mt-3 text-center">Flibook interaktif</p> </div>
          <div class="col text-center"><img src="/img/icon/terarah.png" alt="" height="150px"><p class="mt-3 text-center">Pembelajaran terarah menggunakan PjBL</p> </div>
          <div class="col text-center"><img src="/img/icon/modul.png" alt="" height="150px"><p class="mt-3 text-center">Modul proyek dengan Etno-STEAM</p> </div>
          <div class="col text-center"><img src="/img/icon/koneksi.png" alt="" height="150px"><p class="mt-3 text-center">Koneksi siswa dan guru seluruh Indonesia</p> </div>
        </div>
      </div>
    </section>

    <!-- ======= Why Us Section ======= -->

    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content shadow">
              <h3>Apa yang akan dipelajari dalam Ayo Belajar?</h3>
              <p>
                Halaman ini membuat model pembelajaran Project Based Learning (PjBL) yang terdiri dari enam tahapan secara dinamis menggabungkan mentoring dan research organizer dapat membantu siswa dan guru mendapatkan pendampingan dalam penyusunan, progress dan hasil proyek yang diinginkan secara terstruktur dan prosedural.
              </p>
              <div class="text-center">
                <a href="{{route('auth.login.index')}}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">

                <div class="col-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-question-mark"></i>
                    <h4>Penentuan pertanyaan mendasar</h4>
                  </div>
                </div>

                <div class="col-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-extension"></i>
                    <h4>Menyusun perencanaan proyek</h4>
                  </div>
                </div>

                <div class="col-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-calendar-event"></i>
                    <h4>Menyusun jadwal</h4>
                  </div>
                </div>

                <div class="col-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-3">
                    <i class="bx bx-clipboard"></i>
                    <h4>Monitoring proyek</h4>
                  </div>
                </div>

                <div class="col-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-3">
                    <i class="bx bx-highlight"></i>
                    <h4>Pengujian hasil</h4>
                  </div>
                </div>

                <div class="col-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-3">
                    <i class="bx bx-bar-chart"></i>
                    <h4>Evaluasi pengalaman</h4>
                  </div>
                </div>


              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


   <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <h1 class="text-center mb-5"><strong>Apa Kata Mereka?</strong></h1>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="./img/trainers/trainer-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter White</h4>
                <span>Web Development</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="./img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="./img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->

    <!-- Section Tagline Start-->
    <div class="text-center" style="background: #eddeb3; padding-bottom: 50px;">
      <h1 class="pt-5 fw-bold fst-italic">" Wujudkan Kimia yang Berbudaya "</h1>
      <div class="d-flex justify-content-center">
        <hr style="height: 3px; border:none; background-color: black; width:70%;">
      </div>
      <a href="{{route('auth.login.index')}}" class="btn px-5 rounded-pill tagline"><strong>Jelajahi sekarang!</strong></a>
    </div>
    <!-- Section Tagline End -->

  </main><!-- End #main -->

@endsection