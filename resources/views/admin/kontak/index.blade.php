@extends('admin.layouts.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        @if(isset($wisata))

            <h2>Kontak Wisata</h2>

            <h5 class="text-success">
                {{ $wisata->nama_wisata }}
            </h5>

        @elseif(isset($umkm))

            <h2>Kontak UMKM</h2>

            <h5 class="text-success">
                {{ $umkm->nama_umkm }}
            </h5>

        @endif

    </div>


    <div>

        @if(isset($wisata))

            <a href="{{ route('kontak.create',$wisata->id) }}"
                class="btn btn-success">

                + Tambah Kontak

            </a>

            <a href="{{ route('wisata.index') }}"
                class="btn btn-secondary">

                Kembali

            </a>

        @elseif(isset($umkm))

            <a href="{{ route('kontak.umkm.create',$umkm->id) }}"
                class="btn btn-success">

                + Tambah Kontak

            </a>

            <a href="{{ route('umkm.index') }}"
                class="btn btn-secondary">

                Kembali

            </a>

        @endif

    </div>

</div>


@if(session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif


<div class="card shadow">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-success">

                    <tr>

                        <th width="60">No</th>

                        <th width="180">Jenis Kontak</th>

                        <th>Link Kontak</th>

                        <th width="180">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($kontak as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>

                            <span class="badge bg-success">

                                {{ $item->jenis_kontak }}

                            </span>

                        </td>

                        <td>

                            <a href="{{ $item->link_kontak }}"
                                target="_blank">

                                {{ $item->link_kontak }}

                            </a>

                        </td>

                        <td>

                            <a href="{{ route('kontak.edit',$item->id) }}"
                                class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form action="{{ route('kontak.destroy',$item->id) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus kontak ini?')">

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="4" class="text-center">

                            Belum ada data kontak.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection