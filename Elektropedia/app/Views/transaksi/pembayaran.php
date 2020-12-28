<?= $this->extend('front_layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Pembayaran</h5>
                    <div class="container-fluid">
                        <div class="row mx-auto">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="idPemesanan" class="form-label" class="text-muted">ID Pemesanan</label>
                                    <input type="text" id="idPemesanan" disabled class="form-control-plaintext text-body" placeholder="<?= $pemesanan[0]['id']; ?>">
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <div class="mb-3">
                                    <label for="status" class="form-label" class="text-muted">Status Pemesanan</label>
                                    <input type="text" id="status" disabled class="form-control-plaintext text-body text-right" placeholder="<?= $pemesanan[0]['status']; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label" class="text-muted">Tanggal Pemesanan</label>
                                    <input type="text" id="status" disabled class="form-control-plaintext text-body" placeholder="<?= $pemesanan[0]['tanggalTransaksi']; ?>">
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <div class="mb-3">
                                    <label for="idPemesanan" class="form-label" class="text-muted">Total Harga</label>
                                    <input type="text" id="idPemesanan" disabled class="form-control-plaintext text-body text-right" placeholder="<?= number_format($pemesanan[0]['totalHarga']); ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <hr>
                                <div class="mb-3">
                                    <h5 class="text-center">Transfer ke Rekening Berikut</h5>
                                    <img src="/img/laptop.png" width="100%" alt="">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5 class="card-title text-center">Barang Yang Dibeli</h5>
                        <div class="row">
                            <div class="col-2">
                                <img src="/img/<?= $pemesanan[0]['gambar']; ?>" class="rounded img-fluid mt-3" width="100px">
                            </div>
                            <div class="col-10">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a class="text-decoration-none text-body font-weight-bold py-0" href=""><?= $pemesanan[0]['nama']; ?></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Rp<?= number_format($pemesanan[0]['harga']); ?>,-
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <h5 class="card-title text-center">Alamat Pengiriman</h5>
                        <div class="row">
                            <p><?= user()->fullname; ?> (<?= user()->noTelp; ?>) <?= $alamat['kelurahan'] . ' ' . $alamat['kecamatan'] . ' ' . $alamat['kota'] . ' ' . $alamat['provinsi'];; ?></p>
                        </div>
                        <hr>
                        <form action="" method="post" enctype="multipart/form-data">
                            <h5 class="text-center">Upload Bukti Pembayaran</h5>
                            <img src="/img/default.jpg" width="241px" class="img-fluid p-md-auto mx-auto d-block rounded img-preview mb-1" alt="Bukti Pembayaran">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input " id="gambar" name="gambar" onchange="previewImg()">
                                <div class="invalid-feedback">
                                </div>
                                <label class="custom-file-label" for="gambar"></label>
                            </div>
                            <a href="#" class="btn btn-primary mt-2 text-center btn-block">Bayar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>

<?= $this->endSection(); ?>