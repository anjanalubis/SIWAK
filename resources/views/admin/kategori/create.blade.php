@extends('admin.layouts.admin')

@section('content')

<h2 class="mb-4">Tambah Kategori</h2>

<form action="{{ route('kategori.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Nama Kategori</label>
        <input type="text"
               name="nama_kategori"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label>Tipe</label>

        <select name="tipe" class="form-control">

            <option value="wisata">Wisata</option>

            <option value="umkm">UMKM</option>

        </select>

    </div>

    <button class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection