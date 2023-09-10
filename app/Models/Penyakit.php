<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    protected $table = 'penyakit'; // Nama tabel dalam database untuk model Penyakit
    protected $fillable = ['kode', 'nama']; // Kolom yang dapat diisi dalam tabel Penyakit

    // Definisi relasi many-to-many antara Penyakit dan Gejala
    public function gejala()
    {
        return $this->belongsToMany(Gejala::class, 'gejala_penyakit', 'penyakit_id', 'gejala_id');
        // Penjelasan relasi:
        // - 'Gejala::class' adalah model yang terkait
        // - 'gejala_penyakit' adalah nama tabel penyimpanan relasi
        // - 'penyakit_id' adalah kunci luar dalam tabel penyakit_penyakit
        // - 'gejala_id' adalah kunci luar dalam tabel penyakit_penyakit
    }

}
