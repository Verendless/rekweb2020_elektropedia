<?= $this->extend('end_layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 text-gray-800">My Profile</h1>
    <hr>
    <div class="row">
        <div class="col-md-4 col-sm-12 mt-4 bg-light">
            <h4>Proile Picture</h4>
            <img src="/img/<?= $user['user_image']; ?>" width="400px" class="img-fluid p-md-auto rounded " alt="User Image Profile">
        </div>
        <div class="col-md-6 col-sm-12 mt-4 ml-md-2 bg-light">
            <h4>Detail Data Diri</h4>
            <form>
                <div class="form-group row">
                    <label class="col-md-2  col-form-label">Username</label>
                    <div class="col-md-10">
                        <input type="text" disabled class="form-control-plaintext" id="usernam" value="<?= $user['username']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2  col-form-label">Full Name</label>
                    <div class="col-md-10">
                        <input type="text" disabled class="form-control-plaintext" id="fullname" value="<?= $user['fullname'] != null ? $user['fullname'] : '-'; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2  col-form-label">Email</label>
                    <div class="col-md-10">
                        <input type="email" disabled class="form-control-plaintext" id="email" value="<?= $user['email']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2  col-form-label">No Telfon</label>
                    <div class="col-md-10">
                        <input type="text" disabled class="form-control-plaintext" id="noTelp" value="<?= $user['noTelp']; ?>">
                    </div>
                </div>
                <h4>Detail Alamat</h4>
                <div class="form-group row">
                    <label class="col-md-2  col-form-label">Provinsi</label>
                    <div class="col-md-10">
                        <input type="text" disabled class="form-control-plaintext" id="staticEmail" value="<?= $alamat['provinsi']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2  col-form-label">Kota/Kabupaten</label>
                    <div class="col-md-10">
                        <input type="text" disabled class="form-control-plaintext" id="staticEmail" value="<?= $alamat['kota']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2  col-form-label">Kecamatan</label>
                    <div class="col-md-10">
                        <input type="text" disabled class="form-control-plaintext" id="staticEmail" value="<?= $alamat['kecamatan']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2  col-form-label">Kelurahan</label>
                    <div class="col-md-10">
                        <input type="text" disabled class="form-control-plaintext" id="staticEmail" value="<?= $alamat['kelurahan']; ?>">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<!-- /.container-fluid -->