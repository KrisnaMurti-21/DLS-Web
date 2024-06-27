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
    <form action="/uji/simpan4" method="post" id="saveTes">
      <!-- Pertanyaan 1 -->

      <div class="bentuk-form pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">34. Saya menganggap lebih memuji seseorang dengan memanggil mereka </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="1" id="flexRadioDefault1" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault1">
            Bijak
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="1" id="flexRadioDefault2" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault2">
            Imajinatif
          </label>
        </div>
      </div>

      <!-- Pertanyaan 2 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">35. Saat bertemu orang di pesta, saya lebih cenderung mengingat </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="2" id="flexRadioDefault3" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault3">
            Seperti apa penampilan mereka
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="2" id="flexRadioDefault4" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault4">
            Apa yang mereka katakan tentang diri mereka
          </label>
        </div>
      </div>

      <!-- Pertanyaan 3 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">36. Saat belajar suatu subjek baru, saya lebih memilih </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="3" id="flexRadioDefault5" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault5">
            Tetap fokus pada subjek tersebut, mempelajari sebanyak mungkin tentang itu
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="3" id="flexRadioDefault6" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault6">
            Mencoba membuat koneksi antara subjek tersebut dan subjek-subjek terkait
          </label>
        </div>
      </div>

      <!-- Pertanyaan 4 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">37. Saya lebih cenderung dianggap </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="4" id="flexRadioDefault7" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault7">
            Gaul
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="4" id="flexRadioDefault8" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault8">
            Tertutup
          </label>
        </div>
      </div>

      <!-- Pertanyaan 5 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">38. Saya lebih suka kursus yang memfokuskan pada </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="5" id="flexRadioDefault9" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault9">
            Materi konkret (fakta, data)
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="5" id="flexRadioDefault10" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault10">
            Materi abstrak (konsep, teori)
          </label>
        </div>
      </div>

      <!-- Pertanyaan 6 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">39. Untuk hiburan, saya lebih suka </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="6" id="flexRadioDefault11" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault11">
            Menonton televisi
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="6" id="flexRadioDefault12" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault12">
            Membaca buku
          </label>
        </div>
      </div>

      <!-- Pertanyaan 7 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">40. Beberapa guru memulai ceramah mereka dengan garis besar tentang apa yang akan mereka bahas. Garis besar seperti itu </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="7" id="flexRadioDefault13" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault13">
            Agak membantu bagi saya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="7" id="flexRadioDefault14" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault14">
            Sangat membantu bagi saya
          </label>
        </div>
      </div>

      <!-- Pertanyaan 8 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">41. Jika kalian diberikan ide guru melakukan pekerjaan rumah dalam kelompok, dengan satu nilai untuk seluruh kelompok, bagaimana pendapat kalian </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="8" id="flexRadioDefault15" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault15">
            Menarik bagi saya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="8" id="flexRadioDefault16" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault16">
            Tidak menarik bagi saya
          </label>
        </div>
      </div>

      <!-- Pertanyaan 9 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">42. Saat saya melakukan perhitungan panjang,</h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="9" id="flexRadioDefault17" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault17">
            Saya cenderung mengulangi semua langkah saya dan memeriksa pekerjaan saya dengan cermat
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="9" id="flexRadioDefault18" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault18">
            Saya merasa memeriksa pekerjaan saya melelahkan dan harus memaksakan diri untuk melakukannya
          </label>
        </div>
      </div>

      <!-- Pertanyaan 10 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">43. Saya cenderung membayangkan tempat yang saya kunjungi </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="10" id="flexRadioDefault19" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault19">
            Dengan mudah dan cukup akurat
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="10" id="flexRadioDefault20" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault20">
            Dengan susah payah dan tanpa banyak detail
          </label>
        </div>
      </div>

      <!-- Pertanyaan 11 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">44. Saat menyelesaikan masalah dalam kelompok, saya lebih mungkin </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="11" id="flexRadioDefault21" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault21">
            Memikirkan langkah-langkah dalam proses solusi
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="11" id="flexRadioDefault22" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault22">
            Memikirkan dampak atau aplikasi solusi pada berbagai area yang luas
          </label>
        </div>
      </div>

    </form>
    <div class="row">
      <div class="col">
        <div class="mt-3">
          <a href="/uji3">
            <button type="button" class="btn btn-warning">Sebelumnya</button>
          </a>
        </div>
      </div>
      <div class="col">
        <div class="mt-3 lanjut-btn">
          <button type="button" class="btn btn-warning" id="submitButton">Selesai</button>
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