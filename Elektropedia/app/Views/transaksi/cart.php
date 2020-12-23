<?= $this->extend('front_layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container">
    <h4 class="mt-5">Keranjang</h4>
    <div class="row">
        <div class="col-md-7 col-sm-12 mt-2">
            <hr style="height:5px;border:none;background-color:#D0D3D4;">
            <div class="row">
                <div class="col-md-3">
                    <img src="/img/1608469160_7b40073f876a293a6981.jpg" class="img-thumbnail rounded">
                </div>
                <div class="col-md-9">
                    <table class="table">
                        <tr>
                            <th>Nama Barang</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp,-</td>
                        </tr>
                        <tr>
                            <th>Jumlah Barang</th>
                            <td>1</td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr style="height:5px;border:none;background-color:#D0D3D4;">
            <div class="row">
                <div class="col-md-3">
                    <img src="/img/1608469160_7b40073f876a293a6981.jpg" class="img-thumbnail rounded">
                </div>
                <div class="col-md-9">
                    <table class="table">
                        <tr>
                            <th>Nama Barang</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp,-</td>
                        </tr>
                        <tr>
                            <th>Jumlah Barang</th>
                            <td>1</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3 offset-md-1 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ringkasan Pembelian</h5>
                    <table class="table">
                        <tr>
                            <td>Harga</td>
                            <td>Rp,-</td>
                        </tr>
                        <tr>
                            <td>Ongkir</td>
                            <td>Rp15.000,-</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Total harga</td>
                            <td>Rp,-</td>
                        </tr>
                    </table>
                    <button type="submit" class="btn btn-primary btn-block">Bayar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>