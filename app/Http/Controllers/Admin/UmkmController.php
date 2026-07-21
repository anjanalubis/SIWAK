<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Models\Kategori;
use App\Models\Kecamatan;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    public function index()
    {
        $umkm = Umkm::with('kategori', 'kecamatan')->get();

        return view('admin.umkm.index', compact('umkm'));
    }
    public function edit($id)
    {
        $umkm = Umkm::findOrFail($id);

        return view('admin.umkm.edit', compact('umkm'));
    }
    public function update(Request $request, $id)
    {
        $umkm = Umkm::findOrFail($id);


        $request->validate([

            'nama_umkm' => 'required',

            'deskripsi' => 'required',

        ]);



        $umkm->update([

            'nama_umkm' => $request->nama_umkm,

            'deskripsi' => $request->deskripsi,

            'alamat' => $request->alamat,

            'kontak' => $request->kontak,

        ]);



        return redirect()
            ->route('umkm.index')
            ->with('success', 'Data UMKM berhasil diperbarui');
    }
    public function create()
    {
        $kategori = Kategori::where('tipe', 'umkm')->get();
        $kecamatan = Kecamatan::all();

        return view('admin.umkm.create', compact(
            'kategori',
            'kecamatan'
        ));
    }
    public function store(Request $request)
    {
        $request->validate([

            'kategori_id' => 'required',
            'kecamatan_id' => 'required',

            'nama_umkm' => 'required',
            'pemilik' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',

            'latitude' => 'required',
            'longitude' => 'required',

            'gambar_cover' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',

            'jam_weekday' => 'nullable|string|max:255',
            'jam_weekend' => 'nullable|string|max:255',

            'harga_mulai' => 'nullable|numeric',

        ]);

        $gambar = null;

        if ($request->hasFile('gambar_cover')) {

            $gambar = $request->file('gambar_cover')
                ->store('umkm', 'public');

        }

        Umkm::create([

            'kategori_id' => $request->kategori_id,
            'kecamatan_id' => $request->kecamatan_id,

            'nama_umkm' => $request->nama_umkm,
            'pemilik' => $request->pemilik,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,

            'latitude' => $request->latitude,
            'longitude' => $request->longitude,

            'gambar_cover' => $gambar,

            // Kolom lama
            'jam_operasional' => $request->jam_weekday,

            // Kolom baru
            'jam_weekday' => $request->jam_weekday,
            'jam_weekend' => $request->jam_weekend,

            'harga_mulai' => $request->harga_mulai,

        ]);

        return redirect()
            ->route('umkm.index')
            ->with('success', 'Data UMKM berhasil ditambahkan.');
    }
    public function destroy($id)
    {
        $umkm = Umkm::findOrFail($id);


        if ($umkm->gambar_cover) {

            Storage::disk('public')
                ->delete($umkm->gambar_cover);

        }


        $umkm->delete();


        return redirect()
            ->route('umkm.index')
            ->with('success', 'Data UMKM berhasil dihapus');
    }
}