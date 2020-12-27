<?= $this->extend('end_layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 text-gray-800">Ubah Data Diri</h1>
    <hr>
    <form action="/user/update_profile/<?= $user['id']; ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4 col-sm-12 mt-md-4 bg-light">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $user['id']; ?>">
                <input type="hidden" name="gambarLama" value="<?= $user['user_image']; ?>">
                <h4>Ubah Proile Picture</h4>
                <img src="/img/<?= $user['user_image']; ?>" width="241px" class="img-fluid p-md-auto rounded img-preview mb-1" alt="User Image Profile">
                <div class="custom-file">
                    <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                    <div class="invalid-feedback">
                        <?= $validation->getError('gambar'); ?>
                    </div>
                    <label class="custom-file-label" for="gambar"><?= $user['user_image']; ?></label>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mt-4 ml-md-2 bg-light">
                <h4>Ubah Detail Data Diri</h4>
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('username')) ?
                                                                    'is-invalid' : '';  ?>" id="username" name="username" autofocus value="<?= $user['username']; ?>">
                        <p class="my-md-auto">Username adalah nama yang akan ditampilkan</p>
                        <div class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $user['fullname'] != null ? $user['fullname'] : '-'; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="noTelp" class="col-sm-2 col-form-label">Nomor Telefon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="noTelp" name="noTelp" value="<?= $user['noTelp']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data </button>
                    </div>
                </div>
            </div>
    </form>
</div>
<?= $this->endSection(); ?>
<!-- /.container-fluid -->