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
    <form action="/uji/save" method="post">
      <!-- Pertanyaan -->
      <?php foreach ($result as $key) {
      ?>
        <div class="bentuk-form mt-5 pt-3 pb-3 ps-sm-5 ps-3 pe-sm-5 pe-3">
          <h5 class="pt-2">
            <?= $key["idsoal"];
            echo ". ";
            echo $key["quest"];
            ?>
          </h5>
          <div class="form-check py-3 ps-1">
            <input class="form-check-input" type="radio" name="<?= $key['idsoal']; ?>" id="flexRadioDefault<?= $key['idsoal']; ?>a" value="1" />
            <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-1" for="flexRadioDefault<?= $key['idsoal']; ?>a">
              <?= $key['answer1']; ?>
            </label>
          </div>
          <div class="form-check ps-1">
            <input class="form-check-input" type="radio" name="<?= $key['idsoal']; ?>" id="flexRadioDefault<?= $key['idsoal']; ?>b" value="-1" />
            <label class="form-check-label label-shape pt-2 pb-2 ps-4 pe-4 option-2" for="flexRadioDefault<?= $key['idsoal']; ?>b">
              <?= $key['answer2']; ?>
            </label>
          </div>
        </div>
      <?php } ?>

      <div class="row mt-5 mx-3">
        <input type="submit" name="submit" class="btn btn-warning py-3 rounded-pill" value="Submit" />
      </div>
    </form>
  </div>
  <br>
  <br>
  <!-- End of Kolom -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>