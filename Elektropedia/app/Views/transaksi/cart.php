<?= $this->extend('front_layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container">
    <h4 class="mt-5">Keranjang</h4>
    <?php if (session()->getFlashData('pesan')) : ?>
        <div class="alert alert-success mt-3" role="alert">
            <?= session()->getFlashData('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-7 col-sm-12 mt-2">
            <?php foreach ($item as $i) : ?>
                <hr class="my-0" style="height:5px;border:none;background-color:#D0D3D4;">
                <div class="row">
                    <div class="col-3">
                        <img src="/img/<?= $i['gambar']; ?>" class="rounded img-fluid mt-3">
                    </div>
                    <div class="col-9">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><a class="text-decoration-none text-body font-weight-bold" href="/produk/<?= $i['kategori']; ?>/<?= $i['nama']; ?>"><?= $i['nama']; ?></a></td>
                                </tr>
                                <tr>
                                    <td>Rp<?= number_format($i['harga']); ?>,-</td>
                                </tr>
                                <tr>
                                    <td><a class="btn btn-danger" href="/cart/delete/<?= $i['id']; ?>/<?= user()->username; ?>" role="button"><i class="fas fa-trash"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col-md-4 offset-md-1 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Ringkasan Pembelian</h5>
                    <form action="/cart/checkout/<?= user()->username; ?>" method="post">
                        <?= csrf_field(); ?>
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
                        <button type="submit" class="btn btn-primary btn-block">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>