@extends('admin.layouts.admin')

@section('content')

<div class="container">

    <h3 class="mb-4">

        Tambah Kontak

        @if(isset($wisata))
            - {{ $wisata->nama_wisata }}
        @elseif(isset($umkm))
            - {{ $umkm->nama_umkm }}
        @endif

    </h3>

    @if($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('kontak.store') }}" method="POST">

        @csrf


        @if(isset($wisata))

            <input
                type="hidden"
                name="wisata_id"
                value="{{ $wisata->id }}">

        @endif


        @if(isset($umkm))

            <input
                type="hidden"
                name="umkm_id"
                value="{{ $umkm->id }}">

        @endif



        <div class="mb-3">

            <label class="form-label">

                Jenis Kontak

            </label>

            <select
                name="jenis_kontak"
                class="form-control"
                required>

                <option value="">-- Pilih Jenis Kontak --</option>

                <option value="WhatsApp">WhatsApp</option>

                <option value="Instagram">Instagram</option>

                <option value="Facebook">Facebook</option>

                <option value="TikTok">TikTok</option>

                <option value="Website">Website</option>

                <option value="Email">Email</option>

                <option value="YouTube">YouTube</option>

            </select>

        </div>



        <div class="mb-3">

            <label class="form-label">

                Link / Nomor Kontak

            </label>

            <input
                type="text"
                name="link_kontak"
                class="form-control"
                placeholder="Contoh: https://instagram.com/nama_umkm atau 628123456789"
                required>

        </div>



        <button
            type="submit"
            class="btn btn-success">

            Simpan

        </button>



        @if(isset($wisata))

            <a href="{{ route('kontak.index',$wisata->id) }}"
                class="btn btn-secondary">

                Kembali

            </a>

        @elseif(isset($umkm))

            <a href="{{ route('kontak.umkm.index',$umkm->id) }}"
                class="btn btn-secondary">

                Kembali

            </a>

        @endif

    </form>

</div>

@endsection