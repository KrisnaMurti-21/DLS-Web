<?= $this->extend('siswa/layout/page_layout') ?>

<?= $this->section('content') ?>

<!-- Hero Section Plus -->
<div class="container">
  <div class="row navbar-line mt-2 mb-5"></div>
</div>

<div class="container">
  <div class="row">
    <div class="col"></div>
    <div class="col rounded-hero"></div>
  </div>
</div>
<!-- End Hero Section Plus -->

<!-- Hero Section -->
<div class="container mt-5">
  <div class="row">
    <div class="col hero-left">
      <div class="row">
        <h2 class="text-hero-1">Tes Gaya Belajar</h2>
        <h2 class="text-hero-1">Ketahuilah Gaya Belajar</h2>
        <h2 class="text-hero-1">Yang Paling Cocok Buatmu</h2>
        <h5 class="text-light"><em>Berdasarkan Gaya Belajar</em></h5>
        <h5 class="text-light"><em>Felder-Silverman</em></h5>
      </div>
      <div class="row mt-3">
        <p class="text-hero-p">
          Tingkatkan prestasimu
          <br />
          dengan gaya belajar yang sesuai
        </p>
      </div>
      <div class="row mx-auto mt-3">
        <a href="/tes">
          <button class="button-hero">Mulai Tes</button>
        </a>
      </div>
    </div>
    <div class="col hero-right">
      <div class="row">
        <img class="image-hero" src="<?= base_url('assets/img/Graduation-rafiki 1.png') ?>" alt="" />
      </div>
    </div>
  </div>
</div>
<!-- End of Hero Section -->

<!-- Judul Macam Gaya -->
<div class="container mt-5">
  <div class="row j-gaya">
    <h2>4 Dimensi Gaya Belajar</h2>
    <p>Macam Tipe Gaya Belajar</p>
  </div>
</div>
<!-- End Judul Macam Gaya -->

<!-- Gaya Belajar Aktif Reflektif -->
<div class="container mt-5">
  <div class="row">
    <div class="col-7 gb">
      <div class="gambar-transparan">
        <img class="transparent-icon" src="<?= base_url('assets/img/fa6-solid_gears.png') ?>" alt="" />
      </div>
      <div class="tulisan">
        <h5 class="gb-jp">Gaya Belajar Aktif dan Reflektif</h5>
        <p class="gb-p mt-4 mb-4">
          Pelajar aktif cenderung menyimpan dan memahami informasi paling
          baik dengan melakukan sesuatu yang aktif dengannya, mis.
          mendiskusikan atau menerapkannya atau menjelaskannya kepada orang
          lain. Pembelajar reflektif lebih suka memikirkan hal-hal dengan
          tenang terlebih dahulu.
        </p>
        <a class="selengkapnya" href="#">Selengkapnya >>></a>
      </div>
    </div>
    <div class="col-5 image-gbs">
      <img class="image-gb" src="<?= base_url('assets/img/Grades-rafiki 1.png') ?>" alt="image-gb" />
    </div>
  </div>
</div>
<!-- End of Gaya Belajar AR -->

<!-- Gaya Belajar Sensing Intuitif -->
<div class="container mt-5">
  <div class="row">
    <div class="col-5 image-gbs">
      <img class="image-gb" src="<?= base_url('assets/img/Choose-rafiki 1.png') ?>" alt="image-gb" />
    </div>
    <div class="col-7 gb-kiri">
      <div class="gambar-transparan-kiri">
        <img src="<?= base_url('assets/img/ph_ear.png') ?>" alt="" />
      </div>
      <div class="tulisan">
        <h5 class="gb-jp">Gaya Belajar Sensing dan Intuitif</h5>
        <p class="gb-p mt-4 mb-4">
          Pelajar penginderaan cenderung menyukai fakta pembelajaran;
          pelajar intuitif sering lebih suka menemukan kemungkinan dan
          hubungan.
        </p>
        <a class="selengkapnya" href="#">Selengkapnya >>></a>
      </div>
    </div>
  </div>
</div>
<!-- End of Gaya Belajar SI -->

<!-- Gaya Belajar Visual Verbal -->
<div class="container mt-5">
  <div class="row">
    <div class="col-7 gb">
      <div class="gambar-transparan">
        <img class="transparent-icon" src="<?= base_url('assets/img/ic_outline-remove-red-eye.png') ?>" alt="" />
      </div>
      <div class="tulisan">
        <h5 class="gb-jp">Gaya Belajar Visual dan Verbal</h5>
        <p class="gb-p mt-4 mb-4">
          Pembelajar visual paling baik mengingat apa yang mereka lihat,
          mis. gambar, diagram, diagram alir, garis waktu, film,
          demonstrasi, dll. Pelajar verbal mendapatkan lebih banyak dari
          kata-kata seperti penjelasan tertulis dan lisan. Setiap orang
          belajar lebih banyak ketika informasi disajikan baik secara visual
          maupun verbal.
        </p>
        <a class="selengkapnya" href="#">Selengkapnya >>></a>
      </div>
    </div>
    <div class="col-5 image-gbs">
      <img class="image-gb" src="<?= base_url('assets/img/Kindergarten student-rafiki 1.png') ?>" alt="image-gb" />
    </div>
  </div>
</div>
<!-- End of Gaya Belajar VV -->

<!-- Gaya Belajar Berurutan Global -->
<div class="container mt-5">
  <div class="row">
    <div class="col-5 image-gbs">
      <img class="image-gb" src="<?= base_url('assets/img/Exams-rafiki 1.png') ?>" alt="image-gb" />
    </div>
    <div class="col-7 gb-kiri">
      <div class="gambar-transparan-kiri">
        <img src="<?= base_url('assets/img/mdi_clipboard-list-outline.png') ?>" alt="" />
      </div>
      <div class="tulisan">
        <h5 class="gb-jp">Gaya Belajar Berurutan dan Global</h5>
        <p class="gb-p mt-4 mb-4">
          Pembelajar berurutan cenderung mendapatkan pemahaman dalam
          langkah-langkah linier, dengan setiap langkah mengikuti secara
          logis dari langkah sebelumnya. Pembelajar global cenderung belajar
          dalam lompatan besar, menyerap materi hampir secara acak tanpa
          melihat koneksi, dan kemudian tiba-tiba "mengerti".
        </p>
        <a class="selengkapnya" href="#">Selengkapnya >>></a>
      </div>
    </div>
  </div>
</div>
<!-- End of Gaya Belajar BG -->

<!-- Section Adv -->
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col mb-5 pb-5">
      <div class="gambar-transparan">
        <img src="<?= base_url('assets/img/Kotak.png') ?>" alt="" />
      </div>
      <div class="papan mx-auto">
        <h2 class="pt-5 papan-t mx-auto pb-3">
          Tertarik Mengetahui Gaya Belajar Kamu?
        </h2>
        <p class="pb-4">Klik tombol dibawah ini untuk memulai tes</p>
        <a href="/tes">
          <button type="button" class="button-hero">Mulai Tes</button>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- End of Section Adv -->

<?= $this->endSection() ?>