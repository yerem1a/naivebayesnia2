<?php
// require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

$kernel->bootstrap();

use App\Http\Controllers\KlasifikasiController;

$controller = new KlasifikasiController();

// Panggil fungsi-fungsi untuk pengujian
$gejala = ['G1', 'G2', 'G3', 'G9', 'G24', 'G30'];
$hasilKlasifikasi = $controller->klasifikasiNaiveBayes($gejala);

// Cetak hasil klasifikasi
echo "Hasil klasifikasi: $hasilKlasifikasi";
