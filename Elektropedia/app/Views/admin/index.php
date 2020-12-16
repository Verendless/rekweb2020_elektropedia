<?= $this->extend('end_layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <p> Hallo Selamat Datang <b><?= user()->username; ?></b></p>
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-heading p-4">
                    <div class="mini-stat-icon float-right">
                        <i class="mdi mdi-file-pdf bg-danger text-white"></i>
                    </div>
                    <div>
                        <a href="<?= base_url('admin/user') ?> " class="font-16">TOTAL USER</a>
                    </div>
                    <h3 class="mt-4">10</h3>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-heading p-4">
                    <div class="mini-stat-icon float-right">
                        <i class="mdi mdi-expand-all bg-primary  text-white"></i>
                    </div>
                    <div>
                        <a href="<?= base_url('kategori') ?>" class="font-16">PRODUK</a>
                    </div>
                    <h3 class="mt-4"></h3>

                </div>
            </div>


        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-heading p-4">
                    <div class="mini-stat-icon float-right">
                        <i class="mdi mdi-fireplace-off bg-success text-white"></i>
                    </div>
                    <div>
                        <a href="<?= base_url('dep') ?>" class="font-16">KATEGORI</a>
                    </div>
                    <h3 class="mt-4"></h3>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-heading p-4">
                    <div class="mini-stat-icon float-right">
                        <i class="mdi mdi-fireplace-off bg-success text-white"></i>
                    </div>
                    <div>
                        <a href="<?= base_url('dep') ?>" class="font-16">PENJUALAN</a>
                    </div>
                    <h3 class="mt-4"></h3>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>
<!-- /.container-fluid -->