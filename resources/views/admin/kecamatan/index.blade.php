@extends('admin.layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Data Kecamatan</h2>

    <a href="{{ route('kecamatan.create') }}" class="btn btn-success">
        + Tambah Kecamatan
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
            <th>Nama Kecamatan</th>
            <th width="180">Aksi</th>

        </tr>

    </thead>

    <tbody>

    @forelse($kecamatan as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->nama_kecamatan }}</td>

            <td>

                <a href="{{ route('kecamatan.edit',$item->id) }}"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('kecamatan.destroy',$item->id) }}"
                    method="POST"
                    class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus kecamatan ini?')">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

    @empty

        <tr>

            <td colspan="3" class="text-center">
                Belum ada data kecamatan.
            </td>

        </tr>

    @endforelse

    </tbody>

</table>

@endsection