@extends('admin.layouts.admin')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Data Wisata</h2>

        <a href="{{ route('wisata.create') }}" class="btn btn-success">
            + Tambah Wisata
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
                <th width="130">Cover</th>
                <th>Nama Wisata</th>
                <th>Kategori</th>
                <th>Kecamatan</th>
                <th>Harga Weekday</th>
                <th>Harga Weekend</th>
                <th>Jam Weekday</th>
                <th>Jam Weekend</th>
                <th width="230">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @forelse($wisata as $item)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>

                        @if($item->gambar_cover)

                            <img src="{{ asset('storage/' . $item->gambar_cover) }}" width="120" class="img-thumbnail">

                        @else

                            <span class="text-danger">
                                Belum ada gambar
                            </span>

                        @endif

                    </td>

                    <td>{{ $item->nama_wisata }}</td>

                    <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>

                    <td>{{ $item->kecamatan->nama_kecamatan ?? '-' }}</td>

                    <td>

                        @if($item->harga_weekday)

                            Rp {{ number_format($item->harga_weekday, 0, ',', '.') }}

                        @else

                            -

                        @endif

                    </td>

                    <td>

                        @if($item->harga_weekend)

                            Rp {{ number_format($item->harga_weekend, 0, ',', '.') }}

                        @else

                            -

                        @endif

                    </td>

                    <td>{{ $item->jam_weekday ?? '-' }}</td>

                    <td>{{ $item->jam_weekend ?? '-' }}</td>

                    <td>
                        <div class="d-flex gap-2 flex-nowrap">

                            <a href="{{ route('wisata.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="{{ route('galeri.index', $item->id) }}" class="btn btn-info btn-sm">
                                Galeri
                            </a>

                            <a href="{{ route('kontak.index', $item->id) }}" class="btn btn-primary btn-sm">
                                Kontak
                            </a>

                            <form action="{{ route('wisata.destroy', $item->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>

                            </form>

                        </div>
                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="10" class="text-center">

                        Belum ada data wisata.

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

@endsection