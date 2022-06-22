<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>


<!-- Isi dari Main Content -->
<div class="card card-success">
	<div class="card-header">
		<div class="section-header">
			<div class="section-header-back">
				<a href="features-settings.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
			</div>
			<h1>General Settings</h1>
		</div>
	</div>
	<div class="card-body">
		<?php if (!empty(session()->getFlashdata('message'))) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<?php echo session()->getFlashdata('message'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>

		<button type='button' class='btn btn-primary center-block'> Klik Disini</button>
		<table class="table table-bordered">
			<tr>
				<div class="card-body p-0">
					<div class="table-responsive">
						<table id="example" class="display" data-page-length="25" data-order="[[ 1, &quot;asc&quot; ]]" width="100%">
							<thead>
								<tr>
									<th>No</th>
									<th>ID Keluarga</th>
									<th>Nama</th>
									<th>NIK</th>
									<th>No. KK</th>
									<th>Jumlah Anggota</th>
									<th>Jenis Kelamin</th>
									<th>Agama</th>
									<th>Pendidkan</th>
									<th>Pekerjaan</th>
									<th>Status Kawin</th>
									<th>SHDK</th>
									<th>Alamat</th>
									<th>RT</th>
									<th>RW</th>
									<th>Dusun</th>
									<th>Umur</th>
									<th>Aksi</th>
									<th data-orderable="false">Start date</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer text-right">
					<nav class="d-inline-block">
						<ul class="pagination mb-0">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
							<li class="page-item">
								<a class="page-link" href="#">2</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
							</li>
						</ul>
					</nav>
				</div>
				</section>

				<?= $this->endSection() ?>