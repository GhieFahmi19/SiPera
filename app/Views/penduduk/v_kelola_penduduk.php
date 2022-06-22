<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<!-- Isi dari Main Content -->
<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<h3>Data Penduduk</h3>
	</div>
	<div class="card-body">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			+ Data Penduduk
		</button>
		<br></br>

		<div class="row">
			<tr>
				<div class="col-sm-12">
					<div class="table-responsive">
						<table class="table table-bordered dataTable table-hover">
							<thead class="bg-gray disabled color-palette">
								<tr>
									<th>No</th>
									<th><input type="checkbox" id="checkall" /></th>
									<th>Aksi</th>
									<th>Foto</th>
									<th>ID Penduduk</th>
									<th>NIK</th>
									<th>Nama</th>
									<th>No. KK</th>
									<th>Jenis Kelamin</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
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
									<th>Nama Ayah</th>
									<th>Nama Ibu</th>
									<th>Gol. Darah</th>
									<th>Status e-KTP</th>
									<th data-orderable="false">Start date</th>
								</tr>
							</thead>
							<tbody>

								<td>
									<<? $key + 1 ?>< /td>
								<th><input type="checkbox" id="checkall" /></th>
								<td class="aksi">
									<div class="btn-group">
										<button type="button" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
										<ul class="dropdown-menu" role="menu" style="">
											<li><a href="#" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
											</li>
											<li><a href=#7" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
											</li>
											<li><a href="#" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
											</li>
											<li><a href="#" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
											</li>
											<li><a href="#" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
											</li>
											<li><a href="#" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
											</li>
											<li><a href="#" data-href="#" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
											</li>
										</ul>
									</div>
								</td>
								<td>Foto</td>
								<td><? $value->id_penduduk ?></td>
								<td><? $value->nik ?></td>
								<td><? $value->nama ?></td>
								<td><? $value->no_kk_sebelumnya ?></td>
								<td><? $value->jk ?></td>
								<td><? $value->tempat_lahir ?></td>
								<td><? $value->tanggal_lahir ?></td>
								<td><? $value->id_penduduk_agama ?></td>
								<td><? $value->id_penduduk_pendidikan ?></td>
								<td><? $value->id_penduduk_pekerjaan ?></td>
								<td><? $value->status_kawin ?></td>
								<td><? $value->kk_level ?></td>
								<td><? $value->alamat_sekarang ?></td>
								<td><? $value->rt ?></td>
								<td><? $value->rw ?></td>
								<td><? $value->dusun ?></td>
								<td><? $value->umur ?></td>
								<td><? $value->nama_ayah ?></td>
								<td><? $value->nama_ibu ?></td>
								<td><? $value->id_gol_darah ?></td>
								<td><? $value->ktp_el ?></td>
								</td>
			</tr>
			</table>
		</div>
	</div>
</div>
</form>
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
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01">First name</label>
							<input type="text" class="form-control" id="validationCustom01" value="Mark" required>
							<div class="valid-feedback">
								Looks good!
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">Last name</label>
							<input type="text" class="form-control" id="validationCustom02" value="Otto" required>
							<div class="valid-feedback">
								Looks good!
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom03">City</label>
							<input type="text" class="form-control" id="validationCustom03" required>
							<div class="invalid-feedback">
								Please provide a valid city.
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationCustom04">State</label>
							<select class="custom-select" id="validationCustom04" required>
								<option selected disabled value="">Choose...</option>
								<option>...</option>
							</select>
							<div class="invalid-feedback">
								Please select a valid state.
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationCustom05">Zip</label>
							<input type="text" class="form-control" id="validationCustom05" required>
							<div class="invalid-feedback">
								Please provide a valid zip.
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
							<label class="form-check-label" for="invalidCheck">
								Agree to terms and conditions
							</label>
							<div class="invalid-feedback">
								You must agree before submitting.
							</div>
						</div>
					</div>

					<button class="btn btn-primary" type="submit">Simpan</button>
					<button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>

				</form>

				<script>
					// Example starter JavaScript for disabling form submissions if there are invalid fields
					(function() {
						'use strict';
						window.addEventListener('load', function() {
							// Fetch all the forms we want to apply custom Bootstrap validation styles to
							var forms = document.getElementsByClassName('needs-validation');
							// Loop over them and prevent submission
							var validation = Array.prototype.filter.call(forms, function(form) {
								form.addEventListener('submit', function(event) {
									if (form.checkValidity() === false) {
										event.preventDefault();
										event.stopPropagation();
									}
									form.classList.add('was-validated');
								}, false);
							});
						}, false);
					})();
				</script>
			</div>

		</div>
	</div>
</div>
</div>
</div>
</div>


<?= $this->endSection() ?>