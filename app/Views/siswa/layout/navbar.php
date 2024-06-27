<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="<?= base_url('assets/img/Logo 3-1.png') ?>" alt="Logo" height="50" class="d-inline-block align-text-top" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
                <li class="nav-item mx-2">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/siswa/manfaat">Manfaat</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/siswa/jenis">Jenis</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/tes">Tes</a>
                </li>
            </ul>
            <div>
                <div class="dropdown-center text-center">
                    <div class="btn-group border rounded-pill border-2">
                        <button class="btn dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/siswa/profile">Akun</a></li>
                            <li><a class="dropdown-item" href="/siswa/hasil">Hasil Tes</a></li>
                            <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- End of Navbar -->