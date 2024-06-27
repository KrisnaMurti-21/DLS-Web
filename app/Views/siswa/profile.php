<?= $this->extend('siswa/layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <?php if (isset($validation)) : ?>
        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
    <?php endif; ?>
    <div class="row pt-5 px-4">
        <div class="col">
            <h2 class="text-white ps-4">My Profile</h2>
            <div class="shadow p-5 mb-5 bg-body-tertiary rounded">
                <div class="row">
                    <div class="col">
                        <h3>Personal Information</h3>
                    </div>
                    <div class="col text-end"><a href="#" class="border border-3 px-3 py-1 rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square pe-1"></i>Edit</a></div>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <h5 class="text-body-tertiary">Nama</h5>
                        <p class="fs-5"><?= session()->get('nama') ?></p>
                    </div>
                    <div class="col">
                        <h5 class="text-body-tertiary">NIS</h5>
                        <p class="fs-5"><?= session()->get('nis') ?></p>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <h5 class="text-body-tertiary">Email</h5>
                        <p class="fs-5"><?= session()->get('email') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/siswa/update" method="post" id="saveTes">
                    <div class="mb-3">
                        <label for="InputName" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="InputName" value="<?= session()->get('nama') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputEmail1" value="<?= session()->get('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputNumber" class="form-label">NIS</label>
                        <input type="number" name="nis" class="form-control" id="InputNumber" value="<?= session()->get('nis') ?>">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitButton">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>