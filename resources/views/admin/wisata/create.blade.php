@extends('admin.layouts.admin')

@section('content')

    <div class="container">

        <h2 class="mb-4">Tambah Data Wisata</h2>

        <form action="{{ route('wisata.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            {{-- Kategori --}}
            <div class="mb-3">
                <label class="form-label">Kategori</label>

                <select name="kategori_id" class="form-control" required>

                    <option value="">-- Pilih Kategori --</option>

                    @foreach($kategori as $item)

                        <option value="{{ $item->id }}">
                            {{ $item->nama_kategori }}
                        </option>

                    @endforeach

                </select>
            </div>

            {{-- Kecamatan --}}
            <div class="mb-3">
                <label class="form-label">Kecamatan</label>

                <select name="kecamatan_id" class="form-control" required>

                    <option value="">-- Pilih Kecamatan --</option>

                    @foreach($kecamatan as $item)

                        <option value="{{ $item->id }}">
                            {{ $item->nama_kecamatan }}
                        </option>

                    @endforeach

                </select>
            </div>

            {{-- Nama Wisata --}}
            <div class="mb-3">
                <label class="form-label">Nama Wisata</label>
                <input type="text" name="nama_wisata" class="form-control" required>
            </div>

            {{-- Deskripsi --}}
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="5"></textarea>
            </div>

            {{-- Alamat --}}
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" rows="3"></textarea>
            </div>

            {{-- Latitude Longitude --}}
            <div class="row">

                <div class="col-md-6">

                    <label>Latitude</label>

                    <input type="text" name="latitude" class="form-control">

                </div>

                <div class="col-md-6">

                    <label>Longitude</label>

                    <input type="text" name="longitude" class="form-control">

                </div>

            </div>

            {{-- Harga Weekday & Weekend --}}
            <div class="row mt-3">

                <div class="col-md-6">

                    <label class="form-label">
                        Harga Weekday
                    </label>

                    <input type="number" name="harga_weekday" class="form-control" placeholder="Contoh : 10000">

                </div>

                <div class="col-md-6">

                    <label class="form-label">
                        Harga Weekend
                    </label>

                    <input type="number" name="harga_weekend" class="form-control" placeholder="Contoh : 15000">

                </div>

            </div>

            {{-- Jam Operasional --}}
            <div class="row mt-3">

                <div class="col-md-6">

                    <label class="form-label">
                        Jam Operasional Weekday
                    </label>

                    <input type="text" name="jam_weekday" class="form-control" placeholder="08.00 - 17.00">

                </div>

                <div class="col-md-6">

                    <label class="form-label">
                        Jam Operasional Weekend
                    </label>

                    <input type="text" name="jam_weekend" class="form-control" placeholder="07.00 - 18.00">

                </div>

            </div>

            {{-- Gambar --}}
            <div class="mt-3">

                <label>Gambar Cover</label>

                <input type="file" name="gambar_cover" class="form-control">

            </div>

            <div class="mt-4">

                <button class="btn btn-success">
                    Simpan
                </button>

                <a href="{{ route('wisata.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </div>

        </form>

    </div>

@endsection