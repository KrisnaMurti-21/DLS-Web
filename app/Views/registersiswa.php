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
  <div class="container-fluid position-absolute top-50 start-50 pt-5 ps-md-5 pe-md-5 translate-middle login-layer">
    <form action="/savesiswa" method="post">
      <h2 class="text-center fw-bold">Register</h2>
      <?php if (isset($validation)) : ?>
        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
      <?php endif; ?>
      <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" id="exampleInputName1" />
      </div>
      <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="number" name="nis" class="form-control" id="nis">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" />
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Masukkan Kembali Password</label>
        <input type="password" name="confpassword" class="form-control" id="exampleInputPassword1" />
      </div>
      <div class="mb-3"><a href="/loginsiswa">Sudah memiliki akun?</a></div>
      <button type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script>
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
      }, 10000);
    }
  </script>
</body>

</html>