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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" />
    <!-- export -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.dataTables.min.css" />

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                <li class="">
                    <a href="/admin/datasiswa" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-clipboard-data me-2"></i>Data Siswa</a>
                </li>
                <li class="active">
                    <a href="/admin/hasiltes" class="text-decoration-none px-3 py-2 d-block"><i class="bi bi-file-earmark-bar-graph me-2"></i>Hasil Tes</a>
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
                    <h2><strong>Hasil Tes Siswa</strong></h2>
                    <p>Berikut adalah hasil tes dari siswa yang sudah mengrjakan tes gaya belajar</p>
                </div>
                <?php if (session()->getFlashdata('msg')) : ?>
                    <div class="alert alert-danger mt-3 mb-2" id="flashdata"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                    <h3>Kelompokkan Data Siswa</h3>
                    <p>Untuk mengelompokkan siswa kedalam kelompok isilah for dibawah ini!</p>
                    <div class="row">
                        <div class="col">
                            <form action="/hitung" method="post">
                                <div class="form-label">
                                    <label for="kelas" class="form-label">Nama Kelas</label>
                                    <select class="js-example-basic-single form-select" name="namakelas" id="kelas">
                                        <option selected disabled>Pilih Kelas</option>
                                        <?php foreach ($kelas as $value) { ?>
                                            <option value="<?= $value; ?>"><?= $value; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-label">
                                    <label for="jumlah" class="form-label">Jumlah Kelompok</label>
                                    <input type="number" name="jumlah" class="form-control" id="jumlah">
                                </div>
                                <button type="submit" class="btn btn-primary mb-5">Submit</button>
                            </form>
                        </div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
                    <table id="example" class="table table-striped pt-3" style="width:100%">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col" data-priority="1">Nama Siswa</th>
                                <th scope="col">NIS</th>
                                <th scope="col" data-priority="2">Kode Kelas</th>
                                <th scope="col">Aktif/Reflektif</th>
                                <th scope="col">Sensing/Intuitif</th>
                                <th scope="col">Visual/Verbal</th>
                                <th scope="col">Sequintal/Global</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($tes as $value) { ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $value['nama']; ?></td>
                                    <td><?= $value['kodesiswa']; ?></td>
                                    <td><?= $value['kodekelas']; ?></td>
                                    <td><?= $value['aktif']; ?></td>
                                    <td><?= $value['sensing']; ?></td>
                                    <td><?= $value['visual']; ?></td>
                                    <td><?= $value['sequintal']; ?></td>
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
        <!-- End of Content -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
    <!-- Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $(".js-example-basic-single").select2();
        });

        // Mencari elemen dengan kelas alert dan menampilkannya dengan efek fadeIn
        const alertBox = document.querySelector('.alert');
        if (alertBox) {
            alertBox.style.display = 'none';
            alertBox.style.opacity = '0';
            alertBox.style.transition = 'opacity 0.5s ease-in-out';
            alertBox.style.display = 'block';
            alertBox.style.opacity = '1';
            // Menunda tampilan selama 3 detik sebelum menyembunyikan elemen
            setTimeout(() => {
                alertBox.style.opacity = '0';
                setTimeout(() => {
                    alertBox.style.display = 'none';
                }, 500);
            }, 5000);
        }
    </script>
</body>

</html>