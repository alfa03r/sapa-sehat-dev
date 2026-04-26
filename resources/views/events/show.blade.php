@extends('layouts.main')

@section('container')
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1 class="heading-title fw-bold">Detail Informasi</h1>
                        <p class="mb-0">
                            Informasi lengkap mengenai jadwal kegiatan, seminar, donor darah, atau promo layanan kesehatan
                            di RS Awal Bros Panam.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li><a href="{{ route('events.index') }}">Jadwal & Promo</a></li>
                    <li class="current">Detail</li>
                </ol>
            </div>
        </nav>
    </div>

    <section id="event-details" class="event-details section pt-5 mb-5">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5">

                <div class="col-lg-8">
                    <article class="bg-white p-4 p-md-5 rounded-4 shadow-sm border border-opacity-25 h-100">

                        @if ($event->thumbnail)
                            <div class="mb-4 text-center">
                                <img src="{{ asset('storage/' . $event->thumbnail) }}" alt="{{ $event->title }}"
                                    class="img-fluid rounded-4 w-100" style="max-height: 500px; object-fit: cover;">
                            </div>
                        @endif

                        <div class="mb-4 border-bottom pb-3">
                            <span
                                class="badge bg-{{ $event->category->color ?? 'primary' }} px-3 py-2 rounded-pill fs-6 mb-3 shadow-sm">
                                {{ $event->category->name }}
                            </span>
                            <h2 class="fw-bold text-dark lh-base">{{ $event->title }}</h2>
                        </div>

                        <div class="event-content lh-lg text-muted mt-4" style="text-align: justify;">
                            {!! $event->content !!}
                        </div>

                    </article>
                </div>

                <div class="col-lg-4">
                    <div class="info-card bg-white p-4 rounded-4 shadow-sm border border-primary border-top sticky-top"
                        style="top: 100px; z-index: 1;">
                        <h4 class="fw-bold mb-4 text-primary border-bottom pb-3">Ringkasan Informasi</h4>

                        <div class="d-flex align-items-start mb-4">
                            <div
                                class="icon-box bg-primary bg-opacity-10 text-primary rounded-circle px-3 py-2 me-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-calendar-event fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1 text-dark">Jadwal Pelaksanaan</h6>
                                <p class="text-muted mb-0 small">
                                    @if ($event->event_date)
                                        {{ \Carbon\Carbon::parse($event->event_date)->translatedFormat('l, d F Y') }} <br>
                                        Pukul {{ \Carbon\Carbon::parse($event->event_date)->format('H:i') }} WIB
                                    @else
                                        Menyesuaikan / Tidak Terikat Waktu
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div
                                class="icon-box bg-danger bg-opacity-10 text-danger rounded-circle px-3 py-2 me-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-geo-alt fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1 text-dark">Lokasi</h6>
                                <p class="text-muted mb-0 small">{{ $event->location ?? 'Hubungi CS / Lihat Deskripsi' }}
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div
                                class="icon-box bg-success bg-opacity-10 text-success rounded-circle px-3 py-2 me-3 d-flex align-items-center justify-content-center">
                                <i class="bi bi-cash-coin fs-4"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1 text-dark">Biaya / Harga</h6>
                                <p class="fw-bold text-success mb-0 fs-5">
                                    @if (empty($event->price) || strtolower($event->price) == 'gratis' || $event->price == 0)
                                        GRATIS
                                    @elseif(is_numeric($event->price))
                                        Rp {{ number_format($event->price, 0, ',', '.') }}
                                    @else
                                        {{ $event->price }}
                                    @endif
                                </p>
                            </div>
                        </div>

                        <hr class="my-4 text-muted opacity-25">

                        <div class="text-center mt-4">
                            <p class="small text-muted mb-3">Butuh bantuan atau ingin mendaftar?</p>
                            <a href="{{ route('contact') }}"
                                class="btn btn-primary w-100 rounded-pill py-2 fw-bold d-flex align-items-center justify-content-center gap-2">
                                <i class="bi bi-headset fs-5"></i> Hubungi Call Center
                            </a>

                            <div class="mt-3">
                                <p class="small text-muted mb-2">Bagikan informasi ini:</p>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="https://wa.me/?text={{ urlencode('Cek info kegiatan ini di RS Awal Bros Panam: ' . $event->title . ' - ' . url()->current()) }}"
                                        target="_blank" class="btn btn-success rounded-circle px-2"
                                        style="width: 40px; height:40px;">
                                        <i class="bi bi-whatsapp"></i>
                                    </a>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                        target="_blank" class="btn btn-primary rounded-circle px-2"
                                        style="width: 40px; height:40px;">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
