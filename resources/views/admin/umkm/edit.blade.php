@extends('admin.layouts.admin')


@section('content')

    <h3>Edit UMKM</h3>


    <form action="{{ route('umkm.update', $umkm->id) }}" method="POST">

        @csrf

        @method('PUT')


        <div class="mb-3">

            <label>Nama UMKM</label>

            <input type="text" name="nama_umkm" class="form-control" value="{{ $umkm->nama_umkm }}">

        </div>



        <div class="mb-3">

            <label>Deskripsi</label>

            <textarea name="deskripsi" class="form-control">{{ $umkm->deskripsi }}</textarea>

        </div>



        <div class="mb-3">

            <label>Alamat</label>

            <input type="text" name="alamat" class="form-control" value="{{ $umkm->alamat }}">

        </div>



        <button class="btn btn-success">
            Simpan
        </button>


        <a href="{{ route('umkm.index') }}" class="btn btn-secondary">

            Kembali

        </a>


    </form>


@endsection