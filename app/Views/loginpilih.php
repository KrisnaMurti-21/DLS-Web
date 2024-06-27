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
  <div class="container-fluid position-absolute top-50 start-50 translate-middle chs text-center">
    <div class="row">
      <div class="col">
        <a href="/loginguru" style="text-decoration: none;">
          <div class="bg-warning ms-5 me-5 p-2 text-light rounded-5 mt-3"><span class="iconify" data-icon="game-icons:teacher" data-width="200" data-height="200"></span>
            <h2>Guru</h2>
          </div>
        </a>
      </div>
      <div class="col">
        <a href="/loginsiswa" style="text-decoration: none;">
          <div class="bg-warning ms-5 me-5 p-2 text-light rounded-5 mt-3"><span class="iconify" data-icon="mdi:account-school" data-width="200" data-height="200"></span>
            <h2>Siswa</h2>
          </div>
        </a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</body>

</html>