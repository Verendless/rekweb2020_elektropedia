<?= $this->extend('front_layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div id="carouselExampleControls" class="carousel slide mt-1 shadow" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" height="300" src="\img\home.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="300" src="\img\laptop.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="300" src="\img\camera.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="300" src="\img\smartphones.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="300" src="\img\accessories.png" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<!-- Laptop Section -->
<section class="mt-4">
    <div class="container">
        <h4 class="mb-3">Laptop</h4>
        <div class="row d-flex justify-content-start">
            <?php foreach ($produkLaptop as $pl) : ?>
                <div class="card mb-3 mx-3 shadow col-md-2">
                    <a href="/produk/<?= $pl['kategori']; ?>/<?= $pl['nama']; ?>" class="text-decoration-none text-body">
                        <img src="/img/<?= $pl['gambar']; ?>" class="card-img-top pt-4" alt="<?= $pl['nama']; ?>">
                        <div class="card-body">
                            <p class="card-title"><?= $pl['nama']; ?></p>
                            <p class="card-text"><small>Rp <?= number_format($pl['harga']); ?>,-</small></p>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
        <a href="/produk/laptop" class="btn btn-primary">See More!</a>
        <hr>
    </div>
</section>

<!-- Smartphone Section -->
<section class="mt-4">
    <div class="container">
        <h4 class="mb-3">Smartphone</h4>
        <div class="row d-flex justify-content-start">
            <?php foreach ($produkSmartphone as $ps) : ?>
                <div class="card mb-3 mx-3 shadow col-md-2 ">
                    <a href="/produk/<?= $ps['kategori']; ?>/<?= $ps['nama']; ?>" class="text-decoration-none text-body">
                        <img src="/img/<?= $ps['gambar']; ?>" width="50px" class="card-img-top pt-4" alt="<?= $ps['nama']; ?>">
                        <div class="card-body">
                            <p class="card-title"><?= $ps['nama']; ?></p>
                            <p class="card-text"><small>Rp <?= number_format($ps['harga']); ?>,-</small></p>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
        <a href="" class="btn btn-primary">See More!</a>
        <hr>
    </div>
</section>

<!-- Kamera Section -->
<section class="mt-4">
    <div class="container">
        <h4 class="mb-3">Kamera</h4>
        <div class="row d-flex justify-content-start">
            <?php foreach ($produkKamera as $pk) : ?>
                <div class="card mb-3 mx-3 shadow col-md-2 ">
                    <a href="/produk/<?= $pk['kategori']; ?>/<?= $pk['nama']; ?>" class="text-decoration-none text-body">
                        <img src="/img/<?= $pk['gambar']; ?>" width="50px" class="card-img-top pt-4" alt="<?= $pk['nama']; ?>">
                        <div class="card-body">
                            <p class="card-title"><?= $pk['nama']; ?></p>
                            <p class="card-text"><small>Rp <?= number_format($pk['harga']); ?>,-</small></p>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
        <a href="" class="btn btn-primary">See More!</a>
        <hr>
    </div>
</section>

<!-- Aksesoris Section -->
<section class="mt-4">
    <div class="container">
        <h4 class="mb-3">Aksesoris</h4>
        <div class="row d-flex justify-content-start">
            <?php foreach ($produkAksesoris as $pa) : ?>
                <div class="card mb-3 mx-3 shadow col-md-2 ">
                    <a href="/produk/<?= $pa['kategori']; ?>/<?= $pa['nama']; ?>" class="text-decoration-none text-body">
                        <img src="/img/<?= $pa['gambar']; ?>" width="50px" class="card-img-top pt-4" alt="<?= $pa['nama']; ?>">
                        <div class="card-body">
                            <p class="card-title"><?= $pa['nama']; ?></p>
                            <p class="card-text"><small>Rp <?= number_format($pa['harga']); ?>,-</small></p>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
        <a href="" class="btn btn-primary">See More!</a>
        <hr>
    </div>
</section>
<div class="mb-md-2"></div>

<?= $this->endSection(); ?>