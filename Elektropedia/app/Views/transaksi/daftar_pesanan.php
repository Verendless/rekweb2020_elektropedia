<?= $this->extend('end_layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Pesanan</h1>
    <div class="row">
        <div class="col-md-4">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit" id="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Pesanan</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Tanggal Transaksi</th>
                        <th scope="col">Status Transaksi</th>
                        <th scope="col">Bukti Pembayaran</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php if (in_groups('User')) : ?>
                        <?php foreach ($pemesanan as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['id']; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td>Rp<?= number_format($p['totalHarga']); ?>,-</td>
                                <td><?= $p['tanggalTransaksi']; ?></td>
                                <td><?= $p['status']; ?></td>
                                <td><?= $p['fotoBukti']; ?></td>
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <?php foreach ($semuaPesanan as $p) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $p['id']; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td>Rp<?= number_format($p['totalHarga']); ?>,-</td>
                                <td><?= $p['tanggalTransaksi']; ?></td>
                                <td><?= $p['status']; ?></td>
                                <td><?= $p['fotoBukti']; ?></td>
                                <td><a href="" class="btn btn-success">Konfirmasi</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>