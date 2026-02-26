@extends('layouts.main')

@section('container')

<div class="page-title">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1 class="heading-title">Tentang RS Awal Bros Panam</h1>
          <p class="mb-0">
            Melayani dengan Cinta dan Kasih Sayang. Kami berkomitmen untuk memberikan pelayanan kesehatan terbaik dan terdepan bagi Anda dan keluarga.
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
</div>

<section id="about" class="about section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row align-items-center mb-5">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
        <div class="about-content">
          <h2>Pelayanan Penuh Kasih untuk Setiap Keluarga</h2>
          <p class="lead">Sejak didirikan, RS Awal Bros Panam telah berdedikasi untuk menyediakan layanan kesehatan yang komprehensif, modern, dan didukung oleh tenaga medis profesional.</p>

          <p>Rumah Sakit Awal Bros Panam mengedepankan inovasi teknologi medis terkini serta standar keselamatan pasien yang ketat (Terakreditasi Paripurna). Kami tidak hanya mengobati, tetapi juga mengedukasi masyarakat melalui berbagai kegiatan promosi kesehatan dan seminar yang rutin diadakan.</p>

          <div class="stats-grid">
            <div class="stat-item">
              <span class="stat-number">24/7</span>
              <span class="stat-label">Layanan IGD</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">50+</span>
              <span class="stat-label">Dokter Spesialis</span>
            </div>
            <div class="stat-item">
              <span class="stat-number">100%</span>
              <span class="stat-label">Komitmen Layanan</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="image-wrapper">
          <img src="{{ asset('assets/img/health/facilities-6.webp') }}" class="img-fluid main-image rounded-4 shadow" alt="Fasilitas RS">
        </div>
      </div>
    </div>

    <div class="values-section mt-5" data-aos="fade-up" data-aos-delay="300">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h3>Nilai Inti Kami (Core Values)</h3>
          <p class="section-description">Prinsip yang memandu kami dalam memberikan pelayanan kesehatan</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="value-item text-center">
            <div class="value-icon mb-3"><i class="bi bi-heart-pulse fs-1 text-primary"></i></div>
            <h4>Compassion</h4>
            <p>Memberikan perawatan dengan empati dan pengertian untuk setiap kebutuhan pasien.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="value-item text-center">
            <div class="value-icon mb-3"><i class="bi bi-shield-check fs-1 text-primary"></i></div>
            <h4>Excellence</h4>
            <p>Mempertahankan standar medis tertinggi melalui pembelajaran berkelanjutan.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="value-item text-center">
            <div class="value-icon mb-3"><i class="bi bi-people fs-1 text-primary"></i></div>
            <h4>Integrity</h4>
            <p>Membangun kepercayaan melalui komunikasi yang jujur dan praktik etis.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="value-item text-center">
            <div class="value-icon mb-3"><i class="bi bi-lightbulb fs-1 text-primary"></i></div>
            <h4>Innovation</h4>
            <p>Menerapkan teknologi dan perawatan mutakhir untuk kesembuhan pasien.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection