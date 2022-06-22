  <?= $this->extend('layout/default') ?>
  <?= $this->section('content') ?>

  <!-- Main Content -->
  <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Data Bantuan</h1>
          </div>

	<section class="content" id="maincontent">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="../keluar/perorangan_clear" class="btn btn-social btn-flat bg-olive btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-archive"></i> Rekam Surat Perorangan</a>
						<a href="../keluar/graph" class="btn btn-social btn-flat bg-orange btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-pie-chart"></i> Pie Surat Keluar</a>
						<a href="../keluar/dialog_cetak/cetak" class="btn btn-social btn-flat bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Cetak Arsip Layanan Surat"><i class="fa fa-print"></i> Cetak</a>
						<a href="../keluar/dialog_cetak/unduh" class="btn btn-social btn-flat bg-navy btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Unduh Arsip Layanan Surat"><i class="fa fa-download"></i> Unduh</a>
						<a href="../keluar/clear" class="btn btn-social btn-flat bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-refresh"></i>Bersihkan Filter</a>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
									<form id="mainform" name="mainform" method="post">
										<div class="row">
											<div class="col-sm-9">
												<div class="form-group">
													<select class="form-control input-sm " name="filter" onchange="formAction('mainform','../keluar/filter')">
														<option value="">Tahun</option>
														<option value="2022">2022</option>
														<option value="2021">2021</option>
														</select>
												</div>
												<div class="form-group">
													<select class="form-control input-sm select2 select2-hidden-accessible" name="jenis" onchange="formAction('mainform','../keluar/jenis')" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
														<option value="" data-select2-id="3">Pilih Jenis Surat</option>
														<option value="Biodata Penduduk">Biodata Penduduk</option>
														<option value="Keterangan Beda Identitas">Keterangan Beda Identitas</option>
														<option value="Keterangan Pindah Penduduk">Keterangan Pindah Penduduk</option>
														<option value="Keterangan Usaha">Keterangan Usaha</option>
														<option value="Permohonan Kartu Keluarga">Permohonan Kartu Keluarga</option>
														</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-jenis-7z-container"><span class="select2-selection__rendered" id="select2-jenis-7z-container" role="textbox" aria-readonly="true" title="Pilih Jenis Surat">Pilih Jenis Surat</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="box-tools">
													<div class="input-group input-group-sm pull-right">
														<input name="cari" id="cari" class="form-control ui-autocomplete-input" placeholder="Cari..." type="text" value="" onkeypress="if (event.keyCode == 13){$('#'+'mainform').attr('action', '../keluar/search');$('#'+'mainform').submit();}" autocomplete="off">
														<div class="input-group-btn">
															<button type="submit" class="btn btn-default" onclick="$('#'+'mainform').attr('action', '../keluar/search');$('#'+'mainform').submit();"><i class="fa fa-search"></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-bordered dataTable table-striped table-hover">
														<thead class="bg-gray disabled color-palette">
															<tr>
																<th>No</th>
																<th>Aksi</th>
																<th nowrap="">Kode Surat</th>
																<th nowrap=""><a href="../keluar/index/1/1">No Urut <i class="fa fa-sort fa-sm"></i></a></th>
																<th>Jenis Surat</th>
																<th nowrap=""><a href="../keluar/index/1/3">Nama Penduduk <i class="fa fa-sort fa-sm"></i></a></th>
																<th nowrap="">Keterangan</th>
																<th nowrap="">Ditandatangani Oleh</th>
																<th nowrap=""><a href="../keluar/index/1/5">Tanggal <i class="fa fa-sort fa-sm"></i></a></th>
																<th>User</th>
																</tr>
																</thead>
																<tbody>
																<tr>
																	<td>1</td>
																	<td nowrap="">
																	<a href="../desa/arsip/surat_ket_usaha_3213271201950003_2022-05-30_333.rtf" class="btn btn-flat bg-purple btn-sm" title="Unduh Surat RTF" target="_blank"><i class="fa fa-file-word-o"></i></a>
																	<a href="#" data-href="../keluar/delete/1/0/12" class="btn bg-maroon btn-flat btn-sm" title="Hapus Data" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
																	</td>
																	<td>S-14</td>
																	<td>333</td>
																	<td>Keterangan Usaha</td>
																	<td>
																	TEGUH DWI RAHAYU																																			</td>
																	<td>Pengajuan Ke Bank BRI</td>
																	<td>JATNIKA</td>
																	<td nowrap="">30 Mei 2022 14:43:51</td>
																	<td>Administrator</td>
																	</tr>
																	<tr>
																	<td>2</td>
																	<td nowrap="">
																	<a href="../desa/arsip/surat_ket_beda_nama_3213272005460002_2022-05-09_305.rtf" class="btn btn-flat bg-purple btn-sm" title="Unduh Surat RTF" target="_blank"><i class="fa fa-file-word-o"></i></a>
																	<a href="#" data-href="../keluar/delete/1/0/11" class="btn bg-maroon btn-flat btn-sm" title="Hapus Data" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
																	</td>
																	<td>S-09</td>
																	<td>305</td>
																	<td>Keterangan Beda Identitas</td>
																	<td>
																	SAPTARI																																			</td>
																	<td>PERBEDAAN NIK PADA e-KTP DAN KARU TANI</td>
																	<td>ICHA OVIA OKTAVIANI</td>
																	<td nowrap="">09 Mei 2022 08:57:54</td>
																	<td>Administrator</td>
																	</tr>
																	<tr>
																	<td>3</td>
																	<td nowrap="">
																	<a href="../desa/arsip/surat_permohonan_kartu_keluarga_3213271409460001_2022-04-25_1.rtf" class="btn btn-flat bg-purple btn-sm" title="Unduh Surat RTF" target="_blank"><i class="fa fa-file-word-o"></i></a>
																	<a href="../keluar/edit_keterangan/10" title="Ubah Data" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Keterangan" class="btn bg-orange btn-flat btn-sm"><i class="fa fa-edit"></i></a>
																	<a href="#" data-href="../keluar/delete/1/0/10" class="btn bg-maroon btn-flat btn-sm" title="Hapus Data" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
																	</td>
																	<td>S-36</td>
																	<td>1</td>
																	<td>Permohonan Kartu Keluarga</td>
																	<td>
																	IDI																																			</td>
																	<td></td>
																	<td>EGI FAHMI ERIANA</td>
																	<td nowrap="">25 April 2022 08:57:04</td>
																	<td>Administrator</td>
																	</tr>
																	<tr>
																	<td>4</td>
																	<td nowrap="">
																	<a href="../desa/arsip/surat_bio_penduduk_3213270301890006_2022-04-10_1.rtf" class="btn btn-flat bg-purple btn-sm" title="Unduh Surat RTF" target="_blank"><i class="fa fa-file-word-o"></i></a>
																	<a href="../keluar/edit_keterangan/9" title="Ubah Data" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Keterangan" class="btn bg-orange btn-flat btn-sm"><i class="fa fa-edit"></i></a>
																	<a href="#" data-href="../keluar/delete/1/0/9" class="btn bg-maroon btn-flat btn-sm" title="Hapus Data" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
																	</td>
																	<td>S-03</td>
																	<td>1</td>
																	<td>Biodata Penduduk</td>
																	<td>
																	EGI FAHMI ERIANA																																			</td>
																	<td></td>
																	<td>H. LILI SUGIRI</td>
																	<td nowrap="">10 April 2022 19:46:53</td>
																	<td>Administrator</td>
																	</tr>
																	<tr>
																	<td>5</td>
																	<td nowrap="">
																	<a href="../desa/arsip/surat_ket_pindah_penduduk_3213274307990002_2021-12-28_304.rtf" class="btn btn-flat bg-purple btn-sm" title="Unduh Surat RTF" target="_blank"><i class="fa fa-file-word-o"></i></a>
																	<a href="../keluar/edit_keterangan/8" title="Ubah Data" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Keterangan" class="btn bg-orange btn-flat btn-sm"><i class="fa fa-edit"></i></a>
																	<a href="#" data-href="../keluar/delete/1/0/8" class="btn bg-maroon btn-flat btn-sm" title="Hapus Data" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
																	</td>
																	<td>S-04</td>
																	<td>304</td>
																	<td>Keterangan Pindah Penduduk</td>
																	<td>
																	DYAN NURLIANI																																			</td>
																	<td>Kelemngkapan Administrasi Kependudukan Baru</td>
																	<td>H. LILI SUGIRI</td>
																	<td nowrap="">28 Desember 2021 09:19:13</td>
																	<td>Administrator</td>
																</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									<input type="hidden" name="sidcsrf" value="683495074884688db32fa47c7ff97a00"></form>
									<div class="row">
										<div class="col-sm-6">
											<div class="dataTables_length">
												<form id="paging" action="../keluar" method="post" class="form-horizontal">
													<label>
														Tampilkan
														<select name="per_page" class="form-control input-sm" onchange="$('#paging').submit()">
															<option value="20" selected="selected">20</option>
															<option value="50">50</option>
															<option value="100">100</option>
														</select>
														Dari
														<strong>5</strong>
														Total Data
													</label>
												<input type="hidden" name="sidcsrf" value="683495074884688db32fa47c7ff97a00"></form>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="dataTables_paginate paging_simple_numbers">
												<ul class="pagination">
												<li><a href="../keluar/index/1/0" aria-label="First"><span aria-hidden="true">Awal</span></a></li>
																																																					<li><a href="../keluar/index/1/0" aria-label="Last"><span aria-hidden="true">Akhir</span></a></li>
												</ul>
											</div>
										</div>
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


<?= $this->endSection() ?>