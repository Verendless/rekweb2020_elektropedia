<?= $this->extend('front_layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container">
    <h1 class="my-md-5"><?= $title; ?></h1>
    <?php if (session()->getFlashData('pesan')) : ?>
        <div class="alert alert-success mt-3" role="alert">
            <?= session()->getFlashData('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Filter</h5>
                    <hr>
                    <h6 class="card-subtitle mb-2 text-muted">Kategori</h6>
                    <ul class="list-group list-group-flush ">
                        <li class="list-group-item">Laptop</li>
                        <li class="list-group-item">Smartphone</li>
                        <li class="list-group-item">Kamera</li>
                        <li class="list-group-item">Aksesoris</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row row-cols-1 row-cols-md-5 ">
                <?php if ($produk != null) : ?>
                    <?php foreach ($produk as $p) : ?>
                        <div class="col mb-md-3">
                            <a href="/produk/<?= $p['kategori']; ?>/<?= $p['nama']; ?>" class="text-decoration-none text-body">
                                <div class="card h-100">
                                    <img src="/img/<?= $p['gambar']; ?>" class="card-img-top pt-4" width="300px" alt="<?= $p['nama']; ?>">
                                    <div class="card-body">
                                        <h6 class="card-title"><?= $p['nama']; ?></h6>
                                        <p class="card-text"><small>Rp<?= number_format($p['harga']); ?>,-</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                <?php else : ?>
                    <h1 class="text-center col-md-12 mb-5">Tidak ada Produk</h1>
                    <hr class="col-md-12 mb-5">
                    <h5 class="col-md-12">Produk yang mungkin anda suka</h5>
                    <?php $i = 0;
                    foreach ($produkLain as $p) : ?>
                        <?php if ($produkLain != null && $i < 5) : ?>
                            <div class="col mb-md-3">
                                <a href="/produk/<?= $p['kategori']; ?>/<?= $p['nama']; ?>" class="text-decoration-none text-body">
                                    <div class="card h-100">
                                        <img src="/img/<?= $p['gambar']; ?>" class="card-img-top pt-4" width="300px" alt="<?= $p['nama']; ?>">
                                        <div class="card-body">
                                            <h6 class="card-title"><?= $p['nama']; ?></h6>
                                            <p class="card-text"><small>Rp<?= number_format($p['harga']); ?>,-</small></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php $i++; ?>
                        <?php endif; ?>
                    <?php endforeach ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>