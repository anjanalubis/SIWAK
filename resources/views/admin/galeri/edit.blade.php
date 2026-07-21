@extends('admin.layouts.admin')

@section('content')

    <div class="container">

        <h3 class="mb-4">

            Edit Galeri

            @if($galeri->wisata_id)

                Wisata

            @elseif($galeri->umkm_id)

                UMKM

            @endif

        </h3>>

        @if ($errors->any())

            <div class="alert alert-danger">

                <ul class="mb-0">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label">
                    Judul
                </label>

                <input type="text" name="judul" class="form-control" value="{{ old('judul', $galeri->judul) }}" required>

            </div>


            <div class="mb-3">

                <label class="form-label">
                    Tipe File
                </label>

                <select name="tipe" class="form-control" required>

                    <option value="foto" {{ $galeri->tipe == 'foto' ? 'selected' : '' }}>
                        Foto
                    </option>

                    <option value="video" {{ $galeri->tipe == 'video' ? 'selected' : '' }}>
                        Video
                    </option>

                </select>

            </div>


            <div class="mb-3">

                <label class="form-label">
                    File Saat Ini
                </label>

                <br>

                @if($galeri->tipe == 'foto')

                    <img src="{{ asset('storage/' . $galeri->file) }}" width="300" class="img-thumbnail">

                @else

                    <video width="350" controls>

                        <source src="{{ asset('storage/' . $galeri->file) }}" type="video/mp4">

                    </video>

                @endif

            </div>


            <div class="mb-3">

                <label class="form-label">
                    Ganti File (Opsional)
                </label>

                <input type="file" name="file" class="form-control">

                <small class="text-muted">
                    Kosongkan jika tidak ingin mengganti file.
                </small>

            </div>


            <button type="submit" class="btn btn-primary">

                Update

            </button>


            @if($galeri->wisata_id)

                <a href="{{ route('galeri.index', $galeri->wisata_id) }}" class="btn btn-secondary">

                    Kembali

                </a>


            @elseif($galeri->umkm_id)


                <a href="{{ route('galeri.umkm.index', $galeri->umkm_id) }}" class="btn btn-secondary">

                    Kembali

                </a>


            @endif
        </form>

    </div>

@endsection