<?= $this->extend('front_layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container">
    <h4 class="mt-5">Checkout</h4>
    <h5 class="mt-5">Barang yang dibeli</h5>
    <div class="row">
        <div class="col-md-7 col-sm-12 mt-2">
            <?php foreach ($items as $item) : ?>
                <hr class="my-0" style="height:5px;border:none;background-color:#D0D3D4;">
                <div class="row">
                    <div class="col-3">
                        <img src="/img/<?= $item['gambar']; ?>" class="rounded img-fluid mt-3">
                    </div>
                    <div class="col-9">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><a class="text-decoration-none text-body font-weight-bold" href="/produk/<?= $item['kategori']; ?>/<?= $item['nama']; ?>"><?= $item['nama']; ?></a></td>
                                </tr>
                                <tr>
                                    <td>Rp<?= number_format($item['harga']); ?>,-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
            <h5 class="mt-2">Pengiriman</h5>
            <?php if ($user['fullname'] != null && $user['noTelp'] != null && $alamat != null && $alamat['provinsi'] != null && $alamat['kota'] != null && $alamat['kecamatan'] != null && $alamat['kelurahan'] != null) : ?>
                <p><?= $user['fullname']; ?> (<?= $user['noTelp']; ?>) <?= $alamat['kelurahan'] . ' ' . $alamat['kecamatan'] . ' ' . $alamat['kota'] . ' ' . $alamat['provinsi'];; ?></p>
            <?php else : ?>
                <form action="/user/add_alamat_at_checkoutl" method="POST">
                    <div class="form-group row">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['fullname']; ?>">
                    </div>
                    <div class="form-group row">
                        <label for="notelp">Nomor Telfon</label>
                        <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No Telfon" value="<?= $user['noTelp']; ?>">
                    </div>
                    <div class="form-group row">
                        <label>Provinsi</label>
                        <select name="provinsi" id="provinsi" class="custom-select">
                            <option value="">Pilih Provinsi</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Kota</label>
                        <select name="kota" id="kota" class="custom-select">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>Kecamatan</label>
                        <select name="kecamatan" id="kecamatan" class="custom-select">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label>kelurahan</label>
                        <select name="kelurahan" id="kelurahan" class="custom-select">
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Tambah Alamat</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
        <div class="col-md-4 offset-md-1 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ringkasan Pembelian</h5>
                    <table class="table table-borderless">
                        <tr>
                            <td>Ongkir</td>
                            <td>Rp15.000,-</td>
                        </tr>
                        <tr>
                            <?php foreach ($totalHarga as $th) : ?>
                                <td class="font-weight-bold">Total Harga</td>
                                <td>Rp<?= number_format($th['totalHarga']); ?>.-</td>
                            <?php endforeach; ?>
                        </tr>
                    </table>
                    <?php if ($user['fullname'] != null && $user['noTelp'] != null && $alamat != null && $alamat['provinsi'] != null && $alamat['kota'] != null && $alamat['kecamatan'] != null && $alamat['kelurahan'] != null) : ?>
                        <button type="submit" class="btn btn-primary btn-block">Bayar</button>
                    <?php else : ?>
                        <h6 class="text-center">Isi Data Alamat Terlebih Dahulu</h6 class="text-center">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>