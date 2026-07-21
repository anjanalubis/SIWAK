@extends('admin.layouts.admin')


@section('content')


    <div class="container">


        <h3 class="mb-4">

            Tambah Galeri

            @if(isset($wisata))

                - Wisata : {{ $wisata->nama_wisata }}

            @endif


            @if(isset($umkm))

                - UMKM : {{ $umkm->nama_umkm }}

            @endif


        </h3>




        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">


            @csrf



            @if(isset($wisata))

                <input type="hidden" name="wisata_id" value="{{ $wisata->id }}">

            @endif



            @if(isset($umkm))

                <input type="hidden" name="umkm_id" value="{{ $umkm->id }}">

            @endif





            <div class="mb-3">

                <label class="form-label">
                    Judul
                </label>


                <input type="text" name="judul" class="form-control" required>

            </div>





            <div class="mb-3">

                <label class="form-label">
                    File Foto / Video
                </label>


                <input type="file" name="file" class="form-control" required>


            </div>





            <div class="mb-3">

                <label class="form-label">
                    Tipe
                </label>


                <select name="tipe" class="form-control" required>


                    <option value="">
                        -- Pilih Tipe --
                    </option>


                    <option value="foto">
                        Foto
                    </option>


                    <option value="video">
                        Video
                    </option>


                </select>


            </div>





            <button type="submit" class="btn btn-success">

                Simpan

            </button>



            <a href="javascript:history.back()" class="btn btn-secondary">

                Kembali

            </a>



        </form>


    </div>


@endsection