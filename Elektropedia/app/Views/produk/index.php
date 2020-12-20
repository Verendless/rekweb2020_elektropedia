<?= $this->extend('end_layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->

<!-- Page Heading -->
<section class="mt-4">

    <div class="container-fluid">

        <h1 class="h3 mb-4 text-gray-800">Produk</h1>
        <div class="row">
            <div class="col-md-4 col-sm-10">
                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" name="submit" id="submit">Cari</button>
                        </div>
                    </div>
                </form>
                <a href="/produk/create" class="mb-2">
                    <button type="button" class="btn btn-success">
                        <i class="fa fa-plus"> </i> Tambah Data Produk
                    </button>
                </a>
                <?php if (session()->getFlashData('pesan')) : ?>
                    <div class="alert alert-success mt-3" role="alert">
                        <?= session()->getFlashData('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid mt-3">
    <div class="row">
        <table class="table">
            <thead>
                <tr class="col-md-12">
                    <th scope="col">No</th>
                    <th scope="col">Foto Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($produk as $p) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>

                        <td><img src="<?= base_url(); ?>/img/<?= $p['gambar']; ?>" class="card-img gambarProduk" alt="Gambar Produk"></td>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $p['kategori']; ?></td>
                        <td>Rp <?= $p['harga']; ?></td>
                        <td><?= $p['stok']; ?></td>
                        <td><?= $p['berat']; ?>KG</td>

                        <td>
                            <a href="" class="btn btn-success">Detail</a>
                            <a href="/produk/edit/<?= $p['idProduk']; ?>" class="btn btn-primary">Ubah</a>
                            <a href="/produk/delete/<?= $p['idProduk']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Produk <?= $p['nama']; ?>?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

</div>
<?= $this->endSection(); ?>
<!-- /.container-fluid -->