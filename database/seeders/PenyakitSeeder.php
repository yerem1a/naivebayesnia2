<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penyakitData = [
            ['kode' => 'P1', 'nama' => 'Eksim/Dermatitis'],
            ['kode' => 'P2', 'nama' => 'Scabies/Kudis'],
            ['kode' => 'P3', 'nama' => 'Furunkel/Bisul'],
            ['kode' => 'P4', 'nama' => 'Pityarisis Versicolor/Panu'],
            ['kode' => 'P5', 'nama' => 'Jamur'],
            ['kode' => 'P6', 'nama' => 'Melanoma/Kanker Kulit'],
            ['kode' => 'P7', 'nama' => 'Psoriasis'],
            ['kode' => 'P8', 'nama' => 'Vitilago'],
            ['kode' => 'P9', 'nama' => 'Impetigo'],
        ];
        DB::table('penyakit')->insert($penyakitData);

    }
}
