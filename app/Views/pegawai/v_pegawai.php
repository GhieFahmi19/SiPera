<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			<h3>Data Pegawai</h3>
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
					<th>No</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>No Telp</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Jabatan</th>
					<th>Masa Jabatan</th>
					<th>No. SK Pengangkatan</th>
					<th>Action</th>
				</tr>

				<a title="Edit" href="<?= base_url(""); ?>" class="btn btn-info">Edit</a>
				<a title="Delete" href="<?= base_url("") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
				</td>
				</tr>

			</table>
		</div>
	</div>
</div>
<?= $this->endSection('content'); ?>