<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\Wisata;
use App\Models\Umkm;

class KontakController extends Controller
{
    // ==========================
    // KONTAK WISATA
    // ==========================

    public function index($id)
    {
        $wisata = Wisata::findOrFail($id);

        $kontak = Kontak::where('wisata_id', $id)->get();

        return view('admin.kontak.index', compact(
            'wisata',
            'kontak'
        ));
    }

    public function create($id)
    {
        $wisata = Wisata::findOrFail($id);

        return view('admin.kontak.create', compact(
            'wisata'
        ));
    }

    // ==========================
    // KONTAK UMKM
    // ==========================

    public function indexUmkm($id)
    {
        $umkm = Umkm::findOrFail($id);

        $kontak = Kontak::where('umkm_id', $id)->get();

        return view('admin.kontak.index', compact(
            'umkm',
            'kontak'
        ));
    }

    public function createUmkm($id)
    {
        $umkm = Umkm::findOrFail($id);

        return view('admin.kontak.create', compact(
            'umkm'
        ));
    }

    // ==========================
    // SIMPAN
    // ==========================

    public function store(Request $request)
    {
        $request->validate([
            'jenis_kontak' => 'required',
            'link_kontak'  => 'required',
        ]);

        Kontak::create([
            'wisata_id'    => $request->wisata_id,
            'umkm_id'      => $request->umkm_id,
            'jenis_kontak' => $request->jenis_kontak,
            'link_kontak'  => $request->link_kontak,
        ]);

        if ($request->wisata_id) {

            return redirect()
                ->route('kontak.index', $request->wisata_id)
                ->with('success', 'Kontak berhasil ditambahkan');
        }

        return redirect()
            ->route('kontak.umkm.index', $request->umkm_id)
            ->with('success', 'Kontak berhasil ditambahkan');
    }

    // ==========================
    // EDIT
    // ==========================

    public function edit($id)
    {
        $kontak = Kontak::findOrFail($id);

        return view('admin.kontak.edit', compact(
            'kontak'
        ));
    }

    public function update(Request $request, $id)
    {
        $kontak = Kontak::findOrFail($id);

        $request->validate([
            'jenis_kontak' => 'required',
            'link_kontak'  => 'required',
        ]);

        $kontak->update([
            'jenis_kontak' => $request->jenis_kontak,
            'link_kontak'  => $request->link_kontak,
        ]);

        if ($kontak->wisata_id) {

            return redirect()
                ->route('kontak.index', $kontak->wisata_id)
                ->with('success', 'Kontak berhasil diperbarui');
        }

        return redirect()
            ->route('kontak.umkm.index', $kontak->umkm_id)
            ->with('success', 'Kontak berhasil diperbarui');
    }

    // ==========================
    // HAPUS
    // ==========================

    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);

        $wisata = $kontak->wisata_id;
        $umkm   = $kontak->umkm_id;

        $kontak->delete();

        if ($wisata) {

            return redirect()
                ->route('kontak.index', $wisata)
                ->with('success', 'Kontak berhasil dihapus');
        }

        return redirect()
            ->route('kontak.umkm.index', $umkm)
            ->with('success', 'Kontak berhasil dihapus');
    }
}