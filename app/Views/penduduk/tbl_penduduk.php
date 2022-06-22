<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>


<!-- Isi dari Main Content -->
<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<h3>Data Kepala Keluarga</h3>
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
		<a href="<?= base_url('/pegawai/create'); ?>" class="btn btn-primary">Tambah</a>
		<hr />
		<table class="table table-bordered">
			<tr>
				<div class="card-body p-0">
					<div class="table-responsive">
						<table id="example" class="display" data-page-length="25" data-order="[[ 1, &quot;asc&quot; ]]" width="100%">
							<thead>
								<tr>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Alamat</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Jhony Ahmad</td>
									<td>jhony@malasngoding.com</td>
									<td>Jakarta</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Rafrafil Jumadil</td>
									<td>rafrafil@malasngoding.com</td>
									<td>Bandung</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Diki Alfarabi Hadi</td>
									<td>diki@malasngoding.com</td>
									<td>Jakarta</td>
								</tr>
								<tr>
									<td>3</td>
									<td>Ma'un Syah</td>
									<td>diki@malasngoding.com</td>
									<td>Medan</td>
								</tr>
							</tbody>
						</table>

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