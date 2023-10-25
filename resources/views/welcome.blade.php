@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets') }}/img/gambar.jpeg" alt="sakitkulit" class="img-fluid">
                        <p class="mt-3 text-justify">
                            Penyakit kulit adalah penyakit pada bagian tubuh paling luar dengan gejala berupa gatal-gatal
                            dan kemerahan yang disebabkan oleh sinar matahari, virus, imun tubuh yang lemah, jamur dan
                            personal hygiene. Banyak ditemukan penyakit kulit yang timbul akibat dari kesalahan penderita
                            sendiri, misalnya kesehatan kurang baik dan tidak memperhatikan kesehatan kulit. Penyakit kulit
                            dapat menyerang sebagian tubuh tertentu ataupun seluruh tubuh yang memperburuk kondisi kesehatan
                            penderita apabila tidak ditangani dengan serius. Faktor yang menyebabkan gangguan pada kulit
                            sering terjadi karena kebiasaan hidup, lingkungan tempat tinggal, kebiasaan hidup kurang sehat,
                            alergi dan lain-lain.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Eksim/Dermatitis</strong></h5>
                        <p class="card-text">Eksim/Dermatitis adalah peradangan kulit pada epidermis dan dermis yang disebabkan oleh faktor eksogen maupun endogen dengan ditandai gejala objektif lesi bersifat polimorf dan gejala subjektif gatal. Eksim/Dermatitis merupakan jenis penyakit kulit gangguan inflamasi</p>
                        <p class="card-text">Solusi : Menggunakan pelembab khusus dengan kandungan Alpha hydroxyl acid (AHA),mengompres kulit dengan air hangat, mengenakan pakaian yang menyerap keringat, menggunakan sabun mandi yang tepat</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Kudis/Skabies</strong></h5>
                        <p class="card-text">Kudis merupakan penyakit kulit yang diakibatkan karena parasite tungau yang gatal. Yang lebih berisiko tinggi terkena penyakit kudis ialah yang tinggal di daerah kumuh dan tidak menjaga kebersihan. Penyakit kudis disebabkan oleh Sarcoptes scabies yang menimbulkan kerak, terasa gatal dan jika dibiarkan maka akan menimbulkan luka. Penyakit kudis dapat menular melalui kulit ke kulit dan dapat diderita oleh semua orang tanpa memandang usia dan jenis kelamin. Kudis merupakan jenis penyakit kulit yang disebabkan oleh infeksi jamur.</p>
                        <p class="card-text">Solusi : Menggunakan pakaian yang bersih, pada tempat yang tidak mengganggu selama sekitar dua minggu.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Bisul/Furunkel</strong></h5>
                        <p class="card-text">Bisul (furunkel) merupakan penyakit akibat adanya berupa benjolan yang terlihat memerah namun secara perlahan akan membesar dan penuh nanah. Rasanya panas, bisa muncul disemua bagian tubuh tetapi biasanya dibagian tubuh basah seperti leher, lipatan lengan ataupun lipatan selangkangan dan kulit kepala. Bisul/furunkel merupakan jenis penyakit kulit yang disebabkan oleh bakteri.</p>
                        <p class="card-text">Solusi : Apabila benjolan telah pecah kompres hangat untuk meredakan nyeri dan gunakan sabun antibakteri untuk mencegah penyebaran bakteri. </p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Panu/Pityarisis versicolor</strong></h5>
                        <p class="card-text">Panu (Pityarisis versicolor) merupakan penyakit kulit manusia yang disebabkan oleh jamur. Panu umumnya menyerang badan dan terkadang ditemui pada leher, wajah, kulit kepala, ketiak dan sela paha. Panu merupakan jenis penyakit kulit yang disebabkan oleh infeksi jamur.</p>
                        <p class="card-text">Solusi : Gunakan obat antijamur oles, dan minum obat (pil) tablet</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Jamur</strong></h5>
                        <p class="card-text">Penyakit jamur kulit bukan penyakit yang mematikan, namun kebanyakan orang sudah terjangkit penyakit jamur kulit dan sering membiarkan atau beranggapan penyakit akan sembuh dengan sendirinya. Namun jika dibiarkan maka dampak dari penyakit jamur ini bisa memperburuk keadaan penderita, salah satu dampak dari penyakit kulit jamur ini adalah kebotakan permanen jika jamur kulit menginfeksi kulit kepala.</p>
                        <p class="card-text">Solusi : Jaga kebersihan kulit, hindari mengenakan pakaian atau sepatu ketat, jangan menggunakan potong kuku yang sama untuk kuku yang terinfeksi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Melanoma/Kanker Kulit</strong></h5>
                        <p class="card-text">Melanoma adalah jenis penyakit kanker kulit yang jarang dan sangat berbahaya. Kondisi ini dimulai dari kulit manusia dan dapat menyebar dengan cepat apabila tidak dilakukan penanganan dengan tepat. Melanoma merupakan penyakit kanker kulit dimana sel – sel kanker berkembang pada sel melanosit yang menghasilkan melanin, pigmen matahari yang berlebihan.</p>
                        <p class="card-text">Solusi : Kemoterapi</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Psoriasis</strong></h5>
                        <p class="card-text">Psoriasis merupakan salah satu jenis penyakit kronis manusia. Masalah psoriasis pada akhir ini menjadi menarik karena belum ditemukan penyebab utama munculnya penyakit ini, yang ditemukan baru dugaan sementara penyebab penyakit psoriasis yaitu factor genetika. Karena belum diketahui pasti maka penyakit ini sulit untuk disembuhkan. Gejala psoriasis tergantung pada jenisnya, namun kondisi ini umumnya ditandai dengan kulit menebal, bersisik dan terasa gatal. Psoriasis merupakan jenis penyakit kulit gangguan inflamasi..</p>
                        <p class="card-text">Solusi : Menggunakan pelembab atau obat oles dan fototerapi</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Vitiligo</strong></h5>
                        <p class="card-text">Vitiligo merupakan suatu penyakit yang menyebabkan warna kulit memudar dan tergolong penyakit yang berlangsung jangka panjang. Vitiligo akan terlihat jelas pada orang yang memiliki warna kulit gelap atau hitam dan biasanya dapat terjadi pada semua usia, namun setengah dari kasus terjadi pada orang kurang dari berusia 20 tahun.</p>
                        <p class="card-text">Solusi : Memakai tabir surya, menerapkan pola hidup yang sehat dan minum air putih yang banyak</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><strong>Impetigo Bulosa</strong>
                        </h5>
                        <p class="card-text">Impetigo bulosa merupakan penyakit infeksi kulit yang menular pada daerah superfisial yaitu hanya pada bagian epidermis kulit yang menyebabkan terbentuknya lepuhan-lepuhan kecil berisi nanah (putsula) seperti tersundut rokok/api. Impetigo merupakan jenis penyakit kulit yang disebabkan oleh infeksi bakteri.</p>
                        <p class="card-text">Solusi : Menggunakan obat krim antibiotic, dianjurkan untuk meredam luka dengan air hangat dan mengompres dengan air hangat </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endsection
