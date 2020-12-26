<?= $this->extend('end_layout/template'); ?>

<?= $this->section('page-content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar User</h1>
    <div class="row">
        <div class="col-md-4">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submit" id="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $user['username']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td><?= $user['name']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/' . $user['id']); ?>" class="btn btn-info">Detail</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>
<!-- /.container-fluid -->