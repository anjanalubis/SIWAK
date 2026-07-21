@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <section class="hero">

        <div class="container h-100">

            <div class="row h-100 align-items-center">

                <div class="col-lg-7">

                    <h1 class="display-3 fw-bold text-white">
                        Jelajahi
                        <br>
                        Wisata & UMKM
                        <br>
                        Kabupaten Kebumen
                    </h1>

                    <p class="lead text-white mt-4">
                        Temukan destinasi wisata, UMKM lokal, serta lokasi terbaik
                        di Kabupaten Kebumen melalui satu platform.
                    </p>

                    <!-- Search -->
                    <div class="card shadow-lg border-0 mt-5">

                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-9">

                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Cari wisata atau UMKM...">

                                </div>

                                <div class="col-md-3">

                                    <button class="btn btn-success btn-lg w-100">
                                        Cari
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WISATA -->
    <section id="wisata"class="py-5 section-wisata">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-success px-3 py-2 rounded-pill">
                    DESTINASI TERBAIK
                </span>
                <h2 class="fw-bold mt-3">
                    Wisata Unggulan
                </h2>
                <p class="text-muted">
                    Jelajahi destinasi wisata favorit di Kabupaten Kebumen.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card wisata-card border-0">
                        <img src="{{ asset('images/menganti.jpg') }}" class="card-img-top">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">
                                Pantai
                            </span>
                            <h4 class="fw-bold">
                                Pantai Menganti
                            </h4>
                            <p class="text-muted">
                                📍 Ayah, Kebumen
                            </p>
                            <p>
                                Pantai eksotis dengan pasir putih,
                                tebing tinggi, dan panorama laut
                                Samudera Hindia.
                            </p>
                            <a href="#" class="btn btn-success rounded-pill px-4">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card wisata-card border-0">
                        <img src="{{ asset('images/menganti.jpg') }}" class="card-img-top">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">
                                Pantai
                            </span>
                            <h4 class="fw-bold">
                                Pantai Menganti
                            </h4>
                            <p class="text-muted">
                                📍 Ayah, Kebumen
                            </p>
                            <p>
                                Pantai eksotis dengan pasir putih,
                                tebing tinggi, dan panorama laut
                                Samudera Hindia.
                            </p>
                            <a href="#" class="btn btn-success rounded-pill px-4">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="card wisata-card border-0">

                        <img src="{{ asset('images/menganti.jpg') }}" class="card-img-top">

                        <div class="card-body">

                            <span class="badge bg-success mb-2">
                                Pantai
                            </span>

                            <h4 class="fw-bold">
                                Pantai Menganti
                            </h4>

                            <p class="text-muted">
                                📍 Ayah, Kebumen
                            </p>

                            <p>
                                Pantai eksotis dengan pasir putih,
                                tebing tinggi, dan panorama laut
                                Samudera Hindia.
                            </p>

                            <a href="#" class="btn btn-success rounded-pill px-4">
                                Lihat Detail
                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="card wisata-card border-0">
                        <img src="{{ asset('images/menganti.jpg') }}" class="card-img-top">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">
                                Pantai
                            </span>
                            <h4 class="fw-bold">
                                Pantai Menganti
                            </h4>
                            <p class="text-muted">
                                📍 Ayah, Kebumen
                            </p>
                            <p>
                                Pantai eksotis dengan pasir putih,
                                tebing tinggi, dan panorama laut
                                Samudera Hindia.
                            </p>
                            <a href="#" class="btn btn-success rounded-pill px-4">
                                Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="{{ url('/wisata') }}" class="btn btn-lihat-semua">
                    Lihat Semua Wisata →
                </a>
            </div>
        </div>
        </div>
    </section>

    <!-- UMKM -->
    <section id="umkm" class="py-5 bg-white">

        <div class="container">

            <div class="text-center mb-5">

                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">
                    PRODUK LOKAL
                </span>

                <h2 class="fw-bold mt-3">
                    UMKM Unggulan
                </h2>

                <p class="text-muted">
                    Temukan produk terbaik hasil karya masyarakat Kabupaten Kebumen.
                </p>

            </div>

            <div class="row g-4">
                <div class="col-lg-6">

                    <div class="card umkm-card">

                        <img src="{{ asset('images/batik.jpg') }}" class="card-img-top">

                        <div class="card-body">

                            <div class="d-flex justify-content-between">

                                <span class="badge bg-success">
                                    Fashion
                                </span>

                                <small class="text-warning">
                                    ⭐ 4.9
                                </small>

                            </div>

                            <h4 class="mt-3 fw-bold">
                                Batik Kebumen
                            </h4>

                            <p class="text-muted">
                                📍 Kebumen
                            </p>

                            <p>
                                Batik khas Kebumen dengan motif tradisional berkualitas.
                            </p>

                            <a href="#" class="btn btn-warning rounded-pill">
                                Lihat Produk
                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="card umkm-card">

                        <img src="{{ asset('images/batik.jpg') }}" class="card-img-top">

                        <div class="card-body">

                            <div class="d-flex justify-content-between">

                                <span class="badge bg-success">
                                    Fashion
                                </span>

                                <small class="text-warning">
                                    ⭐ 4.9
                                </small>

                            </div>

                            <h4 class="mt-3 fw-bold">
                                Batik Kebumen
                            </h4>

                            <p class="text-muted">
                                📍 Kebumen
                            </p>

                            <p>
                                Batik khas Kebumen dengan motif tradisional berkualitas.
                            </p>

                            <a href="#" class="btn btn-warning rounded-pill">
                                Lihat Produk
                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="card umkm-card">

                        <img src="{{ asset('images/batik.jpg') }}" class="card-img-top">

                        <div class="card-body">

                            <div class="d-flex justify-content-between">

                                <span class="badge bg-success">
                                    Fashion
                                </span>

                                <small class="text-warning">
                                    ⭐ 4.9
                                </small>

                            </div>

                            <h4 class="mt-3 fw-bold">
                                Batik Kebumen
                            </h4>

                            <p class="text-muted">
                                📍 Kebumen
                            </p>

                            <p>
                                Batik khas Kebumen dengan motif tradisional berkualitas.
                            </p>

                            <a href="#" class="btn btn-warning rounded-pill">
                                Lihat Produk
                            </a>

                        </div>

                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="card umkm-card">

                        <img src="{{ asset('images/batik.jpg') }}" class="card-img-top">

                        <div class="card-body">

                            <div class="d-flex justify-content-between">

                                <span class="badge bg-success">
                                    Fashion
                                </span>

                                <small class="text-warning">
                                    ⭐ 4.9
                                </small>

                            </div>

                            <h4 class="mt-3 fw-bold">
                                Batik Kebumen
                            </h4>

                            <p class="text-muted">
                                📍 Kebumen
                            </p>

                            <p>
                                Batik khas Kebumen dengan motif tradisional berkualitas.
                            </p>

                            <a href="#" class="btn btn-warning rounded-pill">
                                Lihat Produk
                            </a>

                        </div>

                    </div>

                </div>
                <div class="text-center mt-5">

                    <a href="{{ url('/umkm') }}" class="btn btn-warning btn-lg rounded-pill px-5">

                        Lihat Semua UMKM →

                    </a>

                </div>
            </div>
        </div>
    </section>

    <!-- PETA -->
  <section id="peta" class="map-section py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-success px-4 py-2 rounded-pill">
                PETA DIGITAL
            </span>

            <h2 class="fw-bold mt-3">
                Lokasi Wisata & UMKM Kabupaten Kebumen
            </h2>

            <p class="text-light">
                Temukan lokasi wisata dan UMKM melalui peta interaktif.
            </p>

        </div>

        <div id="map"></div>

    </div>

</section>
<!-- TENTANG -->
<section id="tentang" class="about-section">

    <div class="overlay"></div>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8 text-center">

                <span class="badge-about">
                    Tentang SIWAK
                </span>

                <h2 class="mt-4">
                    Sistem Informasi Wisata dan UMKM Kabupaten Kebumen
                </h2>

                <p class="mt-4">

                    SIWAK merupakan website yang menyediakan informasi
                    destinasi wisata dan UMKM Kabupaten Kebumen
                    dalam satu platform yang mudah diakses oleh
                    masyarakat maupun wisatawan.

                </p>

                <div class="feature-about mt-5">

                    <div>🌴 Wisata Lengkap</div>

                    <div>🏪 UMKM Lokal</div>

                    <div>🗺 Peta Digital</div>

                    <div>📱 Responsive</div>

                </div>

                <a href="/wisata" class="btn-about mt-5">
                    Jelajahi Sekarang →
                </a>

            </div>

        </div>

    </div>

</section>



@endsection