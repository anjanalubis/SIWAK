<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Models\Galeri;
use App\Models\Wisata;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{

    // ==========================
    // GALERI WISATA
    // ==========================

    public function index($id)
    {
        $wisata = Wisata::findOrFail($id);

        $galeri = Galeri::where('wisata_id', $id)->get();

        return view('admin.galeri.index', compact(
            'wisata',
            'galeri'
        ));
    }



    public function create($id)
    {
        $wisata = Wisata::findOrFail($id);

        return view('admin.galeri.create', compact(
            'wisata'
        ));
    }



    // ==========================
    // GALERI UMKM
    // ==========================


    public function indexUmkm($id)
    {
        $umkm = Umkm::findOrFail($id);

        $galeri = Galeri::where('umkm_id', $id)->get();


        return view('admin.galeri.index', compact(
            'umkm',
            'galeri'
        ));
    }



    public function createUmkm($id)
    {
        $umkm = Umkm::findOrFail($id);


        return view('admin.galeri.create', compact(
            'umkm'
        ));
    }



    // ==========================
    // SIMPAN GALERI
    // ==========================


    public function store(Request $request)
    {
        $request->validate([

            'judul' => 'required',

            'file' => 'required|mimes:jpg,jpeg,png,mp4|max:51200',

            'tipe' => 'required',

        ]);


        $namaFile = $request->file('file')
            ->store('galeri', 'public');


        Galeri::create([

            'wisata_id' => $request->wisata_id,

            'umkm_id' => $request->umkm_id,

            'judul' => $request->judul,

            'file' => $namaFile,

            'tipe' => $request->tipe,

        ]);



        if ($request->wisata_id) {

            return redirect()
                ->route('galeri.index', $request->wisata_id)
                ->with('success', 'Galeri wisata berhasil ditambahkan');

        }


        if ($request->umkm_id) {

            return redirect()
                ->route('galeri.umkm.index', $request->umkm_id)
                ->with('success', 'Galeri UMKM berhasil ditambahkan');

        }

    }





    // ==========================
    // EDIT
    // ==========================


    public function edit($id)
    {

        $galeri = Galeri::findOrFail($id);


        return view('admin.galeri.edit', compact(
            'galeri'
        ));

    }





    public function update(Request $request, $id)
    {

        $galeri = Galeri::findOrFail($id);



        $request->validate([

            'judul' => 'required',

            'tipe' => 'required',

            'file' => 'nullable|mimes:jpg,jpeg,png,mp4|max:51200'

        ]);



        if ($request->hasFile('file')) {


            if ($galeri->file && Storage::disk('public')->exists($galeri->file)) {

                Storage::disk('public')
                    ->delete($galeri->file);

            }



            $galeri->file =
                $request->file('file')
                    ->store('galeri', 'public');

        }



        $galeri->judul = $request->judul;

        $galeri->tipe = $request->tipe;


        $galeri->save();




        if ($galeri->wisata_id) {

            return redirect()
                ->route('galeri.index', $galeri->wisata_id)
                ->with('success', 'Galeri berhasil diperbarui');


        } elseif ($galeri->umkm_id) {


            return redirect()
                ->route('galeri.umkm.index', $galeri->umkm_id)
                ->with('success', 'Galeri berhasil diperbarui');

        }

    }





    // ==========================
    // HAPUS
    // ==========================


    public function destroy($id)
    {

        $galeri = Galeri::findOrFail($id);



        if ($galeri->file) {

            Storage::disk('public')
                ->delete($galeri->file);

        }



        $wisata = $galeri->wisata_id;

        $umkm = $galeri->umkm_id;



        $galeri->delete();



        if ($wisata) {

            return redirect()

                ->route('galeri.index', $wisata)

                ->with('success', 'File berhasil dihapus');

        }



        return redirect()

            ->route('galeri.umkm.index', $umkm)

            ->with('success', 'File berhasil dihapus');

    }

}