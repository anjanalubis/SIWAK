@extends('admin.layouts.admin')

@section('content')

<h2 class="mb-4">Edit Kategori</h2>

<form action="{{ route('kategori.update',$kategori->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Nama Kategori</label>

        <input type="text"
               name="nama_kategori"
               class="form-control"
               value="{{ $kategori->nama_kategori }}"
               required>

    </div>

    <div class="mb-3">

        <label>Tipe</label>

        <select name="tipe" class="form-control">

            <option value="wisata"
                {{ $kategori->tipe=='wisata' ? 'selected':'' }}>
                Wisata
            </option>

            <option value="umkm"
                {{ $kategori->tipe=='umkm' ? 'selected':'' }}>
                UMKM
            </option>

        </select>

    </div>

    <button class="btn btn-primary">
        Update
    </button>

    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection