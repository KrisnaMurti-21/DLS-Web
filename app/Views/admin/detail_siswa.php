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

    <!-- Data Tables CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
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
                    <span class="text-white">DLS Web</span>
                </h1>
            </div>
            <button class="btn d-md-none d-block close-btn px-1 py-0 text-white">
                <i class="bi bi-list" style="font-size: 32px"></i>
            </button>
            <ul class="list-unstyled px-2">
                <li class="">
                    <a href="/admin" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-house-door me-2"></i>Dashboard</a>
                </li>
                <li class="active">
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
                        <a class="navbar-brand fs-4" href="#">DLS Web</a>
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
                <div class="shadow p-3 mb-3 bg-body-tertiary rounded">
                    <h2 class="fs-2">Data Siswa</h2>
                </div>
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded">

                    <!-- Ini adalah bagian detail siswa -->
                    <h4>Nama</h4>
                    <?= $siswa['nama']; ?>
                    <br>
                    <br>
                    <h4>NIS</h4>
                    <?= $siswa['kodesiswa']; ?>
                    <br>
                    <br>
                    <h4>Dimensi Pemrosesan</h4>
                    <p>Hasil dari dimensi pemrosesan siswa adalah
                        <?= ($siswa['aktif'] > 1) ? 'Aktif' : 'Reflektif'; ?>
                        <br>
                        Dengan nilai dimensi yaitu <?= abs($siswa['aktif']); ?>
                        <br>
                        <?php
                        $tingkat = $siswa['aktif'];
                        if (($tingkat >= 1 && $tingkat <= 3) || ($tingkat >= -3 && $tingkat <= -1)) {
                            echo 'Yang berarti siswa masih memiliki rata rata dimensi belajar yang hampir sama antara Aktif dan Reflektif';
                        } elseif ($tingkat > 3 || $tingkat < -3) {
                            echo 'Yang berarti siswa cenderung untuk bisa belajar dengan menggunakan gaya belajar yang tertera';
                        }
                        ?>
                    </p>
                    <h4>Dimensi Persepsi</h4>
                    <p>Hasil dari dimensi persepsi siswa adalah
                        <?= ($siswa['sensing'] > 1) ? 'Sensing' : 'Intuitif'; ?>
                        <br>
                        Dengan nilai dimensi yaitu <?= abs($siswa['sensing']); ?>
                        <br>
                        <?php
                        $tingkat = $siswa['sensing'];
                        if (($tingkat >= 1 && $tingkat <= 3) || ($tingkat >= -3 && $tingkat <= -1)) {
                            echo 'Yang berarti siswa masih memiliki rata rata dimensi belajar yang hampir sama antara Sensing dan Intuitif';
                        } elseif ($tingkat > 3 || $tingkat < -3) {
                            echo 'Yang berarti siswa cenderung untuk bisa belajar dengan menggunakan gaya belajar yang tertera';
                        }
                        ?>
                    </p>
                    <h4>Dimensi Input</h4>
                    <p>Hasil dari dimensi input siswa adalah
                        <?= ($siswa['visual'] > 1) ? 'Visual' : 'Verbal'; ?>
                        <br>
                        Dengan nilai dimensi yaitu <?= abs($siswa['visual']); ?>
                        <br>
                        <?php
                        $tingkat = $siswa['visual'];
                        if (($tingkat >= 1 && $tingkat <= 3) || ($tingkat >= -3 && $tingkat <= -1)) {
                            echo 'Yang berarti siswa masih memiliki rata rata dimensi belajar yang hampir sama antara Visual dan Verbal';
                        } elseif ($tingkat > 3 || $tingkat < -3) {
                            echo 'Yang berarti siswa cenderung untuk bisa belajar dengan menggunakan gaya belajar yang tertera';
                        }
                        ?>
                    </p>
                    <h4>Dimensi Pemahaman</h4>
                    <p>Hasil dari dimensi pemahaman siswa adalah
                        <?= ($siswa['sequintal'] > 1) ? 'Sequintal' : 'Global'; ?>
                        <br>
                        Dengan nilai dimensi yaitu <?= abs($siswa['sequintal']); ?>
                        <br>
                        <?php
                        $tingkat = $siswa['sequintal'];
                        if (($tingkat >= 1 && $tingkat <= 3) || ($tingkat >= -3 && $tingkat <= -1)) {
                            echo 'Yang berarti siswa masih memiliki rata rata dimensi belajar yang hampir sama antara Sequintal dan Global';
                        } elseif ($tingkat > 3 || $tingkat < -3) {
                            echo 'Yang berarti siswa cenderung untuk bisa belajar dengan menggunakan gaya belajar yang tertera';
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- End of Content -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>

    <script src="<?= base_url('assets/javascript/adminscript.js') ?>"></script>
    <!-- Data Table JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <!-- Export -->
    <script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>
</body>

</html>