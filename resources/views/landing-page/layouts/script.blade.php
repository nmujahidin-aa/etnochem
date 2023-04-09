  <!-- Vendor JS Files -->
  <script src="{{URL::to('/')}}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{URL::to('/')}}/vendor/aos/aos.js"></script>
  <script src="{{URL::to('/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{URL::to('/')}}/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{URL::to('/')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

  <script>
  // Ambil elemen navbar
    var header = document.getElementById("header");

    // Tambahkan event listener untuk menangani perubahan warna saat di-scroll
    window.addEventListener("scroll", function() {
      // Jika posisi scroll lebih besar dari atau sama dengan posisi elemen dengan id "section-1"
      if (window.scrollY >= document.getElementById("hero").offsetTop) {
        // Ubah warna tulisan dan latar belakang navbar
        header.style.backgroundColor = "white";
        header.style.color = "black";
      } else {
        // Kembalikan ke warna default
        header.style.backgroundColor = "transparent";
        header.style.color = "#white";
      }
    });
</script>
