<?= $this->extend('front_layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
	<div class="col-6 mt-5">
	</div>
	<h6 class="text-primary">Home -> Laptop ->LAPTOP SLEEVE LAPTOP CASE TFG KEEPER 401 BLACK </h6>
</div>
<div class="container">
	<div class="row">
		<div class="col-6 mt-5">
			<div class="card">
				<div class="card-body">
					<img src="https://images.anandtech.com/doci/15680/Swift-3_SF314-42_front-facing.jpg" class="img-fluid" alt="https://images.anandtech.com/doci/15680/Swift-3_SF314-42_front-facing.jpg">
				</div>
			</div>
		</div>
		<div class="col-6 mt-5">
			<h1 class="text-success">LAPTOP SLEEVE LAPTOP CASE TFG KEEPER 401 BLACK</h1>
			<hr>
			</hr>
			<h4 class="text-danger">Harga : 350.000</h4>

			<hr>
			</hr>
			<div class="input-group" style="width:50%">
				<h4 class="text-warning">Kuantitas</h4>

				<span class="input-group-btn ml-4">
					<button class="btn btn-white btn-minuse" type="button">-</button>
				</span>
				<input type="text" class="form-control no-padding add-color text-center height-25" maxlength="3" value="0">
				<span class="input-group-btn">
					<button class="btn btn-red btn-pluss" type="button">+</button>
				</span>
			</div>
			<h4></h4>
			<h4>Pengiriman</h4>
			<div class="form-group">
				<label for="provinsi">Pilih Provinsi</label>
				<select class="form-control" id="provinsi">
					<option>Select Provinsi</option>
				</select>
			</div>
			<hr>
			<button class="btn-keranjang .text-secondary"><i class="fa fa-shopping-cart"></i> Tambah Ke Keranjang</button>
			<button class="btn-beli .text-secondary  ml-5"> Beli Sekarang</button>
			<hr>
		</div>
	</div>
</div>
<div class="container">
	<div class="col-6">
		<h3>Deskripsi</h3>
		<hr>
		<p class="mt-2 ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti nihil corrupti ducimus voluptatem commodi harum voluptas. Fugiat dicta numquam dolore nam quaerat ipsam. Repellendus, illo? Sit odit atque deserunt maiores!</p>
	</div>
</div>
</div>
<div class="mb-md-2"></div>

<?= $this->endSection(); ?>