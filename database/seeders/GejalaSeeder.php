<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gejalaData = [
            ['kode' => 'G1', 'gejala' => 'Warna kemerahan akibat pelebaran pembuluh darah, sembab atau lebam akibat penimbunan cairan jaringan'],
            ['kode' => 'G2', 'gejala' => 'Penebalan kulit'],
            ['kode' => 'G3', 'gejala' => 'Tanda garukan serta perubahan warna kulit'],
            ['kode' => 'G4', 'gejala' => 'Gatal dan rasa gatal akan terasa lebih parah ketika pada malam hari'],
            ['kode' => 'G5', 'gejala' => 'Muncul ditempat lembab ditubuh seperti ketiak, tangan, celah jari tangan atau kaki.'],
            ['kode' => 'G6', 'gejala' => 'Benjolan kecil yang dan akan berubah menjadi besar'],
            ['kode' => 'G7', 'gejala' => 'Kulit bengkak disekitar bejolan, benjolan merah terasa nyeri dan adanya nanah.'],
            ['kode' => 'G8', 'gejala' => 'Rasa gatal pada saat berkeringat disertai bercak berwarna putih pada kulit.'],
            ['kode' => 'G9', 'gejala' => 'Gatal'],
            ['kode' => 'G10', 'gejala' => 'Ruam bersisik'],
            ['kode' => 'G11', 'gejala' => 'Kulit melepuh dan mengeluarkan cairan'],
            ['kode' => 'G12', 'gejala' => 'Ruam kemearahan dengan bagian tepi yang menyerupai cincin'],
            ['kode' => 'G13', 'gejala' => 'Perkembangan pigmen baru atau pertumbuhan yang tampak tidak biasa pada kulit'],
            ['kode' => 'G14', 'gejala' => 'Perubahan pada tahi lalat yang ada dan tidak selalu dimulai dari tahi lalat melainkan dapat terjadi pada kulit yang tampak tidak normal.'],
            ['kode' => 'G15', 'gejala' => 'Terjadi selama beberapa minggu kemudian menghilang untuk sementara waktu sampai akhirnya muncul kembali.'],
            ['kode' => 'G16', 'gejala' => 'Bagian tengah bercak berwarna putih sedangkan tepinya kecokelatan atau kemerahan'],
            ['kode' => 'G17', 'gejala' => 'Hilangnya pigmen warna pada bagian hitam mata, bagian mulut dan hidung, dan timbul ruam di area kulit yang terkena vitiligo setelah terpapar matahari.'],
            ['kode' => 'G18', 'gejala' => 'Kemunculan bercak merah'],
            ['kode' => 'G19', 'gejala' => 'Lepuhan dikulit terutama pada wajah, tangan dan kaki'],
            ['kode' => 'G20', 'gejala' => 'Gatalgatal'],
            ['kode' => 'G21', 'gejala' => 'Ruam merah dan ruam basah'],
            ['kode' => 'G22', 'gejala' => 'Lembab berlebihan'],
            ['kode' => 'G23', 'gejala' => 'Kulit kemerahan'],
            ['kode' => 'G24', 'gejala' => 'Alergi'],
            ['kode' => 'G25', 'gejala' => 'Infeksi'],
            ['kode' => 'G26', 'gejala' => 'Gelembung-gelembung kecil berair'],
            ['kode' => 'G27', 'gejala' => 'Timbul sisik pada leher dan kulit kepala'],
            ['kode' => 'G28', 'gejala' => 'Iritasi'],
            ['kode' => 'G29', 'gejala' => 'Perubahan tingkat kelembaban'],
            ['kode' => 'G30', 'gejala' => 'Kulit memerah'],
        ];

        DB::table('gejala')->insert($gejalaData);

        
    }
}
