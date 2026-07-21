@extends('admin.layouts.admin')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Data UMKM</h2>

        <a href="{{ route('umkm.create') }}" class="btn btn-success">
            + Tambah UMKM
        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    <table class="table table-bordered table-hover align-middle">

        <thead class="table-success">

            <tr>

                <th width="50">No</th>
                <th width="120">Cover</th>
                <th>Nama UMKM</th>
                <th>Pemilik</th>
                <th>Kategori</th>
                <th>Kecamatan</th>
                <th>Harga Produk</th>
                <th>Jam Weekday</th>
                <th>Jam Weekend</th>
                <th width="250">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @forelse($umkm as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>

                        @if($item->gambar_cover)

                            <img src="{{ asset('storage/' . $item->gambar_cover) }}" width="110" class="img-thumbnail">

                        @else

                            <span class="text-danger">
                                Belum ada gambar
                            </span>

                        @endif

                    </td>

                    <td>{{ $item->nama_umkm }}</td>

                    <td>{{ $item->pemilik }}</td>

                    <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>

                    <td>{{ $item->kecamatan->nama_kecamatan ?? '-' }}</td>

                    <td>

                        @if($item->harga_mulai)

                            Rp {{ number_format($item->harga_mulai, 0, ',', '.') }}

                        @else

                            -

                        @endif

                    </td>

                    <td>{{ $item->jam_weekday ?? '-' }}</td>

                    <td>{{ $item->jam_weekend ?? '-' }}</td>

                    <td>

                        <a href="{{ route('umkm.edit', $item->id) }}" class="btn btn-warning btn-sm">

                            Edit

                        </a>

                        <a href="{{ route('galeri.umkm.index', $item->id) }}" class="btn btn-info btn-sm">

                            Galeri

                        </a>

                        <a href="{{ route('kontak.umkm.index', $item->id) }}" class="btn btn-primary btn-sm">

                            Kontak

                        </a>

                        <form action="{{ route('umkm.destroy', $item->id) }}" method="POST" class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus UMKM ini?')">

                                Hapus

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="10" class="text-center">

                        Belum ada data UMKM.

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

@endsection