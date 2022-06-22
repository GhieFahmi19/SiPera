 <?= $this->extend('layout/default') ?>
  <?= $this->section('content') ?>

 
  <!-- Isi dari Main Content -->
  <section class="section">
    <div class="section-header">
      <h1>Page</h1>
      <!-- Breadcrumb -->
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Parent Page</a></div>
        <div class="breadcrumb-item">Page</div>
      </div>
    </div>
    <div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-file"></i> Su-Ket Nikah
		</h3>
	</div>
	<form action="./report/cetak_mati.php" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penduduk</label>
				<div class="col-sm-6">
					<select name="id_mendu" id="id_mendu" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Data -</option>

					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">

			<input type="submit" name="Cetak" value="Cetak" class="btn btn-info">
		</div>
	</form>
</div>

    </div>
  </section>


<?= $this->endSection() ?>