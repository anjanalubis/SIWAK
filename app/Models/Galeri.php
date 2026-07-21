<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;


    protected $table = 'galeri';


    protected $fillable = [
        'wisata_id',
        'umkm_id',
        'judul',
        'file',
        'tipe',
    ];



    // Relasi Galeri ke Wisata
    public function wisata()
    {
        return $this->belongsTo(Wisata::class, 'wisata_id');
    }



    // Relasi Galeri ke UMKM
    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }



    // Helper untuk mengetahui pemilik galeri
    public function pemilik()
    {

        if($this->wisata_id){

            return $this->wisata;

        }


        if($this->umkm_id){

            return $this->umkm;

        }


        return null;

    }

}