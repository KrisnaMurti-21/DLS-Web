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
  <link rel="stylesheet" href="<?= base_url('/assets/css/adminstyle.css') ?>" />

  <!-- Logo Title Bar -->
  <link rel="icon" href="<?= base_url('/assets/img/Logo 3-1.png') ?>" />

  <!-- Data Tabls CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" />

  <!-- export -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.dataTables.min.css" />
</head>

<body>
  <!-- Sidebar -->
  <div class="main-container d-flex">
    <div class="sidebar" id="side_nav">
      <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
        <h1 class="fs-4">
          <span class="bg-white text-dark rounded shadow px-2 me-2">DLS</span>
        </h1>
      </div>
      <button class="btn d-md-none d-block close-btn px-1 py-0 text-white">
        <i class="bi bi-list" style="font-size: 32px"></i>
      </button>
      <ul class="list-unstyled px-2">
        <li class=" ">
          <a href="/admin" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-house-door me-2"></i>Dashboard</a>
        </li>
        <li class="">
          <a href="/admin/datasiswa" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-clipboard-data me-2"></i>Data Siswa</a>
        </li>
        <li class=" ">
          <a href="/admin/hasiltes" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-file-earmark-bar-graph me-2"></i>Olah Data</a>
        </li>
      </ul>
      <hr class="h-color mx-3" />
    </div>
    <!-- End of Sidebar -->

    <!-- Content -->
    <div class="content">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="d-flex justify-content-between d-md-none d-block">
            <a class="navbar-brand fs-4" href="#"></a>
            <button class="btn px-1 py-0 open-btn">
              <i class="bi bi-list"></i>
            </button>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <div class="dropdown text-end">
                  <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="/admin/profile">Akun</a></li>
                    <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End of Navbar -->
      <!-- Tabel -->
      <div class="dashboard-content px-3 pt-4">

        <div class="shadow p-3 mb-3 bg-body-tertiary rounded">
          <h2><strong>Hasil Perhitungan</strong></h2>
          <button class="btn_cetak" onclick="cetakHalaman()">Cetak Halaman</button>
          <?php
          foreach ($hasil as $k1) {
            foreach ($k1 as $k2) {
              $dimensi1[] = $k2[0];
              $dimensi2[] = $k2[1];
              $dimensi3[] = $k2[2];
              $dimensi4[] = $k2[3];
            }
          }
          $dimensi1_numerik = array_map('intval', $dimensi1);
          $dimensi2_numerik = array_map('intval', $dimensi2);
          $dimensi3_numerik = array_map('intval', $dimensi3);
          $dimensi4_numerik = array_map('intval', $dimensi4);
          // Mengonversi array PHP menjadi JSON
          $dimensi1_json = json_encode($dimensi1_numerik);
          $dimensi2_json = json_encode($dimensi2_numerik);
          $dimensi3_json = json_encode($dimensi3_numerik);
          $dimensi4_json = json_encode($dimensi4_numerik);
          ?>
        </div>

        <div class="shadow p-3 mb-3 bg-body-tertiary rounded">
          <div class="chartCard">
            <div class="chartBox">
              <canvas id="myChart"></canvas>
            </div>
          </div>
        </div>

        <?php
        $kel = 1;
        $a = 0;
        $b = 0;
        $c = 0;
        $d = 0;
        $n = 0;
        foreach ($hasil as $k) {
        ?>

          <div class="shadow p-3 mb-3 bg-body-tertiary rounded">
            <h5>Kelompok <?= $kel; ?></h5>
          </div>
          <div class="shadow p-3 mb-3 bg-body-tertiary rounded">
            <table id="table-data-1" class="table table-striped table-bordered tabel-data" width="100%" cellspacing="0">

              <thead>
                <tr>
                  <th scope="col">Nama</th>
                  <th scope="col">Aktif/Reflektif</th>
                  <th scope="col">Sensing/Intuitif</th>
                  <th scope="col">Visual/Verbal</th>
                  <th scope="col">Sequintal/Global</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($k as $v => $p) {
                ?>
                  <tr>
                    <td><?= $v; ?></td>

                    <?php
                    $n++;
                    ?>
                    <td><?= $p[0]; ?><?php $a += $p[0] ?></td>
                    <td><?= $p[1]; ?><?php $b += $p[1] ?></td>
                    <td><?= $p[2]; ?><?php $c += $p[2] ?></td>
                    <td><?= $p[3]; ?><?php $d += $p[3] ?></td>
                  </tr>
                <?php
                  // echo '<br>';
                } ?>
                <tr>
                  <td>Jumlah</td>
                  <td><?= $a; ?></td>
                  <td><?= $b; ?></td>
                  <td><?= $c; ?></td>
                  <td><?= $d; ?></td>
                </tr>
                <tr>
                  <td>Rata-rata</td>
                  <td><?= $bila = round($a / $n, 2); ?></td>
                  <td><?= $bilb = round($b / $n, 2); ?></td>
                  <td><?= $bilc = round($c / $n, 2); ?></td>
                  <td><?= $bild = round($d / $n, 2); ?></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="shadow p-3 mb-3 bg-body-tertiary rounded">

            <h5>Keterangan</h5>
            <h6> Nilai (+) pada tiap kolom berarti memiliki dimensi Aktif/Sensing/Visual/Sequintal</h6>
            <h6> Nilai (-) pada tiap kolom berarti memiliki dimensi Reflektif/Intuitif/Verbal/Global</h6>
            <br>
            <h5>Dimensi 1 :

              <?php
              if (-3 < $bila && $bila < 3) {
                echo "<h6>Kelompok " . $kel . " memiliki rata rata dimensi belajar yang hampir sama antara Aktif dan Reflektif</h6>";
              ?>
                <p>Karakteristik: Anda suka berpartisipasi dalam simulasi, pemecahan masalah, dan diskusi kelompok (aktif), tetapi juga menyukai proses refleksi melalui presentasi dan studi kasus (reflektif).</p>
                <p>Media elektronik yang cocok: Gunakan forum, wiki, platform pembelajaran daring, blog, obrolan (chat), atau email untuk mendukung interaksi aktif, serta e-book atau teks tertulis sebagai bahan refleksi.</p>
              <?php
              } elseif ($bila >= 3) {
                echo "<h6>Kelompok " . $kel . " memiliki dimensi gaya belajar Aktif</h6>";
              ?>
                <p>Karakteristik: Anda senang melakukan simulasi, pemecahan masalah, berdiskusi dalam kelompok, menghasilkan ide kreatif, melakukan percobaan, dan bertanya-jawab.</p>
                <p>Anda dapat menggunakan forum, wiki, platform pembelajaran daring, blog, obrolan (chat), atau email untuk belajar dengan gaya aktif Anda.</p>
              <?php
              } else {
                echo "<h6>Kelompok " . $kel . " memiliki dimensi gaya belajar Reflektif</h6>";
              ?>
                <p>Karakteristik: Anda lebih suka berpresentasi dan belajar dari studi kasus.</p>
                <p>Media Elektronik yang Cocok: Cobalah menggunakan e-book atau teks tertulis untuk memahami konten dengan lebih reflektif.</p>
              <?php
              }
              ?>
            </h5>
            <br>
            <h5>Dimensi 2 :
              <?php

              if (-3 < $bilb && $bilb < 3) {
                echo "<h6>Kelompok " . $kel . " memiliki rata rata dimensi belajar yang hampir sama antara Sensing dan Intuitif</h6>";
              ?>
                <p>Anda merasa nyaman dengan presentasi, membaca, dan pemecahan masalah (sensorik), serta memiliki kemampuan untuk berpartisipasi dalam diskusi kelompok dan simulasi dengan pendekatan intuitif (intuitif).</p>
                <p>Media elektronik yang cocok: Sediakan forum, wiki, blog, animasi, grafik, gambar, dan permainan peran, serta mesin pencari internet (Internet Search Engine) atau QCM (Questionnaire à Choix Multiples) untuk menggali lebih dalam informasi.</p>
              <?php
              } elseif ($bilb >= 3) {
                echo "<h6>Kelompok " . $kel . " memiliki dimensi gaya belajar Sensing</h6>";
              ?>
                <p>Karakteristik: Anda suka presentasi dan membaca, serta menyukai pemecahan masalah dengan permainan simulasi dan bertanya-jawab.</p>
                <p>Media Elektronik yang Cocok: Forum, wiki, blog, animasi, grafik, dan gambar akan membantu Anda dalam pembelajaran yang bersifat sensorik.</p>
              <?php
              } else {
                echo "<h6>Kelompok " . $kel . " memiliki dimensi gaya belajar Intuitif</h6>";
              ?>
                <p>Karakteristik: Anda cenderung berpartisipasi dalam diskusi kelompok, simulasi, permainan peran, dan studi kasus dengan membaca sebagai pendukung.</p>
                <p>Media Elektronik yang Cocok: Cari informasi dengan mesin pencari internet (Internet Search Engine) atau gunakan QCM (Questionnaire à Choix Multiples) sesuai dengan gaya intuitif Anda.</p>
              <?php
              }
              ?>
            </h5>
            <br>
            <h5>Dimensi 3 :
              <?php

              if (-3 < $bilc && $bilc < 3) {
                echo "<h6>Kelompok " . $kel . " memiliki rata rata dimensi belajar yang hampir sama antara Visual dan Verbal</h6>";
              ?>
                <p>Karakteristik: Anda menyukai pembelajaran melalui simulasi, presentasi, dan membaca dengan aspek visual (visual), tetapi juga merasa nyaman berpartisipasi dalam diskusi kelompok dan pemecahan masalah dengan komunikasi lisan (verbal).</p>
                <p>Media elektronik yang cocok: Gunakan forum, wiki, animasi, grafik, gambar, simulasi, dan video sebagai pendukung pembelajaran visual, serta rekaman audio dan podcast untuk pembelajaran verbal.</p>
              <?php
              } elseif ($bilc >= 3) {
                echo "<h6>Kelompok " . $kel . " memiliki dimensi gaya belajar Visual</h6>";
              ?>
                <p>Karakteristik: Anda menyukai simulasi, presentasi, dan membaca dengan dukungan visual.</p>
                <p>Media Elektronik yang Cocok: Gunakan forum, wiki, animasi, grafik, gambar, simulasi, dan video untuk memperkaya pembelajaran visual Anda.</p>
              <?php
              } else {
                echo "<h6>Kelompok " . $kel . " memiliki dimensi gaya belajar Verbal</h6>";
              ?>
                <p>Karakteristik: Anda merasa nyaman dalam diskusi kelompok, sesi brainstorming, bertanya-jawab, dan pemecahan masalah secara lisan.</p>
                <p>Media Elektronik yang Cocok: Rekaman audio dan podcast adalah media yang sesuai untuk mendukung pembelajaran gaya verbal Anda.</p>
              <?php
              }
              ?>
            </h5>
            <br>
            <h5>Dimensi 4:
              <?php

              if (-3 < $bild && $bild < 3) {
                echo "<h6>Kelompok " . $kel . " memiliki rata rata dimensi belajar yang hampir sama antara Sequintal dan Global</h6>";
              ?>
                <p>Karakteristik: Anda merasa nyaman berpresentasi dan mengajukan pertanyaan serta mencari jawaban secara berurutan (sequintal), tetapi juga tertarik dengan permainan peran, sesi brainstorming, dan studi kasus dengan perspektif global (global).</p>
                <p>Media elektronik yang cocok: Berikan materi dalam bentuk e-book dan rekaman audio untuk membantu pembelajaran berurutan, serta gunakan blog, wiki, obrolan (chat), dan email sebagai sarana kolaborasi global.</p>
              <?php
              } elseif ($bild >= 3) {
                echo "<h6>Kelompok " . $kel . " memiliki dimensi gaya belajar Sequintal</h6>";
              ?>
                <p>Karakteristik: Anda suka berpresentasi dan mengajukan pertanyaan serta mencari jawaban secara berurutan.</p>
                <p>Media Elektronik yang Cocok: E-book dan rekaman audio adalah pilihan yang tepat untuk pembelajaran berurutan.</p>
              <?php
              } else {
                echo "<h6>Kelompok " . $kel . " memiliki dimensi gaya belajar Global</h6>";
              ?>
                <p>Karakteristik: Anda tertarik dengan permainan peran, sesi brainstorming, dan studi kasus dengan perspektif global.</p>
                <p>Media Elektronik yang Cocok: Blog, wiki, obrolan (chat), dan email memungkinkan kolaborasi dengan berbagai orang dari berbagai wilayah dalam gaya pembelajaran global Anda.</p>
              <?php
              }
              ?>
            </h5>
            <br>
          </div>
        <?php
          $kel++;
          $a = 0;
          $b = 0;
          $c = 0;
          $d = 0;
        } ?>
      </div>
    </div>

    <!-- End of Content -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="<?= base_url('assets/javascript/adminscript.js') ?>"></script>
  <!-- Data Table JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <!-- Chart -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
  <script src="https://unpkg.com/@sgratzl/chartjs-chart-boxplot@3.6.0/build/index.umd.min.js"></script>
  <!-- Export -->
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.33/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.33/vfs_fonts.js"></script> -->
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>
  <script>
    var dimensi1 = <?php echo $dimensi1_json; ?>;
    var dimensi2 = <?php echo $dimensi2_json; ?>;
    var dimensi3 = <?php echo $dimensi3_json; ?>;
    var dimensi4 = <?php echo $dimensi4_json; ?>;
    // setup 
    const data = {
      labels: ['Dimensi 1', 'Dimensi 2', 'Dimensi 3', 'Dimensi 4'],
      datasets: [{
        label: 'Hasil Dimensi',
        outlierColor: '#999999',
        padding: 0,
        itemRadius: 0,
        // data: [18, 12, 6, 9, 12, 3, 9],
        data: [
          dimensi1, dimensi2, dimensi3, dimensi4
        ],
        backgroundColor: 'rgba(255, 26, 104, 0.2)',
        borderColor: 'rgba(255, 26, 104, 1)',
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'boxplot',
      data,
      options: {
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    // Instantly assign Chart.js version
    // const chartVersion = document.getElementById('chartVersion');
    // chartVersion.innerText = Chart.version;

    function randomValues(count, min, max) {
      const delta = max - min;
      return Array.from({
        length: count
      }).map(() => Math.random() * delta + min)
    }
    
    function cetakHalaman() {
      window.print();
    }
  </script>
</body>

</html>