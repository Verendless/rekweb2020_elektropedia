<?= $this->extend('front_layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container">
    <h1 class="my-md-5">Laptop</h1>
    <div class="row">
        <div class="col-md-2">
            <p>Filter</p>
        </div>
        <div class="col-md-10">
            <div class="row d-flex justify-content-start">
                <?php foreach ($produkLaptop as $pl) : ?>
                    <div class="card mb-3 mx-3 shadow col-md-3">
                        <a href="/produk/<?= $pl['kategori']; ?>/<?= $pl['nama']; ?>" class="text-decoration-none text-body">
                            <img src="/img/<?= $pl['gambar']; ?>" class="card-img-top pt-4" width="300px" alt="<?= $pl['nama']; ?>">
                            <div class="card-body">
                                <p class="card-title"><?= $pl['nama']; ?></p>
                                <p class="card-text"><small>Rp <?= number_format($pl['harga']); ?>,-</small></p>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>