@extends('layouts.main')

@section('container')

<div class="page-title">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1 class="heading-title">Semua Jadwal & Promo</h1>
          <p class="mb-0">
            Daftar lengkap seluruh agenda kegiatan, seminar edukasi, donor darah, hingga promo layanan kesehatan di RS Awal Bros Panam.
          </p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="/">Beranda</a></li>
        <li class="current">Jadwal & Promo</li>
      </ol>
    </div>
  </nav>
</div>

<section class="departments section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-5">
      
      @forelse ($events as $event)
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="department-card h-100 bg-white shadow-sm rounded-4 overflow-hidden position-relative border">
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
                <i class="bi bi-calendar-event me-2 text-primary"></i> 
                {{ $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('d M Y - H:i') : 'Waktu menyesuaikan' }}
            </p>
            @if($event->location)
            <p class="text-muted small mb-3">
                <i class="bi bi-geo-alt me-2 text-primary"></i> {{ $event->location }}
            </p>
            @endif

            <a href="{{ route('events.show', $event->slug) }}" class="learn-more d-inline-flex align-items-center mt-3 text-primary fw-bold text-decoration-none">
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

    <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center">
            {{ $events->links('pagination::bootstrap-5') }}
        </div>
    </div>
  </div>
</section>

@endsection