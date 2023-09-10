<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table = 'gejala'; // Nama tabel dalam database untuk model Gejala
    protected $fillable = ['kode_gejala', 'gejala']; // Kolom yang dapat diisi dalam tabel Gejala

    // Definisi relasi many-to-many antara Gejala dan Penyakit
    public function penyakit()
    {
        return $this->belongsToMany(Penyakit::class, 'gejala_penyakit', 'gejala_id', 'penyakit_id');
        // Penjelasan relasi:
        // - 'Penyakit::class' adalah model yang terkait
        // - 'gejala_penyakit' adalah nama tabel penyimpanan relasi
        // - 'gejala_id' adalah kunci luar dalam tabel gejala_penyakit
        // - 'penyakit_id' adalah kunci luar dalam tabel gejala_penyakit
    }
}
