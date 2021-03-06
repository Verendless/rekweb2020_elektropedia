<?= $this->extend('front_layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="col-6 mt-5">
    </div>
    <ul class="linkProduk">
        <li><a href="/">Home</a></li>
        <li><i class="fas fa-caret-right mx-md-1" style="color: grey;"></i></li>
        <li><a href="/produk/<?= $produk['kategori']; ?>"><?= $produk['kategori']; ?></a></li>
        <li><i class="fas fa-caret-right mx-md-1" style="color: grey;"></i></li>
        <li><?= $produk['nama']; ?></li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12 mx-auto">
            <img src="/img/<?= $produk['gambar']; ?>" class="img-fluid" alt="">
        </div>
        <div class="col-md-6 col-sm-12 mt-5">
            <h4 class=""><?= $produk['nama']; ?></h4>
            <hr>
            <div class="form-group row">
                <label class="col-md-2 col-sm-1 col-form-label">Harga</label>
                <div class="col-md-10 col-sm-2">
                    <input type="text" disabled class="form-control-plaintext" value="Rp<?= number_format($produk['harga']); ?>,-">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Stok</label>
                <div class="col-md-10">
                    <input type="text" disabled class="form-control-plaintext" value="<?= $produk['stok']; ?> Pcs">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label">Berat</label>
                <div class="col-md-10">
                    <input type="text" disabled class="form-control-plaintext" value="<?= $produk['berat']; ?> Kg">
                </div>
            </div>
            <hr>
            <?php if (!in_groups('Admin')) : ?>
                <?php if (logged_in()) : ?>
                    <div class="row">
                        <div class="col-6">
                            <form action="/cart/save/<?= user_id(); ?>" method="post" enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="idProduk" value="<?= $produk['idProduk']; ?>">
                                <input type="hidden" name="harga" value="<?= $produk['harga']; ?>">
                                <button type="submit" class="btn-keranjang"><i class="fa fa-shopping-cart"></i> Tambah Ke Keranjang</button></a>
                            </form>
                        </div>
                        <div class="col-6">
                            <a href="/transaksi/beliLangsung/<?= $produk['nama']; ?>"><button class="btn-beli"> Beli Sekarang</button></a>
                        </div>
                    </div>
                    <hr>
                <?php else : ?>
                    <a href="/login"><button class="btn-keranjang"><i class="fa fa-shopping-cart"></i> Tambah Ke Keranjang</button></a>
                    <a href="/login"><button class="btn-beli ml-5"> Beli Sekarang</button></a>
                    <hr>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-12">
        <h3>Deskripsi</h3>
        <hr>
        <p class="mt-2 "><?= $produk['deskripsi']; ?></p>
    </div>
</div>
<section class="mt-4">
    <div class="container">
        <hr>
        <h4 class="mb-3">Produk Terkait</h4>
        <div class="row d-flex justify-content-start">
            <?php $i = 0 ?>
            <?php foreach ($relevanProduk as $rp) : ?>
                <?php if ($rp['idProduk'] != $produk['idProduk']  && $i < 5) : ?>
                    <div class="card mb-3 mx-3 shadow col-md-2">
                        <a href="/produk/detail/<?= $rp['kategori']; ?>/<?= $rp['nama']; ?>" class="text-decoration-none text-body">
                            <img src="/img/<?= $rp['gambar']; ?>" class="card-img-top pt-4" alt="<?= $rp['nama']; ?>">
                            <div class="card-body">
                                <p class="card-title"><?= $rp['nama']; ?></p>
                                <p class="card-text"><small>Rp <?= number_format($rp['harga']); ?>,-</small></p>
                            </div>
                        </a>
                    </div>
                    <?php $i++ ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="mt-4">
    <div class="container">
        <hr>
        <h4 class="mb-3">Produk Lain Yang Mungkin Kamu Suka</h4>
        <div class="row d-flex justify-content-start">
            <?php $i = 0 ?>
            <?php foreach ($produkLain as $rp) : ?>
                <?php if ($rp['kategori'] != $produk['kategori'] && $i < 5) : ?>
                    <div class="card mb-3 mx-3 shadow col-md-2">
                        <a href="/produk/detail/<?= $rp['kategori']; ?>/<?= $rp['nama']; ?>" class="text-decoration-none text-body">
                            <img src="/img/<?= $rp['gambar']; ?>" class="card-img-top pt-4" alt="<?= $rp['nama']; ?>">
                            <div class="card-body">
                                <p class="card-title"><?= $rp['nama']; ?></p>
                                <p class="card-text"><small>Rp <?= number_format($rp['harga']); ?>,-</small></p>
                            </div>
                        </a>
                    </div>
                    <?php $i++ ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>