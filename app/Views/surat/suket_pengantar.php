<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<!-- Isi dari Main Content -->
<section class="section">
	<div class="section-header">
		<h1>Pelayanan Surat</h1>
		<!-- Main Content -->

		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">
					<i class="fa fa-file"></i> Su-Ket Pengantar
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
					<!-- Isi Surat -->
					<section class="content">
						<div class="row">
							<div class="col-md-12">
								<div class="box box-info">
									<div class="box-header with-border tdk-permohonan tdk-periksa">
										<a href="../surat" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Wilayah">
											<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Cetak Surat
										</a>
									</div>
									<div class="box-body">
										<form id="main" name="main" method="POST" class="form-horizontal">
											<div class="form-group cari_nik">
												<label for="nik" class="col-sm-3 control-label">NIK / Nama </label>
												<div class="col-sm-6 col-lg-4">
													<select class="form-control required input-sm select2-nik-ajax readonly-permohonan readonly-periksa select2-hidden-accessible" id="nik" name="nik" style="width:100%;" data-filter-sex="" data-url="../surat/list_penduduk_ajax" onchange="formAction('main')" data-select2-id="nik" tabindex="-1" aria-hidden="true">
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-nik-container"><span class="select2-selection__rendered" id="select2-nik-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">-- Cari NIK / Tag ID Card / Nama Penduduk --</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
											<script type="text/javascript">
												$(document).ready(function() {
													// Daftar angka di script berikut adalah key number untuk tombol. Karena dropdown ini memakai select2 maka ketika e_KTP discan hasil pencarian akan otomatis dan default memilih record no. 1. Maka proses harus di delay supaya hasil search tampil terlebih dahulu dengan menghilangkan semua karakter di belakang nomor id yg discan.
													$('#nik').on('select2:open', e => {
														$('.select2-search__field').on('keydown.ajaxfix', e => {
															if (![9, 13, 16, 17, 18, 27, 33, 34, 35, 36, 37, 38, 39, 40].includes(e.which)) {
																$('.select2-results__option').removeClass('select2-results__option--highlighted');
															}
														});
													}).on('select2:closing', e => {
														$('.select2-search__field').off('keydown.ajaxfix');
													});
												});
											</script>
											<input type="hidden" name="sidcsrf" value="2058fe965d9d8fb01ce9f487893453b7">
										</form>
										<form id="validasi" action="../surat/doc/surat_ket_pengantar" method="POST" target="_blank" class="form-surat form-horizontal">
											<input type="hidden" id="url_surat" name="url_surat" value="surat_ket_pengantar">
											<input type="hidden" id="url_remote" name="url_remote" value="../surat/nomor_surat_duplikat">
											<div class="row jar_form">
												<label for="nomor" class="col-sm-3"></label>
												<div class="col-sm-8">
													<input class="required" type="hidden" name="nik" value="">
												</div>
											</div>
											<script type="text/javascript">
												$(document).ready(function() {
													$('#nomor').change(function() {
														var nomor = $('#nomor').val();
														var url = $('#url_surat').val();
														$.ajax({
															type: "POST",
															url: "../surat/format_nomor_surat",
															dataType: 'json',
															data: {
																nomor: nomor,
																url: url
															},
														}).then(function(nomor) {
															$('#format_nomor').text(nomor);
														});
													});
												});
											</script>

											<div class="form-group tdk-permohonan">
												<input type="hidden" name="id_surat" value="1">
												<label class="col-sm-3 control-label">Nomor Surat</label>
												<div class="col-sm-4">
													<input id="nomor" class="form-control input-sm digits required" type="text" placeholder="Nomor Surat" name="nomor" value="1">
													<p class="help-block text-red small">Terakhir untuk jenis surat Keterangan Pengantar: <strong></strong> (tgl: -)</p>
												</div>
												<div class="col-sm-4">
													<p class="help-block"><em>Format nomor surat: </em><span id="format_nomor">S-01/001/3213272001/VI/2022</span></p>
												</div>
											</div>
											<div class="form-group">
												<label for="keperluan" class="col-sm-3 control-label">Keperluan</label>
												<div class="col-sm-8">
													<textarea name="keperluan" id="keperluan" class="form-control input-sm required " placeholder="Keperluan"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
												<div class="col-sm-8">
													<textarea name="keterangan" id="keterangan" class="form-control input-sm required " placeholder="Keterangan"></textarea>
													<span class="input-group-append">
													</span>
												</div>
											</div>
											<div class="form-group">
												<label for="berlaku_dari" class="col-sm-3 control-label">Berlaku Dari - Sampai</label>
												<div class="col-sm-3 col-lg-2">
													<div class="input-group input-group-sm date">
														<div class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</div>
														<input title="Pilih Tanggal" id="tgl_mulai" class="form-control input-sm required readonly-permohonan" name="berlaku_dari" type="text">
													</div>
												</div>
												<div class="col-sm-3 col-lg-2">
													<div class="input-group input-group-sm date">
														<div class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</div>
														<input title="Pilih Tanggal" id="tgl_akhir" class="form-control input-sm required readonly-permohonan" name="berlaku_sampai" type="text" data-masa-berlaku="1" data-satuan-masa-berlaku="M">
													</div>
												</div>
											</div>
											<div class="form-group tdk-permohonan">
												<label class="col-sm-3 control-label">Tertanda Atas Nama</label>
												<div class="col-sm-6 col-lg-4">
													<select class="form-control input-sm select2 select2-hidden-accessible" name="pilih_atas_nama" onchange="ganti_ttd($(this).val());	" data-select2-id="1" tabindex="-1" aria-hidden="true">
														<option value="" data-select2-id="3">-- Atas Nama --</option>
														<option value="a.n Kepala Desa Manyeti">
															a.n Kepala Desa Manyeti </option>
														<option value="u.b Sekretaris Desa">
															u.b Sekretaris Desa </option>
													</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-pilih_atas_nama-nj-container"><span class="select2-selection__rendered" id="select2-pilih_atas_nama-nj-container" role="textbox" aria-readonly="true" title="-- Atas Nama --">-- Atas Nama --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
											<div class="form-group tdk-permohonan">
												<label class="col-sm-3 control-label">Staf Pemerintah Desa</label>
												<div class="col-sm-6 col-lg-4">
													<select class="form-control required input-sm" id="pamong" name="pamong" onchange="ambil_pamong($(this).find(':selected'))">
														<option value="" selected="selected">-- Pilih Staf Pemerintah Desa--</option>

													</select>
													<input name="pamong_nip" id="pamong_nip" type="hidden" value="">
													<input name="pamong_id" id="pamong_id" type="hidden" value="14">
												</div>
											</div>
											<div class="form-group tdk-permohonan">
												<label for="jabatan" class="col-sm-3 control-label">Menjabat Sebagai</label>
												<div class="col-sm-6 col-lg-4">
													<select class="form-control input-sm required" id="jabatan" name="jabatan">
														<option value="" selected="selected">-- Pilih Jabatan--</option>
														<option selected="">Kepala Desa</option>
														<option>Sekretaris Desa</option>
														<option>Kasi Pemerintahan</option>
														<option>Kaur Umum &amp; Perencanaan</option>
														<option>Kaur Keuangan</option>
														<option>Kasi Kesejahteraan &amp; Pelayanan</option>
														<option>Kepala Dusun Cikadu</option>
													</select>
												</div>
											</div>

											<script type="text/javascript">
												$(document).ready(function() {
													$('#pamong').change();
												});

												function ganti_ttd(atas_nama) {
													if (atas_nama.includes('a.n')) {
														ub = $("#pamong option[data-ub='1']").val();
														if (ub) {
															$('#pamong').val(ub);
															$('#pamong').change();
														} else {
															$('#pamong').val('');
															$('#jabatan').val('');
														}
													} else if (atas_nama.includes('u.b')) {
														$('#pamong').val('');
														$('#jabatan').val('');
													} else {
														$('#pamong').val($("#pamong option[data-ttd='1']").val());
														$('#pamong').change();
													}
												}

												function ambil_pamong(elem) {
													var nip = elem.data('nip');
													$('#pamong_nip').val(nip);
													elem.closest('.box-body').find('select[name=jabatan]').val(elem.data('jabatan'));
													$('#pamong_id').val(elem.data('pamong-id'));
												}
											</script>
											<div class="form-group">
												<label class="col-sm-3 control-label" for="tampil_foto">Tampilkan Foto Penduduk di Surat</label>
												<div class="btn-group col-xs-12 col-sm-8" data-toggle="buttons">
													<label id="m1" class="tipe btn btn-info btn-flat btn-sm col-xs-12 col-sm-6 col-lg-2 form-check-label ">
														<input id="foto1" type="radio" name="tampil_foto" class="form-check-input" value="1" autocomplete="off">Ya
													</label>
													<label id="m2" class="tipe btn btn-info btn-flat btn-sm col-xs-12 col-sm-6 col-lg-2 form-check-label active">
														<input id="foto2" type="radio" name="tampil_foto" class="form-check-input" value="0" checked="" autocomplete="off">Tidak
													</label>
												</div>
											</div>

											<input type="hidden" name="sidcsrf" value="2058fe965d9d8fb01ce9f487893453b7">
										</form>
									</div>
									<div class="box-footer">
										<div class="row">
											<div class="col-xs-12">
												<button type="reset" onclick="$('#validasi').trigger('reset');" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
												<button type="button" onclick="tambah_elemen_cetak('cetak_rtf'); $('#validasi').submit()" class="btn btn-social btn-flat bg-purple btn-sm pull-right" style="margin-right: 5px;"><i class="fa fa-file-word-o"></i> Unduh RTF</button>
											</div>
										</div>
									</div>
									<script type="text/javascript">
										function tambah_elemen_cetak($nilai) {
											$('<input>').attr({
												type: 'hidden',
												name: 'submit_cetak',
												value: $nilai
											}).appendTo($('#validasi'));
										}
									</script>
								</div>
								<!-- Akhir Isi surat -->
							</div>
							<div class="card-footer">

								<input type="submit" name="Cetak" value="Cetak" class="btn btn-info">
							</div>
			</form>
		</div>
</section>

<?= $this->endSection() ?>