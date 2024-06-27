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
    <form action="/uji/simpan2" method="post" id="saveTes">
      <!-- Pertanyaan 1 -->

      <div class="bentuk-form pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">12. Saat saya menyelesaikan masalah matematika </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="1" id="flexRadioDefault1" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault1">
            Saya biasanya bekerja satu langkah demi satu langkah menuju solusi
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="1" id="flexRadioDefault2" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault2">
            Saya sering hanya melihat solusi tetapi kemudian harus berjuang untuk menemukan langkah-langkah untuk mencapainyasaya sering hanya melihat solusi tetapi kemudian harus berjuang untuk menemukan langkah-langkah untuk mencapainya
          </label>
        </div>
      </div>

      <!-- Pertanyaan 2 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">13. Dalam kelas yang saya ambil </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="2" id="flexRadioDefault3" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault3">
            Saya biasanya sudah mengenal banyak dari para siswa
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="2" id="flexRadioDefault4" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault4">
            Saya jarang mengenal banyak dari para siswa
          </label>
        </div>
      </div>

      <!-- Pertanyaan 3 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">14. Dalam membaca buku non-fiksi, saya lebih memilih </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="3" id="flexRadioDefault5" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault5">
            Sesuatu yang mengajarkan saya fakta baru atau memberitahu saya bagaimana melakukan sesuatu
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="3" id="flexRadioDefault6" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault6">
            Sesuatu yang memberikan saya ide baru untuk dipikirkan
          </label>
        </div>
      </div>

      <!-- Pertanyaan 4 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">15. Saya sukai guru </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="4" id="flexRadioDefault7" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault7">
            Yang menempelkan banyak diagram pada papan tulis
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="4" id="flexRadioDefault8" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault8">
            Yang banyak waktu menjelaskan
          </label>
        </div>
      </div>

      <!-- Pertanyaan 5 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">16. Saat saya menganalisis sebuah cerita atau novel </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="5" id="flexRadioDefault9" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault9">
            Saya memikirkan insiden dan mencoba menyatukannya untuk mengetahui tema
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="5" id="flexRadioDefault10" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault10">
            Saya hanya tahu apa tema saat saya selesai membaca dan kemudian harus kembali dan menemukan insiden yang menunjukkannya
          </label>
        </div>
      </div>

      <!-- Pertanyaan 6 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">17. Saat saya mengerjakan pekerjaan rumah, saya lebih mungkin</h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="6" id="flexRadioDefault11" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault11">
            Langsung mulai mengerjakan solusi
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="6" id="flexRadioDefault12" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault12">
            Mencoba memahami masalah terlebih dahulu
          </label>
        </div>
      </div>

      <!-- Pertanyaan 7 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">18. Saya lebih suka ide </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="7" id="flexRadioDefault13" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault13">
            Kepastian
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="7" id="flexRadioDefault14" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault14">
            Teori
          </label>
        </div>
      </div>

      <!-- Pertanyaan 8 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">19. Saya ingat terbaik </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="8" id="flexRadioDefault15" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault15">
            Apa yang saya lihat
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="8" id="flexRadioDefault16" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault16">
            Apa yang saya dengar
          </label>
        </div>
      </div>

      <!-- Pertanyaan 9 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">20. Lebih penting bagi saya bahwa seorang pengajar </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="9" id="flexRadioDefault17" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault17">
            Memaparkan materi dengan langkah-langkah berurutan yang jelas
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="9" id="flexRadioDefault18" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault18">
            Memberikan gambaran umum dan menghubungkan materi dengan subjek lain
          </label>
        </div>
      </div>

      <!-- Pertanyaan 10 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">21. Saya lebih suka belajar </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="10" id="flexRadioDefault19" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault19">
            Dalam kelompok
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="10" id="flexRadioDefault20" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault20">
            Sendiri
          </label>
        </div>
      </div>

      <!-- Pertanyaan 11 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">22. Saya lebih mungkin untuk mempertimbangkan </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="11" id="flexRadioDefault21" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault21">
            Hati-hati tentang detail pekerjaan saya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="11" id="flexRadioDefault22" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault22">
            Kreatif tentang cara mengerjakan pekerjaan saya
          </label>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col">
        <div class="mt-3">
          <a href="uji1">
            <button type="button" class="btn btn-warning">Sebelumnya</button>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="mt-3 lanjut-btn">
          <button type="button" class="btn btn-warning" id="submitButton">Selanjutnya</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <!-- End of Kolom -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="<?= base_url('assets/javascript/script.js') ?>"></script>
</body>

</html>