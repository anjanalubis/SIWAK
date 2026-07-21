<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $table = 'kontak';

    protected $fillable = [
        'wisata_id',
        'umkm_id',
        'link_kontak',
        'jenis_kontak',
    ];
    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }

    // Relasi ke UMKM
    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }
}
