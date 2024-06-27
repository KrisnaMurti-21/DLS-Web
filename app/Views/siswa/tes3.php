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
    <form action="/uji/simpan3" method="post" id="saveTes">
      <!-- Pertanyaan 1 -->

      <div class="bentuk-form pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">23. Saat saya mendapatkan petunjuk ke tempat baru, saya lebih suka </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="1" id="flexRadioDefault1" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault1">
            Peta
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="1" id="flexRadioDefault2" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault2">
            Petunjuk tertulis
          </label>
        </div>
      </div>

      <!-- Pertanyaan 2 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">24. Saya belajar </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="2" id="flexRadioDefault3" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault3">
            Dengan kecepatan yang cukup teratur
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="2" id="flexRadioDefault4" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault4">
            Dengan cara yang cocok dan mulai belajar
          </label>
        </div>
      </div>

      <!-- Pertanyaan 3 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">25. Saya lebih suka terlebih dahulu </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="3" id="flexRadioDefault5" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault5">
            Mencoba berbagai hal
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="3" id="flexRadioDefault6" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault6">
            Memikikan bagaimana saya akan melakukannya
          </label>
        </div>
      </div>

      <!-- Pertanyaan 4 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">26. Saat saya membaca untuk menikmati suatu buku, saya suka penulis yang </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="4" id="flexRadioDefault7" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault7">
            Dengan jelas mengatakan apa yang mereka maksud
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="4" id="flexRadioDefault8" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault8">
            Mengatakan hal-hal dengan cara yang kreatif dan menarik
          </label>
        </div>
      </div>

      <!-- Pertanyaan 5 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">27. Saat saya melihat diagram atau sketsa di kelas, saya paling mungkin ingat </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="5" id="flexRadioDefault9" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault9">
            Gambar
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="5" id="flexRadioDefault10" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault10">
            Apa yang dikatakan oleh pengajar tentang itu
          </label>
        </div>
      </div>

      <!-- Pertanyaan 6 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">28. Ketika mempertimbangkan suatu informasi, saya lebih cenderung </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="6" id="flexRadioDefault11" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault11">
            Fokus pada detail dan melewatkan gambaran besar
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="6" id="flexRadioDefault12" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault12">
            Mencoba untuk memahami gambaran besar sebelum memasuki detail
          </label>
        </div>
      </div>

      <!-- Pertanyaan 7 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">29. Saya lebih mudah mengingat </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="7" id="flexRadioDefault13" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault13">
            Sesuatu yang saya lakukan
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="7" id="flexRadioDefault14" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault14">
            Sesuatu yang saya pikirkan banyak
          </label>
        </div>
      </div>

      <!-- Pertanyaan 8 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">30. Ketika harus melakukan suatu tugas, saya lebih memilih </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="8" id="flexRadioDefault15" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault15">
            Menguasai satu cara melakukannya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="8" id="flexRadioDefault16" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault16">
            Menemukan cara baru melakukannya
          </label>
        </div>
      </div>

      <!-- Pertanyaan 9 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">31. Ketika seseorang menunjukkan data kepada saya, saya lebih memilih </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="9" id="flexRadioDefault17" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault17">
            Grafik atau diagram
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="9" id="flexRadioDefault18" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault18">
            Teks yang merangkum hasil
          </label>
        </div>
      </div>

      <!-- Pertanyaan 10 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">32. Ketika menulis makalah, saya lebih cenderung </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="10" id="flexRadioDefault19" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault19">
            Mengerjakan (memikirkan atau menulis) bagian awal makalah dan melanjutkannya
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="10" id="flexRadioDefault20" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault20">
            Mengerjakan (memikirkan atau menulis) bagian-bagian yang berbeda dari makalah dan kemudian mengurutkannya
          </label>
        </div>
      </div>

      <!-- Pertanyaan 11 -->
      <div class="bentuk-form mt-5 pt-3 pb-3 ps-5 pe-5">
        <h5 class="pt-2">33. Ketika harus bekerja pada proyek kelompok, saya ingin pertama-tama </h5>
        <div class="form-check py-3">
          <input class="form-check-input" type="radio" name="11" id="flexRadioDefault21" value="1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault21">
            Memiliki "brainstorming kelompok" di mana setiap orang berkontribusi ide
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="11" id="flexRadioDefault22" value="-1" />
          <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault22">
            Berpikir secara individual dan kemudian berkumpul sebagai kelompok untuk membandingkan ide
          </label>
        </div>
      </div>
    </form>
    <div class="row">
      <div class="col">
        <div class="mt-3">
          <a href="/uji2">
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