@extends('layouts.main')

@section('container')
    <section id="hero" class="hero section overflow-hidden mt-5 pt-5">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="trust-badges mb-4 d-flex flex-wrap gap-2" data-aos="fade-right" data-aos-delay="200">
                            <div class="badge-item bg-light text-dark px-3 py-1 rounded-pill border">
                                <i class="bi bi-shield-check text-success"></i>
                                <span class="small fw-bold">Terakreditasi KARS</span>
                            </div>
                            <div class="badge-item bg-light text-dark px-3 py-1 rounded-pill border">
                                <i class="bi bi-clock text-danger"></i>
                                <span class="small fw-bold">IGD 24 Jam</span>
                            </div>
                        </div>

                        <h1 data-aos="fade-right" data-aos-delay="300" class="display-4 fw-bold">
                            Berobat? <span class="text-primary">#diawalbrosaja</span>
                        </h1>

                        <p class="hero-description lead text-muted my-4" data-aos="fade-right" data-aos-delay="400">
                            Dapatkan kemudahan akses layanan kesehatan, jadwal dokter, kegiatan edukasi, hingga promo
                            kesehatan terbaru langsung dari genggaman Anda.
                        </p>

                        <div class="d-flex flex-column gap-3 mt-4" data-aos="fade-right" data-aos-delay="500">
                            <p class="fw-bold mb-0 text-dark">Download Aplikasi Halo Awal Bros / StarDok</p>
                            <div class="d-flex flex-column flex-sm-row gap-3">
                                <a href="#"
                                    class="btn btn-dark d-flex align-items-center gap-2 rounded-3 px-3 py-2 justify-content-center">
                                    <i class="bi bi-google-play fs-4"></i>
                                    <div class="text-start" style="line-height: 1.2;">
                                        <small class="d-block text-white-50" style="font-size: 10px;">GET IT ON</small>
                                        <span class="fw-bold">Google Play</span>
                                    </div>
                                </a>
                                <a href="#"
                                    class="btn btn-dark d-flex align-items-center gap-2 rounded-3 px-3 py-2 justify-content-center">
                                    <i class="bi bi-apple fs-4"></i>
                                    <div class="text-start" style="line-height: 1.2;">
                                        <small class="d-block text-white-50" style="font-size: 10px;">Download on
                                            the</small>
                                        <span class="fw-bold">App Store</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                        <div class="position-relative d-block w-100 text-center">
                            <img src="{{ asset('assets/img/health/staff-10.webp') }}" alt="Berobat di Awal Bros"
                                class="img-fluid rounded-4 shadow-lg border-4 border-white">

                            <div class="shadow-lg bg-white p-3 rounded-4 position-absolute start-0 ms-2 ms-md-4"
                                style="bottom: 5%; z-index: 10; max-width: 260px;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-success bg-opacity-10 text-success p-2 rounded-circle d-flex align-items-center justify-content-center"
                                        style="width: 45px; height: 45px;">
                                        <i class="bi bi-check-circle-fill fs-5"></i>
                                    </div>
                                    <div class="text-start">
                                        <h6 class="fw-bold mb-0 text-dark" style="font-size: 13px;">Melayani Pasien BPJS
                                        </h6>
                                        <small class="text-muted" style="font-size: 11px;">Terintegrasi Mobile JKN</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quick-actions py-5 bg-primary text-white">
        <div class="container" data-aos="fade-up">
            <div class="row g-4 text-center justify-content-center">
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="#"
                        class="text-white text-decoration-none p-4 d-block rounded-4 border border-white border-opacity-25 hover-bg-white hover-text-primary transition-all">
                        <i class="bi bi-search fs-1 mb-3 d-block"></i>
                        <h5 class="fw-bold">Temukan Dokter</h5>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="#"
                        class="text-white text-decoration-none p-4 d-block rounded-4 border border-white border-opacity-25 hover-bg-white hover-text-primary transition-all bg-white text-primary shadow">
                        <i class="bi bi-calendar-check fs-1 mb-3 d-block"></i>
                        <h5 class="fw-bold">Buat Janji Temu</h5>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="#"
                        class="text-white text-decoration-none p-4 d-block rounded-4 border border-white border-opacity-25 hover-bg-white hover-text-primary transition-all">
                        <i class="bi bi-heart-pulse fs-1 mb-3 d-block"></i>
                        <h5 class="fw-bold">Periksa Kesehatan</h5>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="departments-tabs" class="departments-tabs section pt-5 mt-5">
        <div class="container section-title text-center" data-aos="fade-up">
            <h2>Layanan Unggulan</h2>
            <p>Kami menghadirkan Pusat Layanan Terpadu yang menangani berbagai masalah kesehatan dengan spesialis
                multidisiplin.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="medical-specialties">
                <div class="row">
                    <div class="col-12">
                        <div class="specialty-navigation">
                            <div class="nav nav-pills d-flex flex-column flex-md-row justify-content-center gap-2 mb-5"
                                id="specialty-tabs" role="tablist">
                                <a class="nav-link department-tab active px-4 py-2 rounded-pill text-center" id="igd-tab"
                                    data-bs-toggle="pill" href="#tab-igd" role="tab">Gawat Darurat</a>
                                <a class="nav-link department-tab px-4 py-2 rounded-pill text-center" id="jantung-tab"
                                    data-bs-toggle="pill" href="#tab-jantung" role="tab">Jantung & Vaskular</a>
                                <a class="nav-link department-tab px-4 py-2 rounded-pill text-center" id="saraf-tab"
                                    data-bs-toggle="pill" href="#tab-saraf" role="tab">Pusat Saraf & Stroke</a>
                                <a class="nav-link department-tab px-4 py-2 rounded-pill text-center" id="mata-tab"
                                    data-bs-toggle="pill" href="#tab-mata" role="tab">Pusat Layanan Mata</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="tab-content department-content" id="specialty-content">

                            <div class="tab-pane fade show active" id="tab-igd" role="tabpanel">
                                <div class="row department-layout align-items-center">
                                    <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0 text-center text-lg-end">
                                        <img src="{{ asset('assets/img/health/emergency-1.webp') }}" alt="IGD"
                                            class="img-fluid rounded-4 shadow">
                                    </div>
                                    <div class="col-lg-7 order-2 order-lg-1 pe-lg-5 text-center text-lg-start">
                                        <h3 class="fw-bold mb-3 text-primary">Instalasi Gawat Darurat (IGD) 24 Jam</h3>
                                        <p class="text-muted">Siap menangani pasien kritis, trauma, kecelakaan, serangan
                                            jantung, hingga layanan Hospital at Home. IGD kami beroperasi 24 jam penuh
                                            dengan tenaga medis profesional dan respon cepat ambulans.</p>
                                        <ul class="list-unstyled mt-4 text-muted text-start d-inline-block d-lg-block">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>
                                                Dokter Umum & Spesialis Siaga 24 Jam</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>
                                                Transfer & Rujukan Antar Rumah Sakit</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>
                                                Penanganan Serangan Jantung & Trauma Kecelakaan</li>
                                        </ul>
                                        <div class="mt-3">
                                            <a href="tel:1500088" class="btn btn-danger px-4 rounded-pill fw-bold"><i
                                                    class="bi bi-telephone-fill me-2"></i> Call Center Darurat: 15000
                                                88</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-jantung" role="tabpanel">
                                <div class="row department-layout align-items-center">
                                    <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0 text-center text-lg-end">
                                        <img src="{{ asset('assets/img/health/cardiology-3.webp') }}" alt="Cardiology"
                                            class="img-fluid rounded-4 shadow">
                                    </div>
                                    <div class="col-lg-7 order-2 order-lg-1 pe-lg-5 text-center text-lg-start">
                                        <h3 class="fw-bold mb-3 text-primary">Pusat Layanan Jantung Terpadu</h3>
                                        <p class="text-muted">Menangani berbagai masalah jantung dari konsultasi hingga
                                            bedah jantung dewasa dan anak. Didukung oleh fasilitas Cath Lab (Kateterisasi
                                            Jantung) untuk intervensi jantung non-bedah.</p>
                                        <ul class="list-unstyled mt-4 text-muted text-start d-inline-block d-lg-block">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>
                                                Bedah Jantung Minimal Invasif (MICS)</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>
                                                Echocardiography 2D/3D dan TEE</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>
                                                Layanan Heart Failure Kronis</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-saraf" role="tabpanel">
                                <div class="row department-layout align-items-center">
                                    <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0 text-center text-lg-end">
                                        <img src="{{ asset('assets/img/health/neurology-2.webp') }}" alt="Saraf"
                                            class="img-fluid rounded-4 shadow">
                                    </div>
                                    <div class="col-lg-7 order-2 order-lg-1 pe-lg-5 text-center text-lg-start">
                                        <h3 class="fw-bold mb-3 text-primary">Pusat Saraf & Stroke</h3>
                                        <p class="text-muted">Menyediakan layanan saraf terpadu yang mencakup pengobatan
                                            berbagai gangguan saraf, stroke, nyeri kronis, dan gangguan daya ingat dengan
                                            dukungan tim medis multidisiplin.</p>
                                        <ul class="list-unstyled mt-4 text-muted text-start d-inline-block d-lg-block">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>
                                                Stroke Center untuk penanganan stroke akut</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>
                                                Klinik Memori (Demensia & Alzheimer)</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>
                                                Pain Intervention Center (Terapi Nyeri Kronis)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-mata" role="tabpanel">
                                <div class="row department-layout align-items-center">
                                    <div class="col-lg-5 order-1 order-lg-2 mb-4 mb-lg-0 text-center text-lg-end">
                                        <img src="{{ asset('assets/img/health/pediatrics-4.webp') }}" alt="Eye Center"
                                            class="img-fluid rounded-4 shadow">
                                    </div>
                                    <div class="col-lg-7 order-2 order-lg-1 pe-lg-5 text-center text-lg-start">
                                        <h3 class="fw-bold mb-3 text-primary">Eye Center (Pusat Layanan Mata)</h3>
                                        <p class="text-muted">Layanan kesehatan mata lengkap dan komprehensif, ditangani
                                            oleh Dokter Spesialis Mata berpengalaman menggunakan teknologi diagnostik dan
                                            bedah terkini.</p>
                                        <ul class="list-unstyled mt-4 text-muted text-start d-inline-block d-lg-block">
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>
                                                Operasi Katarak (Phacoemulsifikasi)</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>
                                                Penanganan Glaukoma & Retina</li>
                                            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>
                                                Pediatric Oftalmologi & Mata Juling Anak</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kegiatan" class="departments section light-background mt-5 py-5">
        <div class="container section-title text-center" data-aos="fade-up">
            <h2>Berita, Jadwal & Promo</h2>
            <p>Dapatkan informasi kegiatan kesehatan, seminar awam, donor darah, hingga promo Medical Check Up (MCU)
                terbaru.</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4 g-lg-5 justify-content-center">

                @forelse ($latest as $event)
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div
                            class="department-card h-100 bg-white shadow-sm rounded-4 overflow-hidden position-relative border border-opacity-25 d-flex flex-column">

                            <div class="department-image">
                                @if ($event->thumbnail)
                                    <img src="{{ asset('storage/' . $event->thumbnail) }}" alt="{{ $event->title }}"
                                        class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('assets/img/health/consultation-4.webp') }}" alt="Default"
                                        class="img-fluid w-100" style="height: 250px; object-fit: cover;">
                                @endif
                            </div>

                            <div class="department-content p-4 d-flex flex-column grow">
                                <div class="mb-2">
                                    <span
                                        class="badge bg-{{ $event->category->color }} mb-2 fs-6 px-3 py-2 rounded-pill shadow-sm">{{ $event->category->name }}</span>
                                </div>
                                <h4 class="fw-bold mb-3 text-dark">{{ Str::limit($event->title, 50) }}</h4>

                                <div class="d-flex align-items-start text-muted small mb-2 mt-auto">
                                    <i class="bi bi-calendar-event me-2 text-primary fs-5 mt-1"></i>
                                    <span
                                        class="lh-base">{{ $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('d M Y - H:i') : 'Menyesuaikan' }}</span>
                                </div>

                                @if ($event->location)
                                    <div class="d-flex align-items-start text-muted small mb-3">
                                        <i class="bi bi-geo-alt me-2 text-danger fs-5 mt-1"></i>
                                        <span class="lh-base">{{ $event->location }}</span>
                                    </div>
                                @endif

                                <hr class="text-muted opacity-25 w-100">

                                <a href="{{ route('events.show', $event->slug) }}"
                                    class="learn-more d-inline-flex align-items-center text-primary fw-bold text-decoration-none hover-secondary">
                                    <span class="me-2">Lihat Detail Lengkap</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <i class="bi bi-journal-x display-1 text-muted opacity-25 mb-3 d-block"></i>
                        <p class="text-muted fs-5">Belum ada informasi kegiatan atau promo terbaru.</p>
                    </div>
                @endforelse

            </div>

            @if ($latest->count() > 0)
                <div class="text-center mt-5" data-aos="fade-up">
                    <a href="{{ route('events.index') }}"
                        class="btn btn-outline-primary px-4 px-md-5 py-2 rounded-pill fw-bold">Lihat Semua Informasi <i
                            class="bi bi-arrow-right ms-2"></i></a>
                </div>
            @endif
        </div>
    </section>
@endsection
