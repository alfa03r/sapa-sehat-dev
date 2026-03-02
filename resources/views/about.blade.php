@extends('layouts.main')

@section('container')

<div class="page-title">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1 class="heading-title fw-bold">Tentang RS Awal Bros</h1>
          <p class="mb-0">
            Mengenal lebih dekat jaringan rumah sakit terpercaya yang berdedikasi memberikan layanan kesehatan berkualitas tinggi berstandar nasional dan internasional.
          </p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="/">Beranda</a></li>
        <li class="current">Tentang Kami</li>
      </ol>
    </div>
  </nav>
</div><section id="about" class="about section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row align-items-center mb-5 pb-4">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <div class="about-content pe-lg-4">
          <h2 class="fw-bold mb-4 text-primary">Sejarah & Dedikasi Kami</h2>
          <p>
            RS Awal Bros berdiri bermula dari keinginan tokoh masyarakat Riau, <strong>Alm. Haji Awaloeddin</strong> dan <strong>Hj. Muslamah Ali</strong>, yang bercita-cita menghadirkan rumah sakit dengan fasilitas lengkap dan sumber daya manusia profesional di Pekanbaru. Pendirian ini dilatarbelakangi kebutuhan masyarakat Riau terhadap layanan kesehatan modern yang memadai tanpa harus dirujuk ke luar daerah.
          </p>
          <p>
            Rumah Sakit Awal Bros Pekanbaru kemudian resmi dioperasikan dan diresmikan oleh Gubernur Riau saat itu, Soeripto, pada <strong>29 Agustus 1998</strong>.
          </p>
          <p>
            RS Awal Bros Group telah memiliki sertifikasi nasional dan internasional, termasuk akreditasi <strong>JCI (Joint Commission International)</strong> untuk standar global serta <strong>KARS</strong> dan <strong>Lafki</strong> untuk standar nasional. Kami berkomitmen untuk menyediakan perawatan berkualitas tinggi yang berfokus pada kesehatan dan kesejahteraan pasien.
          </p>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="image-wrapper position-relative">
          <img src="{{ asset('assets/img/health/facilities-9.webp') }}" class="img-fluid main-image rounded-4 shadow-lg border border-4 border-white" alt="Gedung RS Awal Bros">
          <div class="position-absolute bottom-0 end-0 bg-white p-4 rounded-4 shadow-lg mb-4 me-4 d-none d-md-block" style="z-index: 2;">
            <div class="d-flex align-items-center gap-3">
              <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-circle">
                <i class="bi bi-hospital fs-3"></i>
              </div>
              <div>
                <h4 class="fw-bold mb-0">10+</h4>
                <small class="text-muted">Jaringan Rumah Sakit</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row g-4 mb-5 pb-5 text-center border-top border-bottom py-4" data-aos="fade-up" data-aos-delay="300">
      <div class="col-6 col-lg-3">
        <h2 class="fw-bold text-primary display-5 mb-0">20+</h2>
        <span class="text-muted fw-semibold">Layanan Unggulan</span>
      </div>
      <div class="col-6 col-lg-3">
        <h2 class="fw-bold text-primary display-5 mb-0">450+</h2>
        <span class="text-muted fw-semibold">Dokter Spesialis</span>
      </div>
      <div class="col-6 col-lg-3">
        <h2 class="fw-bold text-primary display-5 mb-0">150+</h2>
        <span class="text-muted fw-semibold">Dokter Sub Spesialis</span>
      </div>
      <div class="col-6 col-lg-3">
        <h2 class="fw-bold text-primary display-5 mb-0">50+</h2>
        <span class="text-muted fw-semibold">Mitra & Asuransi</span>
      </div>
    </div>

    <div class="row mb-5 pb-4 align-items-center" data-aos="fade-up" data-aos-delay="400">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="bg-primary text-white p-5 rounded-4 shadow h-100">
          <div class="d-flex align-items-center mb-3">
            <i class="bi bi-eye-fill fs-1 me-3"></i>
            <h2 class="text-white mb-0 fw-bold">Visi Kami</h2>
          </div>
          <p class="fs-5 lh-base">
            "Menjadi jaringan pelayanan kesehatan dan rumah sakit terkemuka dengan standar internasional, yang dikenal atas kualitas dan inovasinya dalam memberikan perawatan kesehatan terbaik."
          </p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="bg-white border border-primary p-5 rounded-4 shadow-sm h-100">
          <div class="d-flex align-items-center mb-3">
            <i class="bi bi-bullseye fs-1 text-primary me-3"></i>
            <h2 class="text-primary mb-0 fw-bold">Misi Kami</h2>
          </div>
          <p class="fs-5 lh-base text-muted">
            "Memberikan pelayanan kesehatan yang profesional dan berstandar tinggi, dengan penuh kepedulian terhadap pasien dan masyarakat, serta memastikan kesejahteraan setiap individu yang kami layani."
          </p>
        </div>
      </div>
    </div>

    <div class="values-section mt-5 bg-light p-5 rounded-4" data-aos="fade-up" data-aos-delay="500">
      <div class="row">
        <div class="col-lg-12 text-center mb-5">
          <h2 class="fw-bold text-primary">Nilai Utama Budaya Kerja</h2>
          <h4 class="display-6 fw-bold text-dark">P-R-I-M-A</h4>
          <p class="section-description text-muted">Budaya pelayanan unggul yang ditanamkan oleh seluruh staf RS Awal Bros</p>
        </div>
      </div>

      <div class="row justify-content-center g-4">
        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="value-item bg-white p-4 rounded-4 shadow-sm h-100 text-center border-bottom border-primary border-4">
            <div class="value-icon mb-3">
              <i class="bi bi-person-workspace fs-1 text-primary"></i>
            </div>
            <h4 class="fw-bold">Profesional</h4>
            <p class="text-muted small">Kami berkomitmen untuk bekerja sesuai dengan kemampuan terbaik di bidangnya, dengan penuh tanggung jawab, dan mematuhi etika profesi yang tinggi.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="value-item bg-white p-4 rounded-4 shadow-sm h-100 text-center border-bottom border-primary border-4">
            <div class="value-icon mb-3">
              <i class="bi bi-check2-all fs-1 text-primary"></i>
            </div>
            <h4 class="fw-bold">Rapi</h4>
            <p class="text-muted small">Setiap pekerjaan dilakukan secara sistematis, teratur, bersih, dan tuntas, menciptakan suasana kerja yang menyenangkan dan efisien.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="value-item bg-white p-4 rounded-4 shadow-sm h-100 text-center border-bottom border-primary border-4">
            <div class="value-icon mb-3">
              <i class="bi bi-heart-pulse fs-1 text-primary"></i>
            </div>
            <h4 class="fw-bold">Ibadah</h4>
            <p class="text-muted small">Menghargai perbedaan latar belakang setiap individu, bekerja dengan hati, berpikir positif dan menumbuhkan semangat dalam melayani.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="value-item bg-white p-4 rounded-4 shadow-sm h-100 text-center border-bottom border-primary border-4">
            <div class="value-icon mb-3">
              <i class="bi bi-ear fs-1 text-primary"></i>
            </div>
            <h4 class="fw-bold">Mendengarkan</h4>
            <p class="text-muted small">Kami berusaha memahami dan menghargai pendapat orang lain, karena komunikasi yang efektif dan empati dimulai dari proses saling mendengar.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="500">
          <div class="value-item bg-white p-4 rounded-4 shadow-sm h-100 text-center border-bottom border-primary border-4">
            <div class="value-icon mb-3">
              <i class="bi bi-chat-quote fs-1 text-primary"></i>
            </div>
            <h4 class="fw-bold">Asertif</h4>
            <p class="text-muted small">Kami mampu berkomunikasi dengan baik, jujur, dan terbuka, membangun kepercayaan antara tim medis dan juga kepada pasien kami.</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

@endsection