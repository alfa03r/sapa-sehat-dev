@extends('layouts.main')

@section('container')
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1 class="heading-title fw-bold">Jadwal & Promo Kesehatan</h1>
                        <p class="mb-0">Cari informasi kegiatan kesehatan dan promo menarik di RS Awal Bros Panam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="events-section py-5">
        <div class="container">

            <div class="row mb-5 g-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="bg-white p-4 rounded-4 shadow-sm border">
                        <form action="{{ route('events.index') }}" method="GET" class="row g-3">

                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-text bg-transparent border-end-0 text-muted">
                                        <i class="bi bi-search"></i>
                                    </span>
                                    <input type="text" name="search" class="form-control border-start-0 ps-0"
                                        placeholder="Cari judul kegiatan..." value="{{ request('search') }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <select name="category" class="form-select" onchange="this.form.submit()">
                                    <option value="">Semua Kategori</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->slug }}"
                                            {{ request('category') == $cat->slug ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary w-100 rounded-pill fw-bold">
                                    Cari Sekarang
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            @if (request('search') || request('category'))
                <div class="text-center mb-4">
                    <p class="text-muted">
                        Menampilkan hasil untuk:
                        <strong>"{{ request('search') ?? 'Semua' }}"</strong>
                        di kategori
                        <strong>"{{ $categories->where('slug', request('category'))->first()->name ?? 'Semua' }}"</strong>
                        <a href="{{ route('events.index') }}" class="text-danger ms-2 text-decoration-none small">
                            <i class="bi bi-x-circle"></i> Reset
                        </a>
                    </p>
                </div>
            @endif

            <div class="row g-4">
                @forelse ($events as $event)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="department-card h-100 bg-white shadow-sm rounded-4 overflow-hidden border">
                            <div class="position-relative">
                                <img src="{{ $event->thumbnail ? asset('storage/' . $event->thumbnail) : asset('assets/img/default.webp') }}"
                                    class="img-fluid w-100" style="height: 220px; object-fit: cover;">
                                <span
                                    class="badge bg-{{ $event->category->color }} position-absolute top-0 end-0 m-3 shadow">
                                    {{ $event->category->name }}
                                </span>
                            </div>
                            <div class="p-4">
                                <h5 class="fw-bold text-dark">{{ Str::limit($event->title, 45) }}</h5>
                                <div class="small text-muted mb-3">
                                    <i class="bi bi-calendar3 text-primary me-2"></i>
                                    {{ $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('d M Y') : 'Segera' }}
                                </div>
                                <a href="{{ route('events.show', $event->slug) }}"
                                    class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-bold">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <i class="bi bi-calendar-x text-muted opacity-25 mb-4 d-block" style="font-size: 8rem;"></i>

                        <h4 class="text-muted fw-bold">Maaf, kegiatan tidak ditemukan.</h4>
                        <p class="text-muted">Coba gunakan kata kunci pencarian lain atau pilih kategori yang berbeda.</p>

                        @if (request('search') || request('category'))
                            <a href="{{ route('events.index') }}" class="btn btn-primary rounded-pill mt-3 px-4">
                                <i class="bi bi-arrow-counterclockwise me-2"></i> Tampilkan Semua Kegiatan
                            </a>
                        @endif
                    </div>
                @endforelse
            </div>

            <div class="d-flex justify-content-center mt-5">
                {{ $events->links() }}
            </div>

        </div>
    </section>
@endsection
