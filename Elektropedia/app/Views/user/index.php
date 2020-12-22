<?= $this->extend('end_layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 text-gray-800">My Profile</h1>
    <hr>
    <div class="row">
        <div class="col-4 mt-md-4 bg-light">
            <div class="container">
                <h4>Proile Picture</h4>
                <img src="/img/<?= $user['user_image']; ?>" width="400px" class="img-fluid p-md-auto rounded " alt="User Image Profile">
            </div>
        </div>
        <div class="col-6 mt-md-4 ml-md-2 bg-light">
            <h4>Detail Data Diri</h4>
            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" disabled class="form-control-plaintext" id="staticEmail" value="<?= $user['username']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" disabled class="form-control-plaintext" id="staticEmail" value="<?= user()->fullname != null ? user()->fullname : '-'; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" disabled class="form-control-plaintext" id="staticEmail" value="<?= user()->email; ?>">
                    </div>
                </div>
                <h4>Detail Alamat</h4>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" disabled class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<!-- /.container-fluid -->