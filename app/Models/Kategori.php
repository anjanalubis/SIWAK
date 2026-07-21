<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Wisata;
use App\Models\Umkm;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = [
        'nama_kategori',
        'tipe'
    ];

    public function wisata ()
    {
        return $this->hasMany(Wisata::class);
    }
    public function umkm()
    {
        return $this->hasMany(Umkm::class);
    }
}