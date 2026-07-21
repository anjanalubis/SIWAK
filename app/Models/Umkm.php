<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $table = 'umkm';

    protected $fillable = [

        'kategori_id',
        'kecamatan_id',

        'nama_umkm',
        'pemilik',
        'deskripsi',
        'alamat',

        'latitude',
        'longitude',

        'gambar_cover',

        'jam_operasional',

        'jam_weekday',
        'jam_weekend',

        'harga_mulai',

    ];

    // Relasi ke kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    // Relasi ke kecamatan
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    // Relasi ke galeri
    public function galeri()
    {
        return $this->hasMany(Galeri::class);
    }

    // Relasi ke kontak
    public function kontak()
    {
        return $this->hasMany(Kontak::class);
    }
}