@extends('admin.layouts.admin')

@section('content')

<h2 class="mb-4">Tambah Kecamatan</h2>

<form action="{{ route('kecamatan.store') }}" method="POST">

    @csrf

    <div class="mb-3">

        <label>Nama Kecamatan</label>

        <input
            type="text"
            name="nama_kecamatan"
            class="form-control"
            required>

    </div>

    <button class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('kecamatan.index') }}"
        class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection