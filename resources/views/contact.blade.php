@extends('layouts.main')

@section('container')

<div class="page-title">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1 class="heading-title">Hubungi Kami</h1>
          <p class="mb-0">
            Kami siap melayani Anda. Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan terkait jadwal dokter, promo layanan, atau kondisi darurat.
          </p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="/">Beranda</a></li>
        <li class="current">Kontak</li>
      </ol>
    </div>
  </nav>
</div>

<section id="contact" class="contact section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-5">
      <div class="col-lg-5">
        <div class="contact-info-wrapper">
          <div class="contact-info-item" data-aos="fade-up" data-aos-delay="100">
            <div class="info-icon">
              <i class="bi bi-geo-alt"></i>
            </div>
            <div class="info-content">
              <h3>Alamat Kami</h3>
              <p>Jl. HR. Soebrantas No.KM 15, Tuah Karya, Kec. Tampan</p>
              <p>Kota Pekanbaru, Riau 28293</p>
            </div>
          </div>

          <div class="contact-info-item" data-aos="fade-up" data-aos-delay="200">
            <div class="info-icon">
              <i class="bi bi-telephone"></i>
            </div>
            <div class="info-content">
              <h3>Layanan Telepon</h3>
              <p>Call Center: 1500 000</p>
              <p>IGD & Ambulance: (0761) 5333333</p>
            </div>
          </div>

          <div class="contact-info-item" data-aos="fade-up" data-aos-delay="300">
            <div class="info-icon">
              <i class="bi bi-clock"></i>
            </div>
            <div class="info-content">
              <h3>Jam Operasional</h3>
              <p>IGD, Rawat Inap & Lab: 24 Jam</p>
              <p>Poliklinik: Sesuai Jadwal Dokter</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="h-100 rounded-4 overflow-hidden shadow" data-aos="fade-up" data-aos-delay="200">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.4597542899883!2d101.38775487447454!3d0.46326876378502374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a8f5db0db97b%3A0x8f4c180a400c2d84!2sRS%20Awal%20Bros%20Panam!5e1!3m2!1sid!2sid!4v1772123970145!5m2!1sid!2sid" width="100%" height="100%" style="border:0; min-height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection