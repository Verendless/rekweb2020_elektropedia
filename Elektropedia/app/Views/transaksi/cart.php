<?= $this->extend('front_layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container">
    <h4 class="mt-5">Keranjang</h4>
    <?php if ($item != null) : ?>
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
    <?php else : ?>
        <div class="text-center mt-5">
            <h3 class="mb-4">Wahh Keranjang Kamu Kosong Nihh</h3>
            <a href="/produk"><button class="btn btn-success">Mulai Belanja</button></a>
        </div>
        <div class="row">
            <hr class="col-md-12 mb-5">
            <h5 class="col-md-12">Produk yang mungkin anda suka</h5>
            <?php $i = 0;
            foreach ($produk as $p) : ?>
                <?php if ($produk != null && $i < 5) : ?>
                    <div class="col-md col-sm-12 mx-auto mb-3">
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
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection(); ?>