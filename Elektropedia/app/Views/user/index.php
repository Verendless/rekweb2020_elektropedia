 <?= $this->extend('templates/index'); ?>

 <?= $this->section('page-content'); ?>
 <!-- Begin Page Content -->
 <div class="container-fluid">

     <div class="row">
         <div class="col-lg-8">

             <div class="card mb-3" style="max-width: 540px;">
                 <div class="row no-gutters">
                     <div class="col-md-4">
                         <img src="<?= base_url('/img/' . user()->user_image); ?>" class="card-img" alt="<?= user()->fullname; ?>">
                     </div>
                     <div class="col-md-8">
                         <div class="card-body">
                             <ul class="list-group list-group-flush">
                                 <li class="list-group-item">
                                     <h4><?= user()->username; ?></h4>
                                 </li>
                                 <?php if (user()->fullname) : ?>
                                     <li class="list-group-item"><?= user()->username; ?></li>
                                 <?php endif; ?>
                                 <li class="list-group-item"><?= user()->email; ?></li>


                             </ul>
                         </div>
                     </div>
                 </div>
             </div>


         </div>

     </div>

 </div>

 <?= $this->endSection(); ?> -->