<?= $this->extend('front_layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="col-6 mt-5">
    </div>
    <ul class="linkProduk">
        <li><a href="/">Home</a></li>
        <li><i class="fas fa-caret-right" style="color: grey;"></i></li>
        <li><a href="/"><?= $produk['kategori']; ?></a></li>
        <li><i class="fas fa-caret-right" style="color: grey;"></i></li>
        <li><a href="/"><?= $produk['nama']; ?></a></li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <img src="/img/<?= $produk['gambar']; ?>" class="img-fluid" alt="">
        </div>
        <div class="col-6 mt-5">
            <h4 class=""><?= $produk['nama']; ?></h4>
            <hr>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" disabled class="form-control-plaintext" value="Rp <?= number_format($produk['harga']); ?>,-">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                    <input type="text" disabled class="form-control-plaintext" value="<?= $produk['stok']; ?> Pcs">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Berat</label>
                <div class="col-sm-10">
                    <input type="text" disabled class="form-control-plaintext" value="<?= $produk['berat']; ?> Kg">
                </div>
            </div>
            <div class="input-group" style="width:50%">
                <label>Jumlah</label>
                <span class="input-group-btn ml-4">
                    <button class="btn btn-white btn-minuse" type="button">-</button>
                </span>
                <input type="text" class="form-control no-padding add-color text-center height-25" maxlength="3" value="0">
                <span class="input-group-btn">
                    <button class="btn btn-red btn-pluss" type="button">+</button>
                </span>
            </div>
            <hr>
            <button class="btn-keranjang .text-secondary"><i class="fa fa-shopping-cart"></i> Tambah Ke Keranjang</button>
            <button class="btn-beli .text-secondary  ml-5"> Beli Sekarang</button>
            <hr>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-6 mt-md-5">
        <h3>Deskripsi</h3>
        <hr>
        <p class="mt-2 "><?= $produk['deskripsi']; ?></p>
    </div>
</div>
</div>
<div class="mb-md-2"></div>

<?= $this->endSection(); ?>