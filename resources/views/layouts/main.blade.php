<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>SAPA SEHAT PANAM - RS Awal Bros</title>
  
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">
    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info@rsawalbros.com">info@rsawalbros.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>Call Center: 1500 000</span></i>
        </div>
      </div>
    </div>

    <div class="branding d-flex align-items-center">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <h1 class="sitename text-primary">SAPA SEHAT PANAM</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="{{ route('about') }}" class="{{ request()->is('tentang-kami') ? 'active' : '' }}">Tentang Kami</a></li>
            <li><a href="{{ route('events.index') }}" class="{{ request()->is('kegiatan*') ? 'active' : '' }}">Jadwal & Promo</a></li>
            <li><a href="{{ route('contact') }}" class="{{ request()->is('kontak') ? 'active' : '' }}">Kontak & Lokasi</a></li>
            <li><a href="/admin" class="btn btn-primary text-white px-4 ms-3" style="border-radius: 50px;">Login Admin</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
  </header>

  <main class="main">
    @yield('container')
  </main>

  <footer id="footer" class="footer-16 footer position-relative bg-white pt-5 mt-5 border-top">
    <div class="container">
      <div class="footer-main" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-start">

          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="brand-section">
              <a href="/" class="logo d-flex align-items-center mb-3 text-decoration-none">
                <img src="{{ asset('assets/img/logo-awalbros.png') }}" alt="Logo Awal Bross" style="max-height: 50px; width: auto;">
              </a>
              <p class="brand-description text-muted small pe-lg-4">
                Melayani dengan Cinta dan Kasih Sayang. Dapatkan layanan kesehatan terbaik dengan fasilitas modern dan tenaga medis profesional.
              </p>

              <div class="contact-info mt-4">
                <div class="contact-item d-flex align-items-start mb-3">
                  <i class="bi bi-geo-alt fs-5 text-primary me-3 mt-1"></i>
                  <span class="text-muted small">Jl. HR. Soebrantas No. 88, Panam<br>Kota Pekanbaru, Riau 28299</span>
                </div>
                <div class="contact-item d-flex align-items-center mb-3">
                  <i class="bi bi-telephone fs-5 text-primary me-3"></i>
                  <span class="text-muted small">0761-586888 / Call Center: 1500 000</span>
                </div>
                <div class="contact-item d-flex align-items-center mb-3">
                  <i class="bi bi-clock fs-5 text-primary me-3"></i>
                  <span class="text-muted small">Layanan Telepon: 06:00 - 22:00 WIB</span>
                </div>
              </div>

              <div class="social-links d-flex mt-4">
                <a href="#" class="text-secondary me-3 fs-5 hover-primary"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-secondary me-3 fs-5 hover-primary"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="text-secondary me-3 fs-5 hover-primary"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-secondary me-3 fs-5 hover-primary"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="footer-nav-wrapper">
              <div class="row">

                <div class="col-6 col-md-3 mb-4">
                  <div class="nav-column">
                    <h6 class="fw-bold mb-3">Departemen</h6>
                    <nav class="footer-nav d-flex flex-column gap-2 small">
                      <a href="#" class="text-muted text-decoration-none">UGD 24 Jam</a>
                      <a href="#" class="text-muted text-decoration-none">Laboratorium</a>
                      <a href="#" class="text-muted text-decoration-none">Farmasi</a>
                      <a href="#" class="text-muted text-decoration-none">Kamar Operasi</a>
                      <a href="#" class="text-muted text-decoration-none">Ambulance</a>
                    </nav>
                  </div>
                </div>

                <div class="col-6 col-md-3 mb-4">
                  <div class="nav-column">
                    <h6 class="fw-bold mb-3">Layanan Unggulan</h6>
                    <nav class="footer-nav d-flex flex-column gap-2 small">
                      <a href="#" class="text-muted text-decoration-none">Klinik Memori</a>
                      <a href="#" class="text-muted text-decoration-none">Trauma Center</a>
                      <a href="#" class="text-muted text-decoration-none">Stroke Center</a>
                      <a href="#" class="text-muted text-decoration-none">Pain Intervention</a>
                      <a href="#" class="text-muted text-decoration-none">Home Care</a>
                    </nav>
                  </div>
                </div>

                <div class="col-6 col-md-3 mb-4">
                  <div class="nav-column">
                    <h6 class="fw-bold mb-3">Panduan Pasien</h6>
                    <nav class="footer-nav d-flex flex-column gap-2 small">
                      <a href="#" class="text-muted text-decoration-none">Rawat Jalan</a>
                      <a href="#" class="text-muted text-decoration-none">Rawat Inap</a>
                      <a href="#" class="text-muted text-decoration-none">Janji Temu & Akses</a>
                      <a href="#" class="text-muted text-decoration-none">Medical Check Up</a>
                    </nav>
                  </div>
                </div>

                <div class="col-6 col-md-3 mb-4">
                  <div class="nav-column">
                    <h6 class="fw-bold mb-3">Aplikasi & Portal</h6>
                    <nav class="footer-nav d-flex flex-column gap-2 small">
                      <a href="#" class="text-muted text-decoration-none">Aplikasi StarDok</a>
                      <a href="#" class="text-muted text-decoration-none">Halo Awal Bros</a>
                      <a href="/admin" class="text-primary text-decoration-none mt-2 fw-bold"><i class="bi bi-box-arrow-in-right"></i> Login Staf (Admin)</a>
                    </nav>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-bottom border-top pt-4 pb-4 mt-4">
      <div class="container">
        <div class="bottom-content" data-aos="fade-up" data-aos-delay="300">
          <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start mb-3 mb-lg-0">
              <div class="copyright text-muted small">
                <p class="mb-0">© <span class="sitename fw-bold text-dark">RS Awal Bros</span> {{ date('Y') }}. All rights reserved.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="legal-links text-center text-lg-end small">
                <a href="#" class="text-muted text-decoration-none me-3">Kebijakan Privasi</a>
                <a href="#" class="text-muted text-decoration-none">Syarat & Ketentuan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>