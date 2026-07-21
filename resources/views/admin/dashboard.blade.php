@extends('admin.layouts.admin')

@section('content')
    <div class="card shadow-sm mb-4">

        <div class="card-header bg-success text-white">

            <h5 class="mb-0">
                🔍 Global Search
            </h5>

        </div>

        <div class="card-body">

            <form action="{{ route('admin.search') }}" method="GET">

                <div class="row">

                    <div class="col-md-6">

                        <input type="text" name="keyword" class="form-control" placeholder="Cari data..."
                            value="{{ $keyword ?? '' }}" required>

                    </div>

                    <div class="col-md-3">

                        <select name="filter" class="form-select">

                            <option value="semua" {{ ($filter ?? '') == 'semua' ? 'selected' : '' }}>
                                Semua
                            </option>

                            <option value="wisata" {{ ($filter ?? '') == 'wisata' ? 'selected' : '' }}>
                                Wisata
                            </option>

                            <option value="umkm" {{ ($filter ?? '') == 'umkm' ? 'selected' : '' }}>
                                UMKM
                            </option>

                            <option value="kategori" {{ ($filter ?? '') == 'kategori' ? 'selected' : '' }}>
                                Kategori
                            </option>

                            <option value="kecamatan" {{ ($filter ?? '') == 'kecamatan' ? 'selected' : '' }}>
                                Kecamatan
                            </option>
                            <option value="kontak" {{ ($filter ?? '') == 'kontak' ? 'selected' : '' }}>
                                Kontak
                            </option>

                            <option value="galeri" {{ ($filter ?? '') == 'galeri' ? 'selected' : '' }}>
                                Galeri
                            </option>

                        </select>

                    </div>

                    <div class="col-md-3">

                        <button class="btn btn-success w-100">

                            Cari

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>
    @if(isset($keyword))

        <div class="card shadow-sm mb-4">

            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    Hasil Pencarian :
                    <strong>"{{ $keyword }}"</strong>
                </h5>
            </div>

            <div class="card-body">

                {{-- ================= WISATA ================= --}}
                @if($wisata->count() > 0)

                    <h5 class="text-success mb-3">
                        📍 Wisata ({{ $wisata->count() }})
                    </h5>

                    @foreach($wisata as $item)

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">

                            <div>
                                <strong>{{ $item->nama_wisata }}</strong>
                                <br>
                                <small class="text-muted">{{ $item->alamat }}</small>
                            </div>

                            <a href="{{ route('wisata.index') }}" class="btn btn-primary btn-sm">
                                Lihat
                            </a>

                        </div>

                    @endforeach

                @endif


                {{-- ================= UMKM ================= --}}
                @if($umkm->count() > 0)

                    <hr>

                    <h5 class="text-primary mb-3">
                        🏪 UMKM ({{ $umkm->count() }})
                    </h5>

                    @foreach($umkm as $item)

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">

                            <div>
                                <strong>{{ $item->nama_umkm }}</strong>
                                <br>
                                <small class="text-muted">{{ $item->alamat }}</small>
                            </div>

                            <a href="{{ route('umkm.index') }}" class="btn btn-primary btn-sm">
                                Lihat
                            </a>

                        </div>

                    @endforeach

                @endif


                {{-- ================= KATEGORI ================= --}}
                @if($kategori->count() > 0)

                    <hr>

                    <h5 class="text-danger mb-3">
                        🏷 Kategori ({{ $kategori->count() }})
                    </h5>

                    @foreach($kategori as $item)

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">

                            <div>

                                {{ $item->nama_kategori }}

                            </div>

                            <a href="{{ route('kategori.index') }}" class="btn btn-primary btn-sm">
                                Lihat
                            </a>

                        </div>

                    @endforeach

                @endif


                {{-- ================= KECAMATAN ================= --}}
                @if($kecamatan->count() > 0)

                    <hr>

                    <h5 class="text-info mb-3">
                        🗺 Kecamatan ({{ $kecamatan->count() }})
                    </h5>

                    @foreach($kecamatan as $item)

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">

                            <div>

                                {{ $item->nama_kecamatan }}

                            </div>

                            <a href="{{ route('kecamatan.index') }}" class="btn btn-primary btn-sm">
                                Lihat
                            </a>

                        </div>

                    @endforeach

                @endif
                {{-- ----------KONTAK --}}
                @if($kontak->count() > 0)

                    <hr>

                    <h5 class="text-secondary">
                        ☎ Kontak ({{ $kontak->count() }})
                    </h5>

                    @foreach($kontak as $item)

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">

                            <div>

                                <strong>{{ ucfirst($item->jenis_kontak) }}</strong>

                                <br>

                                {{ $item->link_kontak }}

                            </div>

                            @if($item->wisata_id)

                                <a href="{{ route('kontak.index', $item->wisata_id) }}" class="btn btn-primary btn-sm">

                                    Lihat

                                </a>

                            @elseif($item->umkm_id)

                                <a href="{{ route('kontak.umkm.index', $item->umkm_id) }}" class="btn btn-primary btn-sm">

                                    Lihat

                                </a>

                            @endif

                        </div>

                    @endforeach

                @endif

                {{-- ---------GALERI --}}
                @if($galeri->count() > 0)

                    <hr>

                    <h5 class="text-dark">

                        🖼 Galeri ({{ $galeri->count() }})

                    </h5>

                    @foreach($galeri as $item)

                        <div class="d-flex justify-content-between align-items-center border rounded p-2 mb-2">

                            <div>

                                {{ $item->judul }}

                            </div>

                            @if($item->wisata_id)

                                <a href="{{ route('galeri.index', $item->wisata_id) }}" class="btn btn-primary btn-sm">

                                    Lihat

                                </a>

                            @elseif($item->umkm_id)

                                <a href="{{ route('galeri.umkm.index', $item->umkm_id) }}" class="btn btn-primary btn-sm">

                                    Lihat

                                </a>

                            @endif

                        </div>

                    @endforeach

                @endif

                @if(
                        $wisata->count() == 0 &&
                        $umkm->count() == 0 &&
                        $kategori->count() == 0 &&
                        $kecamatan->count() == 0
                    )

                    <div class="alert alert-warning text-center mb-0">

                        <strong>Tidak ada data yang ditemukan.</strong>

                    </div>

                @endif

            </div>

        </div>

    @endif

    <div class="row justify-content-center">

        <div class="col-md-6 mb-3">
            <div class="card text-bg-success shadow h-100">
                <div class="card-body py-3">
                    <h5 class="card-title mb-2">Total Kategori</h5>
                    <h2 class="fw-bold">{{ $totalKategori }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card text-bg-primary shadow h-100">
                <div class="card-body py-3">
                    <h5 class="card-title mb-2">Total Kecamatan</h5>
                    <h2 class="fw-bold">{{ $totalKecamatan }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card text-bg-warning shadow h-100">
                <div class="card-body py-3">
                    <h5 class="card-title mb-2">Total Wisata</h5>
                    <h2 class="fw-bold">{{ $totalWisata }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card text-bg-info shadow h-100">
                <div class="card-body py-3">
                    <h5 class="card-title mb-2">Total UMKM</h5>
                    <h2 class="fw-bold">{{ $totalUmkm }}</h2>
                </div>
            </div>
        </div>

    </div>

@endsection