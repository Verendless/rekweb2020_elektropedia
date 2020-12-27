<?= $this->extend('end_layout/template'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <h1 class="h3 text-gray-800">Ubah Detail Alamat</h1>
    <hr>
    <form action="/user/update_alamat/<?= $user['id']; ?>" method="post">
        <input type="hidden" name="id" value="<?= $user['id']; ?>">
        <div class="form-group">
            <label>Provinsi</label>
            <select name="provinsi" id="provinsi" class="custom-select">
                <option value="">Pilih Provinsi</option>
            </select>
        </div>
        <div class="form-group">
            <label>Kota/Kabupaten</label>
            <select name="kota" id="kota" class="custom-select">
                <option value=""></option>
            </select>
        </div>
        <div class="form-group">
            <label>Kecamatan</label>
            <select name="kecamatan" id="kecamatan" class="custom-select">
                <option value=""></option>
            </select>
        </div>
        <div class="form-group">
            <label>kelurahan</label>
            <select name="kelurahan" id="kelurahan" class="custom-select">
                <option value=""></option>
            </select>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ubah Data </button>
            </div>
    </form>
</div>
<?= $this->endSection(); ?>