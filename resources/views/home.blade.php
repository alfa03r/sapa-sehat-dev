@extends('layouts.main')

@section('container')

<section id="hero" class="hero section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="hero-content">
          <div class="trust-badges mb-4" data-aos="fade-right" data-aos-delay="200">
            <div class="badge-item">
              <i class="bi bi-shield-check"></i>
              <span>Terakreditasi Paripurna</span>
            </div>
            <div class="badge-item">
              <i class="bi bi-clock"></i>
              <span>24/7 IGD</span>
            </div>
          </div>

          <h1 data-aos="fade-right" data-aos-delay="300">
            Pusat Informasi <span class="highlight">Kesehatan</span> & Layanan RS Awal Bros
          </h1>

          <p class="hero-description" data-aos="fade-right" data-aos-delay="400">
            Temukan berbagai informasi jadwal kegiatan, seminar edukasi, dan promo layanan kesehatan terbaru dari Rumah Sakit Awal Bros Panam secara real-time.
          </p>

          <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
            <a href="#kegiatan" class="btn btn-primary">Lihat Jadwal Terbaru</a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
          <div class="main-image">
            <img src="{{ asset('assets/img/health/staff-10.webp') }}" alt="Fasilitas Kesehatan" class="img-fluid rounded-4 shadow">
          </div>
        </div>
      </div>
    </div>
  </div>
</section><section id="kegiatan" class="departments section light-background">
  <div class="container section-title" data-aos="fade-up">
    <h2>Kegiatan & Promo Terbaru</h2>
    <p>Jangan lewatkan penawaran khusus dan jadwal kegiatan kesehatan dari kami.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-5">
      
      @forelse ($latest as $event)
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="department-card h-100 bg-white shadow-sm rounded-4 overflow-hidden position-relative">
          
          <div class="department-image">
            @if($event->thumbnail)
              <img src="{{ asset('storage/' . $event->thumbnail) }}" alt="{{ $event->title }}" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
            @else
              <img src="{{ asset('assets/img/health/cardiology-3.webp') }}" alt="Default" class="img-fluid w-100" style="height: 250px; object-fit: cover;">
            @endif
          </div>
          
          <div class="department-content p-4">
            <span class="badge bg-{{ $event->category->color }} mb-3 fs-6">{{ $event->category->name }}</span>
            <h3 class="fs-4 fw-bold mb-3">{{ $event->title }}</h3>
            
            <p class="text-muted small mb-2">
                <i class="bi bi-calendar-event me-2"></i> 
                {{ $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('d M Y - H:i') : 'Waktu menyesuaikan' }}
            </p>
            @if($event->location)
            <p class="text-muted small mb-3">
                <i class="bi bi-geo-alt me-2"></i> {{ $event->location }}
            </p>
            @endif

            <a href="#" class="learn-more d-inline-flex align-items-center mt-3 text-primary fw-bold text-decoration-none">
              <span class="me-2">Lihat Detail</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      @empty
      <div class="col-12 text-center py-5">
          <p class="text-muted fs-5">Belum ada informasi kegiatan atau promo terbaru.</p>
      </div>
      @endforelse

    </div>
  </div>
</section>

@endsection