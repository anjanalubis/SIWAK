<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::all();

        return view('admin.kecamatan.index', compact('kecamatan'));
    }

    public function create()
    {
        return view('admin.kecamatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kecamatan' => 'required',
        ]);

        Kecamatan::create($request->all());

        return redirect()->route('kecamatan.index')
            ->with('success', 'Kecamatan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);

        return view('admin.kecamatan.edit', compact('kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $kecamatan = Kecamatan::findOrFail($id);

        $kecamatan->update($request->all());

        return redirect()->route('kecamatan.index')
            ->with('success', 'Kecamatan berhasil diubah');
    }

    public function destroy($id)
    {
        Kecamatan::findOrFail($id)->delete();

        return redirect()->route('kecamatan.index')
            ->with('success', 'Kecamatan berhasil dihapus');
    }
}