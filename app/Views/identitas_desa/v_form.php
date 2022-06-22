<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<!-- Isi dari Main Content -->
<div class="content-wrapper">
	<section class="content-header">
		<h1>Identitas </h1>
		<ol class="breadcrumb">
			<li><a href="<i class=" fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url(); ?>"></i> Identitas </a></li>
			<li class="active">Ubah Identitas </li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<div class="row">
			<form id="mainform" action="" method="POST" enctype="multipart/form-data" class="form-horizontal" id="validasi">
				<div class="col-md-3">
					<div class="box box-primary">
						<div class="box-body box-profile">
							<img class="profile-user-img img-responsive img-circle" src="" alt="Logo">
							<br />
							<p class="text-center text-bold">Lambang</p>
							<p class="text-muted text-center text-red">(Kosongkan, jika logo tidak berubah)</p>
							<br />
							<div class="input-group input-group-sm">
								<input type="text" class="form-control" id="file_path">
								<input type="file" class="hidden" id="file" name="logo">
								<input type="hidden" name="old_logo" value="<?= $main['logo']; ?>">
								<span class="input-group-btn">
									<button type="button" class="btn btn-info btn-flat" id="file_browser"><i class="fa fa-search"></i> Browse</button>
								</span>
							</div>
						</div>
					</div>
					<div class="box box-primary">
						<div class="box-body box-profile">
							<img class="img-responsive" src="" alt="Kantor">
							<br />
							<p class="text-center text-bold">Kantor </p>
							<p class="text-muted text-center text-red">(Kosongkan, jika kantor tidak berubah)</p>
							<br />
							<div class="input-group input-group-sm">
								<input type="text" class="form-control" id="file_path2">
								<input type="file" class="hidden" id="file2" name="kantor_desa">
								<input type="hidden" name="old_kantor_desa" value="<?= $main['kantor_desa']; ?>">
								<span class="input-group-btn">
									<button type="button" class="btn btn-info btn-flat" id="file_browser2"><i class="fa fa-search"></i> Browse</button>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="box box-primary">
						<div class="box-header with-border">
							<a href="<?= site_url('identitas_desa'); ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data "><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Data Identitas </a>
						</div>
						<div class="box-body">
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nama">Nama </label>
								<div class="col-sm-8">
									<input id="nama_desa" name="nama_desa" class="form-control input-sm nama_terbatas required" maxlength="50" type="text" placeholder="Nama " value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="kode_desa">Kode</label>
								<div class="col-sm-2">
									<input id="kode_desa" name="kode_desa" class="form-control input-sm bilangan required" minlength="10" maxlength="10" type="text" placeholder="Kode " value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="kode_pos">Kode Pos </label>
								<div class="col-sm-2">
									<input id="kode_pos" name="kode_pos" class="form-control input-sm number" minlength="5" maxlength="5" type="text" placeholder="Kode Pos " value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nama_kepala_desa">Kepala</label>
								<div class="col-sm-8">
									<input id="nama_kepala_desa" name="nama_kepala_desa" class="form-control input-sm nama required" maxlength="50" type="text" placeholder="Kepala " value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nip_kepala_desa">NIP Kepala </label>
								<div class="col-sm-8">
									<input id="nip_kepala_desa" name="nip_kepala_desa" class="form-control input-sm nomor_sk" maxlength="50" type="text" placeholder="NIP Kepala " value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="alamat_kantor">Alamat Kantor</label>
								<div class="col-sm-8">
									<textarea id="alamat_kantor" name="alamat_kantor" class="form-control input-sm alamat required" maxlength="100" placeholder="Alamat Kantor " rows="3" style="resize:none;"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="email_desa">E-Mail</label>
								<div class="col-sm-8">
									<input id="email_desa" name="email_desa" class="form-control input-sm email" maxlength="50" type="text" placeholder="E-Mail " value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="telepon">Telpon</label>
								<div class="col-sm-8">
									<input id="" name="telepon" class="form-control input-sm bilangan" type="text" maxlength="15" placeholder="Telpon " value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="">Website </label>
								<div class="col-sm-8">
									<input id="" name="" class="form-control input-sm url" maxlength="50" type="text" placeholder=" " value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="">Nama <?= $kecamatan; ?></label>
								<div class="col-sm-8">
									<input id="nama_kecamatan" name="" class="form-control input-sm nama_terbatas required" maxlength="50" type="text" placeholder="Nama " value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="">Kode <?= $kecamatan; ?></label>
								<div class="col-sm-2">
									<input id="" name="" class="form-control input-sm bilangan required" type="text" minlength="6" maxlength="6" placeholder="Kode " value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nama_kecamatan">Nama </label>
								<div class="col-sm-8">
									<input id="nama_kepala_camat" name="nama_kepala_camat" class="form-control input-sm nama required" maxlength="50" type="text" placeholder="Nama " value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="">NIP</label>
								<div class="col-sm-4">
									<input id="" name="" class="form-control input-sm " maxlength="50" type="text" placeholder=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="nama_kabupaten">Nama </label>
								<div class="col-sm-8">
									<input id="" name="" class="form-control input-sm nama_terbatas required" maxlength="50" type="text" placeholder="Nama " value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="">Kode </label>
								<div class="col-sm-2">
									<input id="" name="" class="form-control input-sm bilangan required" minlength="4" maxlength="4" type="text" placeholder="Kode" value=""></input>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label" for="">Provinsi</label>
								<div class="col-sm-4">
									<select name="" class="form-control select2 input-sm required" onchange="" style="width: 100%;">
										<option value="">Pilih Provinsi</option>

										<option value="" data-kode=" ></option>
									
								</select>
							</div>
						</div>
						<div class=" form-group">
											<label class="col-sm-3 control-label" for="kode_propinsi">Kode Provinsi</label>
											<div class="col-sm-2">
												<input id="kode_propinsi" name="kode_propinsi" class="form-control input-sm bilangan required" minlength="2" maxlength="2" type="text" placeholder="Kode Provinsi" value=""></input>
											</div>
								</div>
							</div>
							<div class='box-footer'>
								<button type='reset' class='btn btn-social btn-flat btn-danger btn-sm'><i class='fa fa-times'></i> Batal</button>
								<button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right'><i class='fa fa-check'></i> Simpan</button>
							</div>
						</div>
					</div>
			</form>
		</div>
	</section>
</div>


<?= $this->endSection() ?>