<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Kecamatan;
use App\Models\Galeri;
use App\Models\Kontak;

class Wisata extends Model
{
    use HasFactory;

    protected $table = 'wisata';

    protected $fillable = [
        'kategori_id',
        'kecamatan_id',
        'nama_wisata',
        'deskripsi',
        'alamat',
        'latitude',
        'longitude',
        'gambar_cover',
        'harga_weekday',
        'harga_weekend',

        'jam_weekday',
        'jam_weekend',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function galeri()
    {
        return $this->hasMany(Galeri::class);
    }

    public function kontak()
    {
        return $this->hasMany(Kontak::class);
    }
}