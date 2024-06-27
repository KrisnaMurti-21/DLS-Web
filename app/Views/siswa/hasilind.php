<?= $this->extend('siswa/layout/page_layout') ?>

<?= $this->section('content') ?>

<!-- Judul Hasil Gaya Belajar -->
<div class="container text-center jhgb">
    <p class="fs-3 fw-bold">Hasil dari Tes Gaya Belajar Kamu</p>
</div>
<!-- End of Hasil Gaya Belajar -->

<!-- Tampilan Hasil Gaya Belajar -->
<div class="container result-view">
    <div class="row">
        <div class="col-md-6 col-sm-12 result-img-cont">
            <img class="result-img" src="<?= base_url('assets/img/Happy student-rafiki.png') ?>" alt="" />
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="container wrap-result py-5 px-5">
                <p class="fs-5 fw-bold">Hasil</p>
                <p class="fs-6">
                    <?php if ($value["aktif"] > 0) {
                        echo 'Aktif';
                    } else {
                        echo 'Reflektif';
                    }
                    ?></p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?= abs(round($value["aktif"] / 11, 2) * 100) . "%"; ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <?= abs(round($value["aktif"] / 11, 2) * 100) . "%"; ?>
                    </div>
                </div>

                <p class="fs-6">
                    <?php if ($value["sensing"] > 0) {
                        echo 'Sensing';
                    } else {
                        echo 'Intuitif';
                    }
                    ?></p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-info" role="progressbar" style="width: <?= abs(round($value["sensing"] / 11, 2) * 100) . "%"; ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <?= abs(round($value["sensing"] / 11, 2) * 100) . "%"; ?>
                    </div>
                </div>

                <p class="fs-6">
                    <?php if ($value["visual"] > 0) {
                        echo 'Visual';
                    } else {
                        echo 'Verbal';
                    }
                    ?></p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?= abs(round($value["visual"] / 11, 2) * 100) . "%"; ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <?= abs(round($value["visual"] / 11, 2) * 100) . "%"; ?>
                    </div>
                </div>

                <p class="fs-6">
                    <?php if ($value["sequintal"] > 0) {
                        echo 'Berurutan';
                    } else {
                        echo 'Global';
                    }
                    ?></p>
                <div class="progress mb-3">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?= abs(round($value["sequintal"] / 11, 2) * 100) . "%"; ?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <?= abs(round($value["sequintal"] / 11, 2) * 100) . "%"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Tampilan Hasil Gaya Belajar -->

<div class="container">
    <div class="shadow p-5 mb-5 bg-body-tertiary rounded">
        <h3 class="text-center fw-bold">Saran Gaya Belajar Kamu</h3>
        <br>
        <h4 class="fw-bold">
            <?php if ($value["aktif"] > 0) {
                echo 'Aktif';
            } else {
                echo 'Reflektif';
            }
            ?>
        </h4>
        <p style="text-align: justify;">
            <?php if ($value["aktif"] > 0) {
                echo 'Jika Anda adalah seorang pelajar aktif di kelas yang memiliki sedikit atau bahkan tidak ada waktu untuk diskusi atau kegiatan pemecahan masalah, ada beberapa hal yang bisa Anda lakukan untuk mencoba mengimbanginya saat belajar. Pertama, Anda bisa mencoba untuk belajar dalam kelompok yang terdiri dari beberapa anggota yang bergiliran menjelaskan topik yang berbeda satu sama lain. Kedua, Anda bisa bekerja sama dengan teman-teman untuk mencoba menebak apa yang akan ditanyakan pada ujian berikutnya dan berdiskusi bagaimana cara terbaik untuk menjawabnya. Dengan melakukan hal ini, Anda akan lebih mudah mengingat informasi karena Anda mencoba menerapkannya dalam sesuatu yang lebih praktis dan bermanfaat.';
            } else {
                echo 'Jika Anda termasuk dalam kategori pembelajar reflektif di kelas yang memiliki sedikit atau bahkan tidak ada waktu untuk memikirkan informasi baru, ada beberapa hal yang bisa Anda lakukan untuk mengimbangi kekurangan ini saat belajar. Pertama, jangan hanya membaca atau menghafal materi secara pasif. Berhentilah secara berkala untuk merefleksikan kembali apa yang telah Anda baca dan pikirkan pertanyaan atau aplikasi yang mungkin terkait dengan bacaan tersebut. Kedua, cobalah menulis ringkasan singkat dari bacaan atau catatan kelas dengan menggunakan kata-kata Anda sendiri. Meskipun hal ini membutuhkan waktu ekstra, namun cara ini akan membantu Anda untuk mengingat materi dengan lebih efektif dan memperdalam pemahaman Anda terhadap bacaan atau materi yang telah dipelajari.';
            }
            ?>
        </p>
        <br>
        <h4 class="fw-bold">
            <?php if ($value["sensing"] > 0) {
                echo 'Sensing';
            } else {
                echo 'Instuitif';
            }
            ?>
        </h4>
        <p style="text-align: justify;">
            <?php if ($value["sensing"] > 0) {
                echo 'Siswa yang bersifat sensorik akan lebih mudah mengingat dan memahami informasi jika mereka dapat melihat bagaimana informasi tersebut terhubung dengan dunia nyata. Jika Anda berada di kelas yang sebagian besar materinya bersifat abstrak dan teoretis, Anda mungkin mengalami kesulitan dalam memahaminya. Oleh karena itu, mintalah contoh-contoh spesifik dari konsep dan prosedur dari guru Anda, dan cari tahu bagaimana konsep tersebut diterapkan dalam praktik. Jika guru tidak memberikan contoh yang cukup spesifik, cobalah untuk menemukannya di dalam teks pelajaran atau referensi lainnya. Selain itu, Anda juga dapat berdiskusi dengan teman atau teman sekelas Anda untuk mendapatkan sudut pandang yang lebih luas tentang konsep tersebut dan bagaimana penerapannya dalam kehidupan nyata. Dengan cara ini, Anda akan lebih mudah memahami materi dan melihat relevansinya dalam dunia nyata.';
            } else {
                echo 'Banyak kelas didesain untuk memfasilitasi pembelajaran bagi para intuitor. Namun, sebagai seorang intuitor, Anda mungkin merasa bosan dan kesulitan dalam kelas yang banyak berurusan dengan hafalan dan substitusi rumus. Untuk mengatasi kebosanan tersebut, Anda bisa meminta interpretasi atau teori yang menghubungkan fakta-fakta yang ada, atau mencoba untuk menemukan hubungan tersebut sendiri. Namun, Anda juga harus berhati-hati terhadap kesalahan ceroboh saat mengerjakan ujian karena kekurangannya dalam memperhatikan detail dan pengulangan (seperti dalam memeriksa solusi yang telah diselesaikan). Oleh karena itu, sebelum memulai menjawab pertanyaan, luangkan waktu untuk membaca seluruh pertanyaan dan pastikan Anda memeriksa hasil Anda sebelum menyerahkannya. Dengan melakukan hal ini, Anda dapat memastikan bahwa kesalahan ceroboh dapat dihindari dan memperoleh hasil yang lebih baik.';
            }
            ?>
        </p>
        <br>
        <h4 class="fw-bold">
            <?php if ($value["visual"] > 0) {
                echo 'Visual';
            } else {
                echo 'Verbal';
            }
            ?>
        </h4>
        <p style="text-align: justify;">
            <?php if ($value["visual"] > 0) {
                echo 'Jika Anda adalah seorang pembelajar visual, usahakan untuk menemukan representasi visual seperti diagram, sketsa, skema, foto, diagram alir, atau jenis visualisasi lain dari materi pelajaran yang sebagian besar berupa informasi verbal. Anda bisa bertanya pada tutor atau dosen Anda, membaca buku referensi, atau mencari kaset video atau tampilan CD-ROM dari materi kursus yang tersedia. Selain itu, Anda bisa membuat peta konsep dengan menyusun daftar poin-poin penting, memasukkannya ke dalam kotak atau lingkaran, dan menghubungkan konsep-konsep tersebut dengan garis atau tanda panah untuk menunjukkan hubungan antara mereka. Untuk mempermudah penggunaannya, Anda bisa memberi kode warna pada catatan Anda dengan stabilo sehingga semua informasi yang berkaitan dengan satu topik memiliki warna yang sama. Dengan menggunakan teknik-teknik tersebut, Anda dapat memudahkan pemahaman dan memori visual Anda, dan memaksimalkan kemampuan belajar Anda.';
            } else {
                echo 'Tulislah rangkuman atau garis besar dari materi pelajaran dengan menggunakan kata-kata yang mudah dipahami. Bekerja dalam kelompok dapat menjadi sangat efektif: Anda dapat memperoleh pemahaman materi dengan mendengarkan penjelasan dari teman sekelas, dan Anda juga dapat belajar lebih banyak lagi ketika Anda menjelaskannya kepada mereka.';
            }
            ?>
        </p>
        <br>
        <h4 class="fw-bold">
            <?php if ($value["sequintal"] > 0) {
                echo 'Berurutan';
            } else {
                echo 'Global';
            }
            ?>
        </h4>
        <p style="text-align: justify;">
            <?php if ($value["sequintal"] > 0) {
                echo 'Sebagian besar mata pelajaran diajarkan secara berurutan, namun jika Anda adalah pembelajar berurutan dan tutor Anda melompat-lompat antara topik atau melewatkan langkah-langkah, Anda mungkin mengalami kesulitan dalam mengikuti dan mengingat materi. Minta tutor untuk mengisi langkah-langkah yang terlewat atau cari referensi sendiri. Saat belajar, luangkan waktu untuk membuat garis besar atau rangkuman materi pelajaran dalam urutan logis. Hal ini akan menghemat waktu Anda dalam jangka panjang. Anda juga bisa meningkatkan kemampuan berpikir global dengan mengaitkan topik baru yang dipelajari dengan hal-hal yang sudah diketahui. Semakin sering dilakukan, semakin mendalam pemahaman terhadap topik tersebut. Selain itu, bekerja dalam kelompok juga dapat sangat efektif karena bisa mendapatkan pemahaman dari penjelasan teman sekelas dan belajar lebih banyak saat menjelaskannya.';
            } else {
                echo 'Jika Anda merupakan seorang pembelajar global, memahami gambaran besar suatu subjek adalah sangat penting sebelum Anda dapat menguasai detailnya. Jika tutor Anda langsung terjun ke topik baru tanpa menjelaskan kaitannya dengan apa yang sudah Anda ketahui, hal ini dapat menyulitkan Anda. Namun, ada beberapa tindakan yang dapat membantu Anda mendapatkan gambaran besar lebih cepat. Sebelum mempelajari bagian pertama dalam sebuah teks, baca seluruh bab untuk mendapatkan gambaran umum. Walaupun ini memakan waktu pada awalnya, namun hal ini dapat mencegah Anda mengulang-ulang bagian tertentu. Daripada membagi waktu untuk setiap subjek setiap malam, cobalah untuk membenamkan diri dalam setiap subjek untuk blok yang besar. Selanjutnya, mencoba mengaitkan mata pelajaran tersebut dengan hal-hal yang sudah Anda ketahui. Anda bisa meminta tutor untuk membantu Anda melihat kaitannya atau membaca referensi. Yang terpenting, jangan kehilangan kepercayaan pada diri sendiri; pada akhirnya, Anda akan memahami materi baru, dan setelah Anda memahami bagaimana materi tersebut terhubung dengan topik dan disiplin ilmu lain, Anda akan dapat mengaplikasikannya dengan cara yang tidak akan terpikirkan oleh pembelajar sekuensial.';
            }
            ?>
        </p>
        <br>
    </div>
</div>
<?= $this->endSection() ?>