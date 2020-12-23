<?= $this->extend('front_layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container">
    <h4 class="mt-5">Beli Langsung</h4>
    <h5 class="mt-5">Barang yang dibeli</h5>
    <div class="row">
        <div class="col-md-7 col-sm-12 mt-2">
            <div class="row">
                <div class="col-md-3">
                    <img src="/img/<?= $produk['gambar']; ?>" class="img-thumbnail rounded">
                </div>
                <div class="col-md-9">
                    <table class="table">
                        <tr>
                            <th>Nama Barang</th>
                            <td><?= $produk['nama']; ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp<?= number_format($produk['harga']); ?>,-</td>
                        </tr>
                        <tr>
                            <th>Jumlah Barang</th>
                            <td>1</td>
                        </tr>
                    </table>
                </div>
            </div>
            <h5 class="mt-2">Pengiriman</h5>
            <form action="">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['fullname']; ?>">
                </div>
                <div class="form-group">
                    <label for="notelp">Nonor Telfon</label>
                    <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No Telfon" value="<?= $user['noTelp']; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                </div>
                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <select class="form-control" id="provinsi" name="provinsi">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kota">Kota/Kabupaten</label>
                    <select class="form-control" id="kota" name="kota">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <select class="form-control" id="kecamatan" name="kecamatan">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kelurahan">Kelurahan</label>
                    <select class="form-control" id="kelurahan" name="kelurahan">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kodepos">Kodepos</label>
                    <select class="form-control" id="kodepos" name="kodepos">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="col-md-4 offset-md-1 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ringkasan Pembelian</h5>
                    <table class="table">
                        <tr>
                            <td>Harga</td>
                            <td>Rp<?= number_format($produk['harga']); ?>,-</td>
                        </tr>
                        <tr>
                            <td>Ongkir</td>
                            <td>Rp15.000,-</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Total harga</td>
                            <td>Rp<?= number_format($produk['harga'] + 15000); ?>,-</td>
                        </tr>
                    </table>
                    <button type="submit" class="btn btn-primary btn-block">Bayar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>