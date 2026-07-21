@extends('admin.layouts.admin')


@section('content')


    <div class="d-flex justify-content-between align-items-center mb-4">


        <div>

            @if(isset($wisata))

                <h2>Galeri Wisata</h2>

                <h5 class="text-success">
                    {{ $wisata->nama_wisata }}
                </h5>


            @elseif(isset($umkm))

                <h2>Galeri UMKM</h2>

                <h5 class="text-success">
                    {{ $umkm->nama_umkm }}
                </h5>


            @endif

        </div>



        <div>


            @if(isset($wisata))


                <a href="{{ route('galeri.create', $wisata->id) }}" class="btn btn-success">

                    + Tambah Foto / Video

                </a>


                <a href="{{ route('wisata.index') }}" class="btn btn-secondary">

                    Kembali

                </a>



            @elseif(isset($umkm))


                <a href="{{ route('galeri.umkm.create', $umkm->id) }}" class="btn btn-success">

                    + Tambah Foto / Video

                </a>


                <a href="{{ route('umkm.index') }}" class="btn btn-secondary">

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





    <div class="row">


        @forelse($galeri as $item)



            <div class="col-lg-4 col-md-6 mb-4">


                <div class="card shadow h-100">



                    @if($item->tipe == 'video')


                        <video controls class="card-img-top" style="height:250px; object-fit:contain; background:#f8f9fa;">

                            <source src="{{ asset('storage/' . $item->file) }}">

                        </video>



                    @else



                        <img src="{{ asset('storage/' . $item->file) }}" class="card-img-top p-2"
                            style="height:250px; object-fit:contain; background:#f8f9fa;">



                    @endif



                    <div class="card-body">


                        <h5 class="card-title">

                            {{ $item->judul }}

                        </h5>



                        <p class="text-muted">

                            Tipe : {{ $item->tipe }}

                        </p>




                        <a href="{{ route('galeri.edit', $item->id) }}" class="btn btn-warning btn-sm">

                            Edit

                        </a>





                        <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" class="d-inline">


                            @csrf

                            @method('DELETE')


                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus file ini?')">

                                Hapus

                            </button>


                        </form>



                    </div>


                </div>


            </div>



        @empty



            <div class="col-12">


                <div class="alert alert-info">

                    Belum ada foto atau video galeri.

                </div>


            </div>



        @endforelse



    </div>


@endsection