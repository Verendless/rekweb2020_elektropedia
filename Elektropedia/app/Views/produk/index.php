<?= $this->extend('end_layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->


<!-- Page Heading -->
<section class="mt-4">

    <div class="container-fluid">

        <h1 class="h3 mb-4 text-gray-800">Produk</h1>
        <div class="row">
            <div class="col-4 ">
                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" name="submit" id="submit">Cari</button>
                        </div>
                    </div>

                </form>

                <a href="/produk/create">
                    <button type="button" class="btn btn-success">
                        <i class="fa fa-plus"> </i> Tambah Data Produk
                    </button>

                </a>
                </p>


                <?php if (session()->getFlashData('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashData('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto Produk</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($produk as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>


                            <td><img src="/img/ $p['gambar']; ?>" class="gambar" alt=""></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['harga']; ?></td>

                            <td>
                                <a href="/produk/<?= $p['idBarang']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>

</div>

</div>
<?= $this->endSection(); ?>
<!-- /.container-fluid -->