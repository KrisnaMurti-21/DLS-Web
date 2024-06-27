<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tes Gaya Belajar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

  <!-- Icon Bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet" />

  <!-- My Style CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>" />

  <!-- Logo Title Bar -->
  <link rel="icon" href="<?= base_url('assets/img/Logo 3-1.png') ?>" />
</head>

<body>
  <!-- Perintah Pengisian -->
  <div class="container-fluid top-tes">
    <h2>Pilihlah yang sesuai denganmu</h2>
  </div>
  <!-- End Perintah pengisian -->

  <!-- Kolom -->
  <div class="container mt-5">
    <form action="/uji/simpan1" method="post">
      <!-- Pertanyaan 1 -->

      <div class="bentuk-form pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">1. Saya memahami sesuatu dengan lebih baik setelah saya</h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="1" id="flexRadioDefault1" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-1" for="flexRadioDefault1">
            Mencoba melakukannya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="1" id="flexRadioDefault2" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-2" for="flexRadioDefault2">
            Memikirkannya dengan matang
          </label>
        </div>
      </div>

      <!-- Pertanyaan 2 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">2. Saya lebih memilih untuk dianggap </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="2" id="flexRadioDefault3" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-1" for="flexRadioDefault3">
            Realistis
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="2" id="flexRadioDefault4" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-2" for="flexRadioDefault4">
            Inovatif
          </label>
        </div>
      </div>

      <!-- Pertanyaan 3 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">3. Saat saya berpikir tentang apa yang saya lakukan kemarin, saya paling mungkin memperoleh </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="3" id="flexRadioDefault5" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-1" for="flexRadioDefault5">
            Gambar
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="3" id="flexRadioDefault6" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-2" for="flexRadioDefault6">
            Kata-kata
          </label>
        </div>
      </div>

      <!-- Pertanyaan 4 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">4. Saya cenderung </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="4" id="flexRadioDefault7" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault7">
            Memahami rincian dari suatu topik tetapi mungkin kabur tentang struktur secara keseluruhan
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="4" id="flexRadioDefault8" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-2" for="flexRadioDefault8">
            Memahami struktur secara keseluruhan tetapi mungkin kabur tentang rincian.
          </label>
        </div>
      </div>

      <!-- Pertanyaan 5 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">5. Saat saya belajar sesuatu yang baru, hal itu membantu saya untuk </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="5" id="flexRadioDefault9" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-1" for="flexRadioDefault9">
            Membicarakan tentang itu
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="5" id="flexRadioDefault10" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-2" for="flexRadioDefault10">
            Memikirkan tentang hal itu.
          </label>
        </div>
      </div>

      <!-- Pertanyaan 6 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">6. Jika saya seorang guru, saya lebih memilih mengajar suatu mata pelajaran </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="6" id="flexRadioDefault11" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-1" for="flexRadioDefault11">
            Yang berurusan dengan fakta dan situasi nyata
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="6" id="flexRadioDefault12" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-2" for="flexRadioDefault12">
            Yang berurusan dengan ide dan teori
          </label>
        </div>
      </div>

      <!-- Pertanyaan 7 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">7. Saya lebih memilih untuk mendapatkan informasi baru dalam </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="7" id="flexRadioDefault13" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-1" for="flexRadioDefault13">
            Gambar, diagram, grafik, atau peta
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="7" id="flexRadioDefault14" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-2" for="flexRadioDefault14">
            Arahan tertulis atau informasi verbal
          </label>
        </div>
      </div>

      <!-- Pertanyaan 8 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">8. Setelah saya memahami </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="8" id="flexRadioDefault15" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-1" for="flexRadioDefault15">
            Semua bagian, saya memahami seluruh hal
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="8" id="flexRadioDefault16" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-2" for="flexRadioDefault16">
            Seluruh hal, saya melihat bagaimana bagian-bagian itu cocok
          </label>
        </div>
      </div>

      <!-- Pertanyaan 9 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">9. Dalam sebuah kelompok belajar yang bekerja pada materi yang sulit, saya lebih mungkin </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="9" id="flexRadioDefault17" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-1" for="flexRadioDefault17">
            Langsung masuk dan memberikan ide
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="9" id="flexRadioDefault18" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-2" for="flexRadioDefault18">
            Duduk dan mendengarkan
          </label>
        </div>
      </div>

      <!-- Pertanyaan 10 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">10. Saya menemukan lebih mudah bagi saya </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="10" id="flexRadioDefault19" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-1" for="flexRadioDefault19">
            Untuk belajar fakta
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="10" id="flexRadioDefault20" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-2" for="flexRadioDefault20">
            Untuk belajar konsep
          </label>
        </div>
      </div>

      <!-- Pertanyaan 11 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">11. Dalam sebuah buku dengan banyak gambar dan diagram, saya mungkin </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="11" id="flexRadioDefault21" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-1" for="flexRadioDefault21">
            Memeriksa gambar dan diagram dengan hati-hati
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="11" id="flexRadioDefault22" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1 option-2" for="flexRadioDefault22">
            Fokus pada teks yang ditulis
          </label>
        </div>
      </div>
      <div class="row">
        <div class="col">

        </div>
        <div class="col">
          <div class="mt-3 lanjut-btn">
            <input type="submit" name="submit" class="btn btn-warning" value="Selanjutnya" />
          </div>
        </div>
      </div>
    </form>
  </div>
  <br>
  <br>
  <!-- End of Kolom -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>