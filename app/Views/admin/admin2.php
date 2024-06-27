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
          <span class="bg-white text-dark rounded shadow px-2 me-2">CL</span>
          <span class="text-white">Coding League</span>
        </h1>
      </div>
      <button class="btn d-md-none d-block close-btn px-1 py-0 text-white">
        <i class="bi bi-list" style="font-size: 32px"></i>
      </button>
      <ul class="list-unstyled px-2">
        <li class="active">
          <a href="/admin/admin.html" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-house-door me-2"></i>Dashboard</a>
        </li>
        <li class="">
          <a href="/admin/datasiswa.html" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-clipboard-data me-2"></i>Data Siswa</a>
        </li>
        <li class=" ">
          <a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-file-earmark-bar-graph me-2"></i>Olah Data</a>
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
            <a class="navbar-brand fs-4" href="#">Coding League</a>
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
                <div class="dropdown">
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
        <h2 class="fs-2">Dashboard</h2>
        <p>Selamat datang di bagian dashboard Tes Gaya Belajar</p>
        <br>
        <h3 class="fs-3">Buat Kelas</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="bi bi-plus"></i>Tambah Kelas
        </button>
        <div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Guru</th>
                <th scope="col">Nama Kelas</th>
                <th scope="col">Kode Kelas</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach ($result as $value) { ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $value['idguru']; ?></td>
                  <td><?= $value['namakelas']; ?></td>
                  <td><?= $value['kodekelas']; ?></td>
                </tr>
              <?php
                $i++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kelas</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="admin/tambah" method="post" id="addClass">
              <div class="mb-3">
                <label for="namakelas" class="form-label">Nama Kelas</label>
                <input type="text" name="namakelas" class="form-control" id="namakelas" aria-describedby="">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="submitButton">Tambah</button>
          </div>
        </div>
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
  <!-- Export -->
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>
</body>

</html>