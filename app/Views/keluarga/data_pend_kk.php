<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<!-- Isi dari Main Content -->
<section class="section">
  <div class="section-header">
    <div class="card card-dark card-outline elevation-3 rounded-0">
      <div class="card-header">
        <h3 class="card-title">
          <div class="container mt-5">
            <div class="row">
              <div class="col-md-12">
                <?php if (isset($validation)) { ?>
                  <div class="alert alert-danger" role="alert">
                    <?php echo $validation->listErrors() ?>
                  </div>
                <?php } ?>
                <div class="card">
                  <div class="card-body">
                    <form action="<?php echo base_url('post/store') ?>" method="POST">
                      <div class="form-group">
                        <label>TITLE</label>
                        <input type="text" class="form-control" name="title" placeholder="Masukkan Title">
                      </div>
                      <div class="form-group">
                        <label>KONTEN</label>
                        <textarea class="form-control" name="content" rows="4" placeholder="Masukkan Konten"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>




          <?= $this->endSection() ?>