<?= $this->extend('end_layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <p> Hallo, Selamat Datang <b><?= user()->username; ?></b></p>
    <div class="row">
        <div class="col-sm-6 col-md-3 my-2">
            <div class="card">
                <a href="<?= base_url('admin/user') ?>" class="text-decoration-none text-body">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-expand-all bg-primary  text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-center">Total User</h5>
                        </div>
                        <h5 class="mt-4 text-center fw-bold"><?= count($user); ?></h5>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-md-3 my-2">
            <div class="card">
                <a href="<?= base_url('admin/produk') ?>" class="text-decoration-none text-body">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-expand-all bg-primary  text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-center">Total Produk</h5>
                        </div>
                        <h5 class="mt-4 text-center fw-bold"><?= count($produk); ?></h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 my-2">
            <div class="card">
                <a href="<?= base_url('admin/produk') ?>" class="text-decoration-none text-body">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-expand-all bg-primary  text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-center">Total Penjualan</h5>
                        </div>
                        <h5 class="mt-4 text-center fw-bold"><?= count($pesanan); ?></h5>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <?= $this->endSection(); ?>
    <!-- /.container-fluid -->