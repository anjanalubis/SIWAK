<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Wisata;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Kecamatan;


class WisataController extends Controller
{

    public function index()
    {
        $wisata = Wisata::with('kategori', 'kecamatan')->get();

        return view('admin.wisata.index', compact('wisata'));
    }




    public function create()
    {
        $kategori = Kategori::where('tipe', 'wisata')->get();
        $kecamatan = Kecamatan::all();

        return view('admin.wisata.create', compact(
            'kategori',
            'kecamatan'
        ));
    }



    public function store(Request $request)
    {
        $request->validate([

            'kategori_id' => 'required',
            'kecamatan_id' => 'required',
            'nama_wisata' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',

            'gambar_cover' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            'harga_weekday' => 'nullable|numeric',
            'harga_weekend' => 'nullable|numeric',

            'jam_weekday' => 'nullable|string|max:255',
            'jam_weekend' => 'nullable|string|max:255',

        ]);

        $gambar = null;

        if ($request->hasFile('gambar_cover')) {
            $gambar = $request->file('gambar_cover')->store('wisata', 'public');
        }

        Wisata::create([

            'kategori_id' => $request->kategori_id,
            'kecamatan_id' => $request->kecamatan_id,
            'nama_wisata' => $request->nama_wisata,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'gambar_cover' => $gambar,

            // Kolom lama (agar SQLite tidak error)
            'harga_tiket' => $request->harga_weekday,
            'jam_operasional' => $request->jam_weekday,

            // Kolom baru
            'harga_weekday' => $request->harga_weekday,
            'harga_weekend' => $request->harga_weekend,
            'jam_weekday' => $request->jam_weekday,
            'jam_weekend' => $request->jam_weekend,

        ]);

        return redirect()
            ->route('wisata.index')
            ->with('success', 'Data wisata berhasil ditambahkan.');
    }




    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);

        $kategori = Kategori::where('tipe', 'wisata')->get();

        $kecamatan = Kecamatan::all();

        return view('admin.wisata.edit', compact(
            'wisata',
            'kategori',
            'kecamatan'
        ));
    }





    public function update(Request $request, $id)
    {
        $wisata = Wisata::findOrFail($id);

        $request->validate([

            'kategori_id' => 'required',
            'kecamatan_id' => 'required',
            'nama_wisata' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',

            'gambar_cover' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            'harga_weekday' => 'nullable|numeric',
            'harga_weekend' => 'nullable|numeric',

            'jam_weekday' => 'nullable|string|max:255',
            'jam_weekend' => 'nullable|string|max:255',

        ]);

        if ($request->hasFile('gambar_cover')) {

            if ($wisata->gambar_cover) {
                Storage::disk('public')->delete($wisata->gambar_cover);
            }

            $gambar = $request->file('gambar_cover')->store('wisata', 'public');

        } else {

            $gambar = $wisata->gambar_cover;

        }

        $wisata->update([

            'kategori_id' => $request->kategori_id,
            'kecamatan_id' => $request->kecamatan_id,
            'nama_wisata' => $request->nama_wisata,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'gambar_cover' => $gambar,

            // Kolom baru
            'harga_weekday' => $request->harga_weekday,
            'harga_weekend' => $request->harga_weekend,
            'jam_weekday' => $request->jam_weekday,
            'jam_weekend' => $request->jam_weekend,

        ]);

        return redirect()
            ->route('wisata.index')
            ->with('success', 'Data wisata berhasil diupdate.');
    }




    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);

        if ($wisata->gambar_cover) {

            Storage::disk('public')->delete($wisata->gambar_cover);

        }

        $wisata->delete();

        return redirect()
            ->route('wisata.index')
            ->with('success', 'Data wisata berhasil dihapus.');
    }
}