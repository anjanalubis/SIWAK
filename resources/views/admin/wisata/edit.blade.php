@extends('admin.layouts.admin')

@section('content')

    <div class="container">

        <h2 class="mb-4">Edit Data Wisata</h2>

        <form action="{{ route('wisata.update', $wisata->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            {{-- Kategori --}}
            <div class="mb-3">
                <label class="form-label">Kategori</label>

                <select name="kategori_id" class="form-control">

                    @foreach($kategori as $item)

                        <option value="{{ $item->id }}" {{ $wisata->kategori_id == $item->id ? 'selected' : '' }}>

                            {{ $item->nama_kategori }}

                        </option>

                    @endforeach

                </select>
            </div>

            {{-- Kecamatan --}}
            <div class="mb-3">
                <label class="form-label">Kecamatan</label>

                <select name="kecamatan_id" class="form-control">

                    @foreach($kecamatan as $item)

                        <option value="{{ $item->id }}" {{ $wisata->kecamatan_id == $item->id ? 'selected' : '' }}>

                            {{ $item->nama_kecamatan }}

                        </option>

                    @endforeach

                </select>
            </div>

            {{-- Nama --}}
            <div class="mb-3">
                <label>Nama Wisata</label>

                <input type="text" name="nama_wisata" class="form-control" value="{{ $wisata->nama_wisata }}">
            </div>

            {{-- Deskripsi --}}
            <div class="mb-3">
                <label>Deskripsi</label>

                <textarea name="deskripsi" class="form-control" rows="5">{{ $wisata->deskripsi }}</textarea>
            </div>

            {{-- Alamat --}}
            <div class="mb-3">
                <label>Alamat</label>

                <textarea name="alamat" class="form-control" rows="3">{{ $wisata->alamat }}</textarea>
            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Latitude</label>

                    <input type="text" name="latitude" class="form-control" value="{{ $wisata->latitude }}">

                </div>

                <div class="col-md-6">

                    <label>Longitude</label>

                    <input type="text" name="longitude" class="form-control" value="{{ $wisata->longitude }}">

                </div>

            </div>

            <div class="row mt-3">

                <div class="col-md-6">

                    <label>Harga Weekday</label>

                    <input type="number" name="harga_weekday" class="form-control" value="{{ $wisata->harga_weekday }}">

                </div>

                <div class="col-md-6">

                    <label>Harga Weekend</label>

                    <input type="number" name="harga_weekend" class="form-control" value="{{ $wisata->harga_weekend }}">

                </div>

            </div>

            <div class="row mt-3">

                <div class="col-md-6">

                    <label>Jam Operasional Weekday</label>

                    <input type="text" name="jam_weekday" class="form-control" value="{{ $wisata->jam_weekday }}">

                </div>

                <div class="col-md-6">

                    <label>Jam Operasional Weekend</label>

                    <input type="text" name="jam_weekend" class="form-control" value="{{ $wisata->jam_weekend }}">

                </div>

            </div>

            {{-- Cover --}}
            <div class="mt-3">

                <label>Cover Wisata</label>

                @if($wisata->gambar_cover)

                    <div class="mb-2">

                        <img src="{{ asset('storage/' . $wisata->gambar_cover) }}" width="180" class="rounded border">

                    </div>

                @endif

                <input type="file" name="gambar_cover" class="form-control">

            </div>

            <div class="mt-4">

                <button class="btn btn-warning">
                    Update
                </button>

                <a href="{{ route('wisata.index') }}" class="btn btn-secondary">

                    Kembali

                </a>

            </div>

        </form>

    </div>

@endsection