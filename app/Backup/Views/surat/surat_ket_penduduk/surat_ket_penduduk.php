<<?= $this->extend('layout/default') ?> <?= $this->section('content') ?> <!-- Isi dari Main Content -->
	<section class="section">
		<div class="section-header">

			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="box box-info">
							<div class="box-body">
								<div class="box-header with-border tdk-permohonan tdk-periksa">
									<a href="<?= site_url("surat") ?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Wilayah">
										<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Cetak Surat
									</a>
								</div>
								<form action="" id="main" name="main" method="POST" class="form-horizontal">

								</form>
								<form id="validasi" action="<?= $form_action ?>" method="POST" target="_blank" class="form-surat form-horizontal">
									<input type="hidden" id="url_surat" name="url_surat" value="<?= $url ?>">
									<input type="hidden" id="url_remote" name="url_remote" value="<?= site_url('') ?>">
									<div class="row jar_form">
										<label class="col-sm-3"></label>
										<div class="col-sm-8">
											<input class="required" type="hidden" name="nik" value="">
										</div>
									</div>


									<div class="form-group">
										<label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
										<div class="col-sm-8">
											<textarea id="keterangan" class="form-control input-sm required" placeholder="Keterangan" name="keterangan"></textarea>
										</div>
									</div>

							</div>

							</form>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?= $this->endSection() ?>