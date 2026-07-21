@extends('admin.layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Data Kategori</h2>

    <a href="{{ route('kategori.create') }}" class="btn btn-success">
        + Tambah Kategori
    </a>

</div>

@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif

<table class="table table-bordered table-hover">

    <thead class="table-success">

        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Tipe</th>
            <th width="180">Aksi</th>
        </tr>

    </thead>

    <tbody>

    @forelse($kategori as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->nama_kategori }}</td>

            <td>{{ ucfirst($item->tipe) }}</td>

            <td>

                <a href="{{ route('kategori.edit',$item->id) }}"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('kategori.destroy',$item->id) }}"
                    method="POST"
                    class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus kategori ini?')">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

    @empty

        <tr>
            <td colspan="4" class="text-center">
                Belum ada data kategori.
            </td>
        </tr>

    @endforelse

    </tbody>

</table>

@endsection