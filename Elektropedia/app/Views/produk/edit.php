<?= $this->extend('end_layout/template'); ?>

<?= $this->section('page-content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3 ">Form Ubah Data Produk</h2>
            <form action="/produk/update/<?= $produk['idProduk']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="idProduk" value="<?= $produk['idProduk']; ?>">
                <input type="hidden" name="gambarLama" value="<?= $produk['gambar']; ?>">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('nama')) ?
                                                                    'is-invalid' : '';  ?>" id="nama" name="nama" autofocus value="<?= $produk['nama']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="kategori">Kategori</label>
                    <div class="col-sm-10">
                        <select class="custom-select" id="kategori" name="kategori">
                            <option>Kategori...</option>
                            <option <?= ($produk['kategori'] == 'Laptop') ? 'selected' : ''; ?> value="Laptop">Laptop</option>
                            <option <?= ($produk['kategori'] == 'Smartphone') ? 'selected' : ''; ?> value="Smartphone">Smartphone</option>
                            <option <?= ($produk['kategori'] == 'Kamera') ? 'selected' : ''; ?> value="Kamera">Kamera</option>
                            <option <?= ($produk['kategori'] == 'Aksesoris') ? 'selected' : ''; ?> value="Aksesoris">Aksesoris</option>
                        </select>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"><?= $produk['deskripsi']; ?></textarea>
                    </div>
                </div>
                <div class=" form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= $produk['harga']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="stok" name="stok" value="<?= $produk['stok']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="berat" class="col-sm-2 col-form-label">Berat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="berat" name="berat" value="<?= $produk['berat']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $produk['gambar']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambar'); ?>
                            </div>
                            <label class="custom-file-label" for="gambar"><?= $produk['gambar']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>