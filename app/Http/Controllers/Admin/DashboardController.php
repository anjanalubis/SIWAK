<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Kecamatan;
use App\Models\Wisata;
use App\Models\Umkm;
use App\Models\Kontak;
use App\Models\Galeri;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKategori = Kategori::count();
        $totalKecamatan = Kecamatan::count();
        $totalUmkm = Umkm::count();
        $totalWisata = Wisata::count();

        return view('admin.dashboard', compact(
            'totalKategori',
            'totalKecamatan',
            'totalUmkm',
            'totalWisata'
        ));
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $filter = $request->filter;

        // Total Data (agar card dashboard tetap tampil)
        $totalKategori = Kategori::count();
        $totalKecamatan = Kecamatan::count();
        $totalUmkm = Umkm::count();
        $totalWisata = Wisata::count();

        $wisata = collect();
        $umkm = collect();
        $kategori = collect();
        $kecamatan = collect();
        $kontak = collect();
        $galeri = collect();

        if ($filter == 'semua' || $filter == 'wisata') {
            $wisata = Wisata::where('nama_wisata', 'like', "%{$keyword}%")->get();
        }

        if ($filter == 'semua' || $filter == 'umkm') {
            $umkm = Umkm::where('nama_umkm', 'like', "%{$keyword}%")->get();
        }

        if ($filter == 'semua' || $filter == 'kategori') {
            $kategori = Kategori::where('nama_kategori', 'like', "%{$keyword}%")->get();
        }

        if ($filter == 'semua' || $filter == 'kecamatan') {
            $kecamatan = Kecamatan::where('nama_kecamatan', 'like', "%{$keyword}%")->get();
        }

        if ($filter == 'semua' || $filter == 'kontak') {

            $kontak = Kontak::where('jenis_kontak', 'like', "%{$keyword}%")
                ->orWhere('link_kontak', 'like', "%{$keyword}%")
                ->get();

        }

        if ($filter == 'semua' || $filter == 'galeri') {

            $galeri = Galeri::where('judul', 'like', "%{$keyword}%")
                ->get();

        }
        return view('admin.dashboard', compact(

            'wisata',
            'umkm',
            'kategori',
            'kecamatan',
            'kontak',
            'galeri',
            'keyword',
            'filter',

            'totalKategori',
            'totalKecamatan',
            'totalUmkm',
            'totalWisata'

        ));
    }
}