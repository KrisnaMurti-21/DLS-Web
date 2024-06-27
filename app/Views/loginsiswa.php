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
    <form action="/prosessiswa" method="post">
      <h2 class="text-center fw-bold">LOGIN</h2>
      <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-danger" id="flashdata"><?= session()->getFlashdata('msg') ?></div>
      <?php endif; ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
      </div>
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <div class="input-group mb-3">
        <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
        <span class="input-group-text" onclick="password_show_hide();">
          <i class="bi bi-eye" id="show_eye"></i>
          <i class="bi bi-eye-slash d-none" id="hide_eye"></i>
        </span>
      </div>
      <div class="mb-3">
        <a href="/regissiswa">
          <p>Belum memiliki akun?</p>
        </a>
      </div>
      <button type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script>
    function password_show_hide() {
      var x = document.getElementById("password");
      var show_eye = document.getElementById("show_eye");
      var hide_eye = document.getElementById("hide_eye");
      hide_eye.classList.remove("d-none");
      if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
      } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
      }
    }

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
      }, 3000);
    }
  </script>
</body>

</html>