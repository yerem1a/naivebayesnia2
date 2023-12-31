<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use App\Models\Gejala;

class KlasifikasiController extends Controller
{
    // Tampilkan formulir untuk input gejala
    public function showForm()
    {
        // Misalnya, Anda memiliki data gejala dari database
        $gejalaList = Gejala::all(); // Ubah sesuai dengan model dan data gejala Anda

        // Kemudian, kirimkan data gejala ke tampilan Blade
        return view('klasifikasi', compact('gejalaList'));
    }


    // Handle proses klasifikasi
    public function classify(Request $request)
    {
        // Ambil gejala dari formulir input
        $gejala = $request->input('gejala');

        // Lakukan klasifikasi Naive Bayes
        $hasilKlasifikasi = $this->klasifikasiNaiveBayes($gejala);

        $this->simpanKeHistory($gejala, $hasilKlasifikasi['hasilKlasifikasi'], $hasilKlasifikasi['persentaseTerkenaPenyakit']);

        // Tampilkan hasil klasifikasi
        return view('klasifikasi.hasil', [
            'hasilKlasifikasi' => $hasilKlasifikasi['hasilKlasifikasi'],
            'persentaseTerkenaPenyakit' => $hasilKlasifikasi['persentaseTerkenaPenyakit']
        ]);
    }

    // Metode klasifikasi Naive Bayes
    private function klasifikasiNaiveBayes($gejala)
    {
        // Ambil dataset dari data.php (pastikan Anda sudah mengimpor dataset)
        // $dataset = include 'datasets.php'; // Ubah 'datasets.php' sesuai dengan nama file dataset Anda
        $dataRekamMedis = [
            [
                "penyakit" => "Eksim/Dermatitis",
                "gejala" => ["G1", "G2", "G3", "G9", "G24", "G30"]
            ],
            [
                "penyakit" => "Scabies/Kudis",
                "gejala" => ["G4", "G5", "G6", "G7", "G8", "G13", "G14", "G15", "G16", "G17"]
            ],
            [
                "penyakit" => "Furunkel/Bisul",
                "gejala" => ["G2", "G6", "G7", "G19"]
            ],
            [
                "penyakit" => "Pityarisis Versicolor/Panu",
                "gejala" => ["G11", "G16", "G26"]
            ],
            [
                "penyakit" => "Jamur",
                "gejala" => ["G10", "G12", "G20", "G21", "G27"]
            ],
            [
                "penyakit" => "Melanoma/Kanker Kulit",
                "gejala" => ["G13", "G14", "G25"]
            ],
            [
                "penyakit" => "Psoriasis",
                "gejala" => ["G2", "G8", "G17", "G18", "G23", "G28"]
            ],
            [
                "penyakit" => "Vitilago",
                "gejala" => ["G17", "G22", "G29"]
            ],
            [
                "penyakit" => "Impetigo",
                "gejala" => ["G2", "G18", "G24"]
            ],
            [
                "penyakit" => "Impetigo",
                "gejala" => ["G8", "G9", "G10", "G11", "G12", "G13", "G14"]
            ],
            [
                "penyakit" => "Impetigo",
                "gejala" => ["G15", "G16", "G17", "G18", "G19", "G20", "G21"]
            ],
            [
                "penyakit" => "Vitiligo",
                "gejala" => ["G24", "G25", "G26"]
            ],
            [
                "penyakit" => "Vitiligo",
                "gejala" => ["G27", "G28", "G29", "G30"]
            ],
            [
                "penyakit" => "Pityarisis Versicolor/Panu",
                "gejala" => ["G25", "G26", "G27", "G28", "G29", "G30"]
            ],
            [
                "penyakit" => "Pityarisis Versicolor/Panu",
                "gejala" => ["G4", "G5", "G6", "G7", "G8", "G9", "G10"]
            ],
            [
                "penyakit" => "Melanoma/Kanker Kulit",
                "gejala" => ["G27", "G28", "G29", "G30"]
            ],
            [
                "penyakit" => "Melanoma/Kanker Kulit",
                "gejala" => ["G24", "G25", "G26"]
            ],
            [
                "penyakit" => "Psoriasis",
                "gejala" => ["G22", "G23", "G24", "G25", "G26", "G27", "G28", "G29"]
            ],
            [
                "penyakit" => "Psoriasis",
                "gejala" => ["G30"]
            ],
            [
                "penyakit" => "Vitiligo",
                "gejala" => ["G4", "G5", "G6", "G7"]
            ],
            [
                "penyakit" => "Vitiligo",
                "gejala" => ["G8", "G9", "G10", "G11", "G12", "G13", "G14", "G15", "G16"]
            ],
            [
                "penyakit" => "Eksim/Dermatitis",
                "gejala" => ["G25", "G26", "G27", "G28", "G29", "G30"]
            ],
            [
                "penyakit" => "Eksim/Dermatitis",
                "gejala" => ["G9", "G10", "G11", "G12", "G13"]
            ],
            [
                "penyakit" => "Scabies/Kudis",
                "gejala" => ["G22", "G23", "G24", "G25"]
            ],
            [
                "penyakit" => "Scabies/Kudis",
                "gejala" => ["G26", "G27", "G28", "G29", "G30"]
            ],
            [
                "penyakit" => "Furunkel/Bisul",
                "gejala" => ["G21", "G22", "G23", "G24", "G25"]
            ],
            [
                "penyakit" => "Furunkel/Bisul",
                "gejala" => ["G26", "G27", "G28", "G29", "G30"]
            ],
            [
                "penyakit" => "Pityarisis Versicolor/Panu",
                "gejala" => ["G19", "G20", "G21", "G22", "G23"]
            ],
            [
                "penyakit" => "Pityarisis Versicolor/Panu",
                "gejala" => ["G24", "G25", "G26", "G27", "G28"]
            ],
            [
                "penyakit" => "Jamur",
                "gejala" => ["G17", "G18", "G19", "G20", "G21"]
            ],
            [
                "penyakit" => "Jamur",
                "gejala" => ["G22", "G23", "G24", "G25", "G26"]
            ],
            [
                "penyakit" => "Melanoma/Kanker Kulit",
                "gejala" => ["G22", "G23", "G24", "G25"]
            ],
            [
                "penyakit" => "Melanoma/Kanker Kulit",
                "gejala" => ["G26", "G27", "G28", "G29"]
            ],
            [
                "penyakit" => "Eksim/Dermatitis",
                "gejala" => ["G25", "G26", "G27"]
            ],
            [
                "penyakit" => "Eksim/Dermatitis",
                "gejala" => ["G28", "G29", "G30"]
            ],
            [
                "penyakit" => "Scabies/Kudis",
                "gejala" => ["G31", "G32", "G33"]
            ],
            [
                "penyakit" => "Scabies/Kudis",
                "gejala" => ["G34", "G35", "G36"]
            ],
            [
                "penyakit" => "Furunkel/Bisul",
                "gejala" => ["G37", "G38", "G39"]
            ],
            [
                "penyakit" => "Furunkel/Bisul",
                "gejala" => ["G40", "G41", "G42"]
            ],



        ];


        // Hitung probabilitas prior dan likelihood dengan menggunakan metode yang telah Anda definisikan
        $classProbabilities = $this->calculateClassProbabilities($dataRekamMedis);
        $featureProbabilities = $this->calculateFeatureProbabilities($dataRekamMedis, $gejala);

        // Lakukan prediksi dengan menggunakan metode yang telah Anda definisikan

        $hasilKlasifikasi = $this->predict($dataRekamMedis, $gejala, $classProbabilities, $featureProbabilities);

        $probabilitasKelas = $classProbabilities[$hasilKlasifikasi];
        $persentaseTerkenaPenyakit = $probabilitasKelas * 100;
    
        // Pastikan $hasilKlasifikasi adalah array sebelum mengakses elemennya
        if (is_array($hasilKlasifikasi)) {
            return [
                'hasilKlasifikasi' => $hasilKlasifikasi['hasilKlasifikasi'],
                'persentaseTerkenaPenyakit' => $hasilKlasifikasi['persentaseTerkenaPenyakit']
            ];
        }
    
        // Jika $hasilKlasifikasi bukan array, kembalikan sesuai kebutuhan
        return [
            'hasilKlasifikasi' => $hasilKlasifikasi,
            'persentaseTerkenaPenyakit' => $persentaseTerkenaPenyakit
        ];
    }

    // Menghitung probabilitas prior untuk setiap kelas (penyakit)
    private function calculateClassProbabilities($dataset)
    {
        $totalRecords = count($dataset);
        $classProbabilities = [];

        foreach ($dataset as $record) {
            $class = $record['penyakit'];
            if (!isset($classProbabilities[$class])) {
                $classProbabilities[$class] = 0;
            }
            $classProbabilities[$class]++;
        }

        foreach ($classProbabilities as $class => $count) {
            $classProbabilities[$class] = $count / $totalRecords;
        }

        return $classProbabilities;
    }

    // Menghitung probabilitas likelihood
    private function calculateFeatureProbabilities($dataset, $features)
    {
        $featureProbabilities = [];

        foreach ($dataset as $record) {
            $class = $record['penyakit'];
            $recordFeatures = $record['gejala'];

            foreach ($features as $feature) {
                if (!isset($featureProbabilities[$class][$feature])) {
                    $featureProbabilities[$class][$feature] = 0;
                }

                if (in_array($feature, $recordFeatures)) {
                    $featureProbabilities[$class][$feature]++;
                }
            }
        }

        // Hitung probabilitasnya
        foreach ($featureProbabilities as $class => $featureCounts) {
            $totalCases = count(array_filter($dataset, function ($record) use ($class) {
                return $record['penyakit'] === $class;
            }));

            foreach ($featureCounts as $feature => $count) {
                $featureProbabilities[$class][$feature] = $count / $totalCases;
            }
        }

        return $featureProbabilities;
    }


    // Prediksi kelas (penyakit)
    private function predict($dataset, $features, $classProbabilities, $featureProbabilities)
    {
        $bestClass = null;
        $bestScore = -1;

        foreach ($classProbabilities as $class => $classProbability) {
            $score = $classProbability;

            foreach ($features as $feature) {
                if (isset($featureProbabilities[$class][$feature])) {
                    $score *= $featureProbabilities[$class][$feature] / $classProbability;
                }
            }

            if ($score > $bestScore) {
                $bestScore = $score;
                $bestClass = $class;
            }
        }

        return $bestClass;
    }
    private function simpanKeHistory($gejala, $hasilKlasifikasi, $persentaseTerkenaPenyakit) {
        // Di sini Anda dapat menggunakan model History dan menyimpan data sesuai kebutuhan
        History::create([
            'gejala' => json_encode($gejala),
            'hasil' => $hasilKlasifikasi,
            'persentase' => $persentaseTerkenaPenyakit
        ]);
    }
    public function riwayatGejala()
{
    // Ambil data riwayat dari model History
    $riwayat_gejala = History::all();

    // Kirim data ke tampilan Blade
    return view('riwayat_gejala', compact('riwayat_gejala'));
}
}
