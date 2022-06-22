<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<!-- Isi dari Main Content -->
<section class="section">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-file"></i> Su-Ket Kematian
			</h3>
		</div>
		<!-- ini menu input -->
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="pull-left">
						<div class="box-header">
							<a href="../surat" class="btn btn-primary pull-right" data-toggle="modal" data-target="#infoBox" title=" Kembali Ke Daftar Wilayah">
								<i class=" fa fa-arrow-circle-left "></i>Kembali Ke Daftar Cetak Surat
							</a>
						</div>
						<br>
						</br>
						<div class="box-body">
							<form id="main" name="main" method="POST" class="form-horizontal">
								<div class="col-md-12">
									<div class="form-group row">
										<label for="nik" class="col-sm-3 control-label">NIK / Nama Yang Meninggal</label>
										<div class="col-sm-6 col-lg-4">
											<select class="form-control input-sm select2-nik select2-hidden-accessible" id="nik" name="nik" style="width:100%;" onchange="formAction('main')" data-select2-id="nik" tabindex="-1" aria-hidden="true">
												<option value="" data-select2-id="8">-- Cari NIK / Nama Penduduk Berstatus Dasar 'MATI' --</option>

											</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-nik-container"><span class="select2-selection__rendered" id="select2-nik-container" role="textbox" aria-readonly="true" title="--  Cari NIK / Nama Penduduk Berstatus Dasar 'MATI' --">-- Cari NIK / Nama Penduduk Berstatus Dasar 'MATI' --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
									</div>
								</div>
								<input type="hidden" name="sidcsrf" value="683495074884688db32fa47c7ff97a00">
							</form>
							<form id="validasi" action="../surat/doc/surat_ket_kematian" method="POST" target="_blank" class="form-surat form-horizontal">
								<input type="hidden" id="url_surat" name="url_surat" value="surat_ket_kematian">
								<input type="hidden" id="url_remote" name="url_remote" value="../surat/nomor_surat_duplikat">
								<div class="col-md-12">
									<div class="row jar_form">
										<label for="nomor" class="col-sm-3"></label>
										<div class="col-sm-8">
											<input class="required" type="hidden" name="nik" value="">
										</div>
									</div>
									<input name="anchor" type="hidden" value="">
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

									<div class="form-group row tdk-permohonan">
										<input type="hidden" name="id_surat" value="24">
										<label class="col-sm-3 control-label">Nomor Surat</label>
										<div class="col-sm-4">
											<input id="nomor" class="form-control input-sm digits required" type="text" placeholder="Nomor Surat" name="nomor" value="1">
											<p class="help-block text-red small">Terakhir untuk jenis surat Keterangan Kematian: <strong></strong> (tgl: -)</p>
										</div>
										<div class="col-sm-4">
											<p class="help-block"><em>Format nomor surat: </em><span id="format_nomor">S-21/001/3213272001/VI/2022</span></p>
										</div>
									</div>
									<div class="form-group row">
										<label for="ttl" class="col-sm-3 control-label">Hari / Tanggal / Jam Kematian</label>
										<div class="col-sm-3 col-lg-4">
											<input id="hari" readonly="readonly" class="form-control input-sm" type="text" placeholder="Hari Kematian" name="hari" value="">
										</div>
										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal" class="form-control input-sm required datepicker" name="tanggal_mati" type="text" value="">
											</div>
										</div>
										<div class="col-sm-2">
											<div class="input-group input-group-sm date row">
												<div class="input-group-addon">
													<i class="fa fa-clock-o"></i>
												</div>
												<input class="form-control input-sm required" name="jam" id="jammenit_1" type="text" value="">
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label for="tempat_mati" class="col-sm-3 control-label">Tempat Meninggal</label>
										<div class="col-sm-8">
											<input type="text" name="tempat_mati" class="form-control input-sm required" placeholder="Tempat Meninggal" value="">
										</div>
									</div>
									<div class="form-group row">
										<label for="sebab" class="col-sm-3 control-label">Penyebab Kematian</label>
										<div class="col-sm-4">
											<input name="sebab_nama" type="hidden" value="">
											<select class="form-control input-sm required" name="sebab" onchange="$('input[name=sebab_nama]').val($(this).find(':selected').data('sebabnama'));">
												<option value="">Pilih Sebab</option>
												<option value="1" data-sebabnama="Sakit biasa / tua">Sakit biasa / tua</option>
												<option value="2" data-sebabnama="Wabah Penyakit">Wabah Penyakit</option>
												<option value="3" data-sebabnama="Kecelakaan">Kecelakaan</option>
												<option value="4" data-sebabnama="Kriminalitas">Kriminalitas</option>
												<option value="5" data-sebabnama="Bunuh Diri">Bunuh Diri</option>
												<option value="6" data-sebabnama="Lainnya">Lainnya</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="sebab" class="col-sm-3 control-label"> Yang Menerangkan</label>
										<div class="col-sm-4">
											<select class="form-control input-sm required" name="penolong_mati">
												<option value="">Pilih Penolong mati</option>
												<option value="1">Dokter</option>
												<option value="2">Tenaga Kesehatan</option>
												<option value="3">Kepolisian</option>
												<option value="4">Lainnya</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="anakke" class="col-sm-3 control-label">Anak Ke</label>
										<div class="col-sm-2">
											<input type="text" name="anakke" class="form-control input-sm data_lahir required" placeholder="Anak Ke" value="">
										</div>
									</div>
									<!-- AYAH -->
									<div class="form-group row ibu_desa bg-info">
										<label class="col-sm-3 control-label text-red"><strong>DATA AYAH DARI DATABASE</strong></label>
									</div>
									<div class="form-group row ibu_desa">
										<label class="col-sm-3 control-label">NIK</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" value="" disabled="">
										</div>
									</div>
									<div class="form-group row ibu_desa">
										<label class="col-sm-3 control-label">Nama</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" value="" disabled="">
										</div>
									</div>
									<div class="form-group row konfirmasi">
										<label for="keperluan" class="col-sm-3 control-label">Tempat / Tanggal Lahir / Umur</label>
										<div class="col-sm-4">
											<input class="form-control input-sm" type="text" value=" " disabled="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" value="- " disabled="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" value=" TAHUN" disabled="">
										</div>
									</div>
									<div class="form-group row konfirmasi">
										<label for="keperluan" class="col-sm-3 control-label">Alamat</label>
										<div class="col-sm-8">
											<input class="form-control input-sm" type="text" value="" disabled="">
										</div>
									</div>
									<div class="form-group row konfirmasi">
										<label for="keperluan" class="col-sm-3 control-label">Pendidikan / Warga Negara /Agama</label>
										<div class="col-sm-4">
											<input class="form-control input-sm" type="text" value="" disabled="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" value="" disabled="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" value=" " disabled="">
										</div>
									</div>
									<div class="form-group row konfirmasi tdk-permohonan tdk-periksa">
										<label for="persyaratan" class="col-sm-3 control-label">Dokumen Kelengkapan / Syarat</label>
										<div class="col-sm-8">
											<a href="../penduduk/dokumen_list/" class="btn btn-social btn-flat btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Daftar Dokumen">
												<i class="fa fa-book"></i> Daftar Dokumen
											</a>
											<a href="../penduduk/dokumen/" class="btn btn-social btn-flat btn-primary btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" target="_blank">
												<i class="fa fa-gears"></i> Manajemen Dokumen
											</a>
										</div>
									</div>
									<div class="form-group row ibu_desa bg-info">
										<label class="col-sm-3 control-label text-red"><strong>DATA IBU DARI DATABASE</strong></label>
									</div>
									<div class="form-group row ibu_desa">
										<label class="col-sm-3 control-label">NIK</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" value="" disabled="">
										</div>
									</div>
									<div class="form-group row ibu_desa">
										<label class="col-sm-3 control-label">Nama</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" value="" disabled="">
										</div>
									</div>
									<div class="form-group row konfirmasi">
										<label for="keperluan" class="col-sm-3 control-label">Tempat / Tanggal Lahir / Umur</label>
										<div class="col-sm-4">
											<input class="form-control input-sm" type="text" value=" " disabled="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" value="- " disabled="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" value=" TAHUN" disabled="">
										</div>
									</div>
									<div class="form-group row konfirmasi">
										<label for="keperluan" class="col-sm-3 control-label">Alamat</label>
										<div class="col-sm-8">
											<input class="form-control input-sm" type="text" value="" disabled="">
										</div>
									</div>
									<div class="form-group row konfirmasi">
										<label for="keperluan" class="col-sm-3 control-label">Pendidikan / Warga Negara /Agama</label>
										<div class="col-sm-4">
											<input class="form-control input-sm" type="text" value="" disabled="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" value="" disabled="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm" type="text" value=" " disabled="">
										</div>
									</div>
									<div class="form-group row konfirmasi tdk-permohonan tdk-periksa">
										<label for="persyaratan" class="col-sm-3 control-label">Dokumen Kelengkapan / Syarat</label>
										<div class="col-sm-8">
											<a href="../penduduk/dokumen_list/" class="btn btn-social btn-flat btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Daftar Dokumen">
												<i class="fa fa-book"></i> Daftar Dokumen
											</a>
											<a href="../penduduk/dokumen/" class="btn btn-social btn-flat btn-primary btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" target="_blank">
												<i class="fa fa-gears"></i> Manajemen Dokumen
											</a>
										</div>
									</div>
									<div class="form-group row subtitle_head" id="a_pelapor">
										<label class="col-sm-3 control-label">PELAPOR</label>
										<div class="btn-group col-sm-8" data-toggle="buttons">
											<label class="btn btn-info btn-flat btn-sm col-sm-4 col-sm-4 col-md-4 col-lg-3 form-check-label ">
												<input id="pelapor_1" type="radio" name="pelapor" class="form-check-input" value="1" autocomplete="off" onchange="ubah_pelapor(this.value);"> Warga Desa
											</label>
											<label id="label_pelapor_2" class="btn btn-info btn-flat btn-sm col-sm-4 col-md-4 col-lg-3 form-check-label active">
												<input id="pelapor_2" type="radio" name="pelapor" class="form-check-input" value="2" checked="" autocomplete="off" onchange="ubah_pelapor(this.value);"> Warga Luar Desa
											</label>
										</div>
									</div>
									<div class="form-group row pelapor_desa" style="display: none;">
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA PELAPOR WARGA DESA</strong></label>
									</div>
									<div class="form-group pelapor_desa" style="display: none;">
										<label for="id_pelapor" class="col-sm-3 control-label"><strong>NIK / Nama</strong></label>
										<div class="col-sm-5">
											<select class="form-control input-sm select2-nik-ajax select2-hidden-accessible" id="id_pelapor" name="id_pelapor" style="width:100%;" data-url="../surat/list_penduduk_ajax" onchange="submit_form_ambil_data('a_pelapor');" data-select2-id="id_pelapor" tabindex="-1" aria-hidden="true">
											</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_pelapor-container"><span class="select2-selection__rendered" id="select2-id_pelapor-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">-- Cari NIK / Tag ID Card / Nama Penduduk --</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
									</div>
									<div class="form-group row pelapor_luar_desa bg-info">
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA PELAPOR LUAR DESA</strong></label>
									</div>
									<div class="form-group row pelapor_luar_desa">
										<label for="nama_pelapor" class="col-sm-3 control-label">Nama Pelapor</label>
										<div class="col-sm-8">
											<input class="form-control input-sm required" type="text" placeholder="Nama Pelapor" name="nama_pelapor" value="">
										</div>
									</div>
									<div class="form-group row pelapor_luar_desa">
										<label for="nik_pelapor" class="col-sm-3 control-label">NIK Pelapor</label>
										<div class="col-sm-8">
											<input class="form-control input-sm required" type="text" placeholder="NIK Pelapor" name="nik_pelapor" value="">
										</div>
									</div>
									<div class="form-group row pelapor_luar_desa">
										<label for="tempat_lahir_pelapor" class="col-sm-3 control-label">Tempat / Tanggal Lahir / Umur</label>
										<div class="col-sm-3 col-lg-4">
											<input class="form-control input-sm" type="text" name="tempat_lahir_pelapor" id="tempat_lahir_pelapor" placeholder="Tempat Lahir Pelapor" value="">
										</div>
										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal" class="form-control input-sm required datepicker" name="tanggal_lahir_pelapor" type="text" placeholder="Tgl. Lahir" value="" onchange="$('input[name=umur_pelapor]').val(_calculateAge($(this).val()));">
											</div>
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm" name="umur_pelapor" readonly="readonly" placeholder="Umur (Tahun)" type="text" value="">
										</div>
									</div>
									<div class="form-group row pelapor_luar_desa">
										<label for="pekerjaanpelapor" class="col-sm-3 control-label"><strong>Jenis Kelamin / Pekerjaan</strong></label>
										<div class="col-sm-4">
											<select class="form-control input-sm required" name="jkpelapor" id="jkpelapor">
												<option value="">-- Jenis Kelamin --</option>
												<option value="1">LAKI-LAKI</option>
												<option value="2">PEREMPUAN</option>
											</select>
										</div>
										<div class="col-sm-4">
											<input type="hidden" name="pekerjaanid_pelapor">
											<select class="form-control input-sm required" name="pekerjaanpelapor" id="pekerjaanpelapor" onchange="$('input[name=pekerjaanid_pelapor]').val($(this).find(':selected').data('pekerjaanid'));">
												<option value="">-- Pekerjaan --</option>
												<option value="Belum/Tidak Bekerja" data-pekerjaanid="1">Belum/Tidak Bekerja</option>
												<option value="Mengurus Rumah Tangga" data-pekerjaanid="2">Mengurus Rumah Tangga</option>
												<option value="Pelajar/Mahasiswa" data-pekerjaanid="3">Pelajar/Mahasiswa</option>
												<option value="Pensiunan" data-pekerjaanid="4">Pensiunan</option>
												<option value="Pegawai Negeri Sipil (PNS)" data-pekerjaanid="5">Pegawai Negeri Sipil (PNS)</option>
												<option value="Tentara Nasional Indonesia (TNI)" data-pekerjaanid="6">Tentara Nasional Indonesia (TNI)</option>
												<option value="Kepolisian RI (POLRI)" data-pekerjaanid="7">Kepolisian RI (POLRI)</option>
												<option value="Perdagangan" data-pekerjaanid="8">Perdagangan</option>
												<option value="Petani/Pekebun" data-pekerjaanid="9">Petani/Pekebun</option>
												<option value="Peternak" data-pekerjaanid="10">Peternak</option>
												<option value="Nelayan/Perikanan" data-pekerjaanid="11">Nelayan/Perikanan</option>
												<option value="Industri" data-pekerjaanid="12">Industri</option>
												<option value="Konstruksi" data-pekerjaanid="13">Konstruksi</option>
												<option value="Transportasi" data-pekerjaanid="14">Transportasi</option>
												<option value="Karyawan Swasta" data-pekerjaanid="15">Karyawan Swasta</option>
												<option value="Karyawan Bumn" data-pekerjaanid="16">Karyawan Bumn</option>
												<option value="Karyawan Bumd" data-pekerjaanid="17">Karyawan Bumd</option>
												<option value="Karyawan Honorer" data-pekerjaanid="18">Karyawan Honorer</option>
												<option value="Buruh Harian Lepas" data-pekerjaanid="19">Buruh Harian Lepas</option>
												<option value="Buruh Tani/Perkebunan" data-pekerjaanid="20">Buruh Tani/Perkebunan</option>
												<option value="Buruh Nelayan/Perikanan" data-pekerjaanid="21">Buruh Nelayan/Perikanan</option>
												<option value="Buruh Peternakan" data-pekerjaanid="22">Buruh Peternakan</option>
												<option value="Pembantu Rumah Tangga" data-pekerjaanid="23">Pembantu Rumah Tangga</option>
												<option value="Tukang Cukur" data-pekerjaanid="24">Tukang Cukur</option>
												<option value="Tukang Listrik" data-pekerjaanid="25">Tukang Listrik</option>
												<option value="Tukang Batu" data-pekerjaanid="26">Tukang Batu</option>
												<option value="Tukang Kayu" data-pekerjaanid="27">Tukang Kayu</option>
												<option value="Tukang Sol Sepatu" data-pekerjaanid="28">Tukang Sol Sepatu</option>
												<option value="Tukang Las/Pandai Besi" data-pekerjaanid="29">Tukang Las/Pandai Besi</option>
												<option value="Tukang Jahit" data-pekerjaanid="30">Tukang Jahit</option>
												<option value="Tukang Gigi" data-pekerjaanid="31">Tukang Gigi</option>
												<option value="Penata Rias" data-pekerjaanid="32">Penata Rias</option>
												<option value="Penata Busana" data-pekerjaanid="33">Penata Busana</option>
												<option value="Penata Rambut" data-pekerjaanid="34">Penata Rambut</option>
												<option value="Mekanik" data-pekerjaanid="35">Mekanik</option>
												<option value="Seniman" data-pekerjaanid="36">Seniman</option>
												<option value="Tabib" data-pekerjaanid="37">Tabib</option>
												<option value="Paraji" data-pekerjaanid="38">Paraji</option>
												<option value="Perancang Busana" data-pekerjaanid="39">Perancang Busana</option>
												<option value="Penterjemah" data-pekerjaanid="40">Penterjemah</option>
												<option value="Imam Masjid" data-pekerjaanid="41">Imam Masjid</option>
												<option value="Pendeta" data-pekerjaanid="42">Pendeta</option>
												<option value="Pastor" data-pekerjaanid="43">Pastor</option>
												<option value="Wartawan" data-pekerjaanid="44">Wartawan</option>
												<option value="Ustadz/Mubaligh" data-pekerjaanid="45">Ustadz/Mubaligh</option>
												<option value="Juru Masak" data-pekerjaanid="46">Juru Masak</option>
												<option value="Promotor Acara" data-pekerjaanid="47">Promotor Acara</option>
												<option value="Anggota DPR-RI" data-pekerjaanid="48">Anggota DPR-RI</option>
												<option value="Anggota DPD" data-pekerjaanid="49">Anggota DPD</option>
												<option value="Anggota BPK" data-pekerjaanid="50">Anggota BPK</option>
												<option value="Presiden" data-pekerjaanid="51">Presiden</option>
												<option value="Wakil Presiden" data-pekerjaanid="52">Wakil Presiden</option>
												<option value="Anggota Mahkamah Konstitusi" data-pekerjaanid="53">Anggota Mahkamah Konstitusi</option>
												<option value="Anggota Kabinet Kementerian" data-pekerjaanid="54">Anggota Kabinet Kementerian</option>
												<option value="Duta Besar" data-pekerjaanid="55">Duta Besar</option>
												<option value="Gubernur" data-pekerjaanid="56">Gubernur</option>
												<option value="Wakil Gubernur" data-pekerjaanid="57">Wakil Gubernur</option>
												<option value="Bupati" data-pekerjaanid="58">Bupati</option>
												<option value="Wakil Bupati" data-pekerjaanid="59">Wakil Bupati</option>
												<option value="Walikota" data-pekerjaanid="60">Walikota</option>
												<option value="Wakil Walikota" data-pekerjaanid="61">Wakil Walikota</option>
												<option value="Anggota DPRD Provinsi" data-pekerjaanid="62">Anggota DPRD Provinsi</option>
												<option value="Anggota DPRD Kabupaten/Kota" data-pekerjaanid="63">Anggota DPRD Kabupaten/Kota</option>
												<option value="Dosen" data-pekerjaanid="64">Dosen</option>
												<option value="Guru" data-pekerjaanid="65">Guru</option>
												<option value="Pilot" data-pekerjaanid="66">Pilot</option>
												<option value="Pengacara" data-pekerjaanid="67">Pengacara</option>
												<option value="Notaris" data-pekerjaanid="68">Notaris</option>
												<option value="Arsitek" data-pekerjaanid="69">Arsitek</option>
												<option value="Akuntan" data-pekerjaanid="70">Akuntan</option>
												<option value="Konsultan" data-pekerjaanid="71">Konsultan</option>
												<option value="Dokter" data-pekerjaanid="72">Dokter</option>
												<option value="Bidan" data-pekerjaanid="73">Bidan</option>
												<option value="Perawat" data-pekerjaanid="74">Perawat</option>
												<option value="Apoteker" data-pekerjaanid="75">Apoteker</option>
												<option value="Psikiater/Psikolog" data-pekerjaanid="76">Psikiater/Psikolog</option>
												<option value="Penyiar Televisi" data-pekerjaanid="77">Penyiar Televisi</option>
												<option value="Penyiar Radio" data-pekerjaanid="78">Penyiar Radio</option>
												<option value="Pelaut" data-pekerjaanid="79">Pelaut</option>
												<option value="Peneliti" data-pekerjaanid="80">Peneliti</option>
												<option value="Sopir" data-pekerjaanid="81">Sopir</option>
												<option value="Pialang" data-pekerjaanid="82">Pialang</option>
												<option value="Paranormal" data-pekerjaanid="83">Paranormal</option>
												<option value="Pedagang" data-pekerjaanid="84">Pedagang</option>
												<option value="Perangkat Desa" data-pekerjaanid="85">Perangkat Desa</option>
												<option value="Kepala Desa" data-pekerjaanid="86">Kepala Desa</option>
												<option value="Biarawati" data-pekerjaanid="87">Biarawati</option>
												<option value="Wiraswasta" data-pekerjaanid="88">Wiraswasta</option>
												<option value="Lainnya" data-pekerjaanid="89">Lainnya</option>
											</select>
										</div>
									</div>
									<div class="form-group row pelapor_luar_desa">
										<label for="alamat_pelapor" class="col-sm-3 control-label">Alamat / RT / RW</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="alamat_pelapor" id="alamat_pelapor" placeholder="Alamat" value="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm required" type="text" name="rt_pelapor" id="rt_pelapor" placeholder="RT" value="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm required" name="rw_pelapor" id="rw_pelapor" type="text" placeholder="RW" value="">
										</div>
									</div>
									<div class="form-group row pelapor_luar_desa">
										<label for="alamat_pelapor" class="col-sm-3 control-label">Desa / Kecamatan</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="desapelapor" id="desapelapor" placeholder="Desa" value="">
										</div>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="kecpelapor" id="kecpelapor" placeholder="Kecamatan" value="">
										</div>
									</div>
									<div class="form-group row pelapor_luar_desa">
										<label for="alamat_pelapor" class="col-sm-3 control-label">Kabupaten / Provinsi</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="kabpelapor" id="kabpelapor" placeholder="Kabupaten" value="">
										</div>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="provinsipelapor" id="provinsipelapor" placeholder="Provinsi" value="">
										</div>
									</div>
									<div class="form-group row">
										<label for="hubungan_pelapor" class="col-sm-3 control-label">Hubungan pelapor dengan yang mati</label>
										<div class="col-sm-8">
											<input class="form-control input-sm required" type="text" placeholder="Hubungan pelapor dengan yang mati" name="hubungan_pelapor" value="">
										</div>
									</div>
									<div class="form-group row subtitle_head" id="a_saksi1">
										<label class="col-sm-3 control-label" for="status">SAKSI 1</label>
										<div class="btn-group col-sm-8" data-toggle="buttons">
											<label class="btn btn-info btn-flat btn-sm col-sm-4 col-sm-4 col-md-4 col-lg-3 form-check-label ">
												<input id="saksi1_1" type="radio" name="saksi1" class="form-check-input" value="1" autocomplete="off" onchange="ubah_saksi1(this.value);"> Warga Desa
											</label>
											<label id="label_saksi1_2" class="btn btn-info btn-flat btn-sm col-sm-4 col-md-4 col-lg-3 form-check-label active">
												<input id="saksi1_2" type="radio" name="saksi1" class="form-check-input" value="2" checked="" autocomplete="off" onchange="ubah_saksi1(this.value);"> Warga Luar Desa
											</label>
										</div>
									</div>
									<div class="form-group row saksi1_desa" style="display: none;">
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA SAKSI 1 DARI DATABASE</strong></label>
									</div>
									<div class="form-group row saksi1_desa" style="display: none;">
										<label for="saksi1_desa" class="col-sm-3 control-label"><strong>NIK / Nama</strong></label>
										<div class="col-sm-5">
											<select class="form-control input-sm select2-nik-ajax select2-hidden-accessible" id="id_saksi1" name="id_saksi1" style="width:100%;" data-url="../surat/list_penduduk_ajax" onchange="submit_form_ambil_data('a_saksi1');" data-select2-id="id_saksi1" tabindex="-1" aria-hidden="true">
											</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_saksi1-container"><span class="select2-selection__rendered" id="select2-id_saksi1-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">-- Cari NIK / Tag ID Card / Nama Penduduk --</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
									</div>
									<div class="form-group row saksi1_luar_desa bg-info">
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA SAKSI 1 LUAR DESA</strong></label>
									</div>
									<div class="form-group row saksi1_luar_desa">
										<label for="nama_saksi1" class="col-sm-3 control-label">Nama Saksi</label>
										<div class="col-sm-8">
											<input class="form-control input-sm required" type="text" placeholder="Nama Saksi" name="nama_saksi1" value="">
										</div>
									</div>
									<div class="form-group row saksi1_luar_desa">
										<label for="nik_saksi1" class="col-sm-3 control-label">NIK Saksi</label>
										<div class="col-sm-8">
											<input class="form-control input-sm required" type="text" placeholder="NIK Saksi" name="nik_saksi1" value="">
										</div>
									</div>
									<div class="form-group row saksi1_luar_desa">
										<label for="tempat_lahir_saksi1" class="col-sm-3 control-label">Tempat / Tanggal Lahir / Umur</label>
										<div class="col-sm-3 col-lg-4">
											<input class="form-control input-sm required" type="text" name="tempat_lahir_saksi1" id="tempat_lahir_saksi1" placeholder="Tempat Lahir Saksi" value="">
										</div>
										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal" class="form-control input-sm required datepicker" name="tanggal_lahir_saksi1" type="text" placeholder="Tgl. Lahir" value="" onchange="$('input[name=umur_saksi1]').val(_calculateAge($(this).val()));">
											</div>
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm required" name="umur_saksi1" readonly="readonly" placeholder="Umur (Tahun)" type="text" value="">
										</div>
									</div>
									<div class="form-group row saksi1_luar_desa">
										<label for="pekerjaansaksi1" class="col-sm-3 control-label"><strong>Jenis Kelamin / Pekerjaan</strong></label>
										<div class="col-sm-4">
											<select class="form-control input-sm required" name="jksaksi1" id="jksaksi1">
												<option value="">-- Jenis Kelamin --</option>
												<option value="1">LAKI-LAKI</option>
												<option value="2">PEREMPUAN</option>
											</select>
										</div>
										<div class="col-sm-4">
											<input type="hidden" name="pekerjaanid_saksi1">
											<select class="form-control input-sm required" name="pekerjaansaksi1" id="pekerjaansaksi1" onchange="$('input[name=pekerjaanid_saksi1]').val($(this).find(':selected').data('pekerjaanid'));">
												<option value="">-- Pekerjaan --</option>
												<option value="Belum/Tidak Bekerja" data-pekerjaanid="1">Belum/Tidak Bekerja</option>
												<option value="Mengurus Rumah Tangga" data-pekerjaanid="2">Mengurus Rumah Tangga</option>
												<option value="Pelajar/Mahasiswa" data-pekerjaanid="3">Pelajar/Mahasiswa</option>
												<option value="Pensiunan" data-pekerjaanid="4">Pensiunan</option>
												<option value="Pegawai Negeri Sipil (PNS)" data-pekerjaanid="5">Pegawai Negeri Sipil (PNS)</option>
												<option value="Tentara Nasional Indonesia (TNI)" data-pekerjaanid="6">Tentara Nasional Indonesia (TNI)</option>
												<option value="Kepolisian RI (POLRI)" data-pekerjaanid="7">Kepolisian RI (POLRI)</option>
												<option value="Perdagangan" data-pekerjaanid="8">Perdagangan</option>
												<option value="Petani/Pekebun" data-pekerjaanid="9">Petani/Pekebun</option>
												<option value="Peternak" data-pekerjaanid="10">Peternak</option>
												<option value="Nelayan/Perikanan" data-pekerjaanid="11">Nelayan/Perikanan</option>
												<option value="Industri" data-pekerjaanid="12">Industri</option>
												<option value="Konstruksi" data-pekerjaanid="13">Konstruksi</option>
												<option value="Transportasi" data-pekerjaanid="14">Transportasi</option>
												<option value="Karyawan Swasta" data-pekerjaanid="15">Karyawan Swasta</option>
												<option value="Karyawan Bumn" data-pekerjaanid="16">Karyawan Bumn</option>
												<option value="Karyawan Bumd" data-pekerjaanid="17">Karyawan Bumd</option>
												<option value="Karyawan Honorer" data-pekerjaanid="18">Karyawan Honorer</option>
												<option value="Buruh Harian Lepas" data-pekerjaanid="19">Buruh Harian Lepas</option>
												<option value="Buruh Tani/Perkebunan" data-pekerjaanid="20">Buruh Tani/Perkebunan</option>
												<option value="Buruh Nelayan/Perikanan" data-pekerjaanid="21">Buruh Nelayan/Perikanan</option>
												<option value="Buruh Peternakan" data-pekerjaanid="22">Buruh Peternakan</option>
												<option value="Pembantu Rumah Tangga" data-pekerjaanid="23">Pembantu Rumah Tangga</option>
												<option value="Tukang Cukur" data-pekerjaanid="24">Tukang Cukur</option>
												<option value="Tukang Listrik" data-pekerjaanid="25">Tukang Listrik</option>
												<option value="Tukang Batu" data-pekerjaanid="26">Tukang Batu</option>
												<option value="Tukang Kayu" data-pekerjaanid="27">Tukang Kayu</option>
												<option value="Tukang Sol Sepatu" data-pekerjaanid="28">Tukang Sol Sepatu</option>
												<option value="Tukang Las/Pandai Besi" data-pekerjaanid="29">Tukang Las/Pandai Besi</option>
												<option value="Tukang Jahit" data-pekerjaanid="30">Tukang Jahit</option>
												<option value="Tukang Gigi" data-pekerjaanid="31">Tukang Gigi</option>
												<option value="Penata Rias" data-pekerjaanid="32">Penata Rias</option>
												<option value="Penata Busana" data-pekerjaanid="33">Penata Busana</option>
												<option value="Penata Rambut" data-pekerjaanid="34">Penata Rambut</option>
												<option value="Mekanik" data-pekerjaanid="35">Mekanik</option>
												<option value="Seniman" data-pekerjaanid="36">Seniman</option>
												<option value="Tabib" data-pekerjaanid="37">Tabib</option>
												<option value="Paraji" data-pekerjaanid="38">Paraji</option>
												<option value="Perancang Busana" data-pekerjaanid="39">Perancang Busana</option>
												<option value="Penterjemah" data-pekerjaanid="40">Penterjemah</option>
												<option value="Imam Masjid" data-pekerjaanid="41">Imam Masjid</option>
												<option value="Pendeta" data-pekerjaanid="42">Pendeta</option>
												<option value="Pastor" data-pekerjaanid="43">Pastor</option>
												<option value="Wartawan" data-pekerjaanid="44">Wartawan</option>
												<option value="Ustadz/Mubaligh" data-pekerjaanid="45">Ustadz/Mubaligh</option>
												<option value="Juru Masak" data-pekerjaanid="46">Juru Masak</option>
												<option value="Promotor Acara" data-pekerjaanid="47">Promotor Acara</option>
												<option value="Anggota DPR-RI" data-pekerjaanid="48">Anggota DPR-RI</option>
												<option value="Anggota DPD" data-pekerjaanid="49">Anggota DPD</option>
												<option value="Anggota BPK" data-pekerjaanid="50">Anggota BPK</option>
												<option value="Presiden" data-pekerjaanid="51">Presiden</option>
												<option value="Wakil Presiden" data-pekerjaanid="52">Wakil Presiden</option>
												<option value="Anggota Mahkamah Konstitusi" data-pekerjaanid="53">Anggota Mahkamah Konstitusi</option>
												<option value="Anggota Kabinet Kementerian" data-pekerjaanid="54">Anggota Kabinet Kementerian</option>
												<option value="Duta Besar" data-pekerjaanid="55">Duta Besar</option>
												<option value="Gubernur" data-pekerjaanid="56">Gubernur</option>
												<option value="Wakil Gubernur" data-pekerjaanid="57">Wakil Gubernur</option>
												<option value="Bupati" data-pekerjaanid="58">Bupati</option>
												<option value="Wakil Bupati" data-pekerjaanid="59">Wakil Bupati</option>
												<option value="Walikota" data-pekerjaanid="60">Walikota</option>
												<option value="Wakil Walikota" data-pekerjaanid="61">Wakil Walikota</option>
												<option value="Anggota DPRD Provinsi" data-pekerjaanid="62">Anggota DPRD Provinsi</option>
												<option value="Anggota DPRD Kabupaten/Kota" data-pekerjaanid="63">Anggota DPRD Kabupaten/Kota</option>
												<option value="Dosen" data-pekerjaanid="64">Dosen</option>
												<option value="Guru" data-pekerjaanid="65">Guru</option>
												<option value="Pilot" data-pekerjaanid="66">Pilot</option>
												<option value="Pengacara" data-pekerjaanid="67">Pengacara</option>
												<option value="Notaris" data-pekerjaanid="68">Notaris</option>
												<option value="Arsitek" data-pekerjaanid="69">Arsitek</option>
												<option value="Akuntan" data-pekerjaanid="70">Akuntan</option>
												<option value="Konsultan" data-pekerjaanid="71">Konsultan</option>
												<option value="Dokter" data-pekerjaanid="72">Dokter</option>
												<option value="Bidan" data-pekerjaanid="73">Bidan</option>
												<option value="Perawat" data-pekerjaanid="74">Perawat</option>
												<option value="Apoteker" data-pekerjaanid="75">Apoteker</option>
												<option value="Psikiater/Psikolog" data-pekerjaanid="76">Psikiater/Psikolog</option>
												<option value="Penyiar Televisi" data-pekerjaanid="77">Penyiar Televisi</option>
												<option value="Penyiar Radio" data-pekerjaanid="78">Penyiar Radio</option>
												<option value="Pelaut" data-pekerjaanid="79">Pelaut</option>
												<option value="Peneliti" data-pekerjaanid="80">Peneliti</option>
												<option value="Sopir" data-pekerjaanid="81">Sopir</option>
												<option value="Pialang" data-pekerjaanid="82">Pialang</option>
												<option value="Paranormal" data-pekerjaanid="83">Paranormal</option>
												<option value="Pedagang" data-pekerjaanid="84">Pedagang</option>
												<option value="Perangkat Desa" data-pekerjaanid="85">Perangkat Desa</option>
												<option value="Kepala Desa" data-pekerjaanid="86">Kepala Desa</option>
												<option value="Biarawati" data-pekerjaanid="87">Biarawati</option>
												<option value="Wiraswasta" data-pekerjaanid="88">Wiraswasta</option>
												<option value="Lainnya" data-pekerjaanid="89">Lainnya</option>
											</select>
										</div>
									</div>
									<div class="form-group row saksi1_luar_desa">
										<label for="alamat_saksi1" class="col-sm-3 control-label">Alamat / RT / RW</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="alamat_saksi1" id="alamat_saksi1" placeholder="Alamat" value="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm required" type="text" name="rt_saksi1" id="rt_saksi1" placeholder="RT" value="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm required" name="rw_saksi1" id="rw_saksi1" type="text" placeholder="RW" value="">
										</div>
									</div>
									<div class="form-group row saksi1_luar_desa">
										<label for="alamat_saksi1" class="col-sm-3 control-label">Desa / Kecamatan</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="desasaksi1" id="desasaksi1" placeholder="Desa" value="">
										</div>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="kecsaksi1" id="kecsaksi1" placeholder="Kecamatan" value="">
										</div>
									</div>
									<div class="form-group row saksi1_luar_desa">
										<label for="alamat_saksi1" class="col-sm-3 control-label">Kabupaten / Provinsi</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="kabsaksi1" id="kabsaksi1" placeholder="Kabupaten" value="">
										</div>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="provinsisaksi1" id="provinsisaksi1" placeholder="Provinsi" value="">
										</div>
									</div>
									<div class="form-group row subtitle_head" id="a_saksi2">
										<label class="col-sm-3 control-label" for="status">SAKSI 2</label>
										<div class="btn-group col-sm-8" data-toggle="buttons">
											<label class="btn btn-info btn-flat btn-sm col-sm-4 col-sm-4 col-md-4 col-lg-3 form-check-label ">
												<input id="saksi2_1" type="radio" name="saksi2" class="form-check-input" value="1" autocomplete="off" onchange="ubah_saksi2(this.value);"> Warga Desa
											</label>
											<label id="label_saksi2_2" class="btn btn-info btn-flat btn-sm col-sm-4 col-md-4 col-lg-3 form-check-label active">
												<input id="saksi2_2" type="radio" name="saksi2" class="form-check-input" value="2" checked="" autocomplete="off" onchange="ubah_saksi2(this.value);"> Warga Luar Desa
											</label>
										</div>
									</div>
									<div class="form-group row saksi2_desa" style="display: none;">
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA SAKSI 2 DARI DATABASE</strong></label>
									</div>
									<div class="form-group row saksi2_desa" style="display: none;">
										<label for="saksi2_desa" class="col-sm-3 control-label"><strong>NIK / Nama</strong></label>
										<div class="col-sm-5">
											<select class="form-control input-sm select2-nik-ajax select2-hidden-accessible" id="id_saksi2" name="id_saksi2" style="width:100%;" data-url="../surat/list_penduduk_ajax" onchange="submit_form_ambil_data('a_saksi2');" data-select2-id="id_saksi2" tabindex="-1" aria-hidden="true">
											</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_saksi2-container"><span class="select2-selection__rendered" id="select2-id_saksi2-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">-- Cari NIK / Tag ID Card / Nama Penduduk --</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
									</div>
									<div class="form-group row saksi2_luar_desa bg-info">
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:-10px;padding-top:10px;padding-bottom:10px"><strong>DATA SAKSI 2 LUAR DESA</strong></label>
									</div>
									<div class="form-group row saksi2_luar_desa">
										<label for="nama_saksi2" class="col-sm-3 control-label">Nama Saksi</label>
										<div class="col-sm-8">
											<input class="form-control input-sm required" type="text" placeholder="Nama Saksi" name="nama_saksi2" value="">
										</div>
									</div>
									<div class="form-group row saksi2_luar_desa">
										<label for="nik_saksi2" class="col-sm-3 control-label">NIK Saksi</label>
										<div class="col-sm-8">
											<input class="form-control input-sm required" type="text" placeholder="NIK Saksi" name="nik_saksi2" value="">
										</div>
									</div>
									<div class="form-group row saksi2_luar_desa">
										<label for="tempat_lahir_saksi2" class="col-sm-3 control-label">Tempat / Tanggal Lahir / Umur</label>
										<div class="col-sm-3 col-lg-4">
											<input class="form-control input-sm required" type="text" name="tempat_lahir_saksi2" id="tempat_lahir_saksi2" placeholder="Tempat Lahir Saksi" value="">
										</div>
										<div class="col-sm-3 col-lg-2">
											<div class="input-group input-group-sm date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input title="Pilih Tanggal" class="form-control input-sm required datepicker" name="tanggal_lahir_saksi2" type="text" placeholder="Tgl. Lahir" value="" onchange="$('input[name=umur_saksi2]').val(_calculateAge($(this).val()));">
											</div>
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm required" name="umur_saksi2" readonly="readonly" placeholder="Umur (Tahun)" type="text" value="">
										</div>
									</div>
									<div class="form-group row saksi2_luar_desa">
										<label for="pekerjaansaksi2" class="col-sm-3 control-label"><strong>Jenis Kelamin / Pekerjaan</strong></label>
										<div class="col-sm-4">
											<select class="form-control input-sm required" name="jksaksi2" id="jksaksi2">
												<option value="">-- Jenis Kelamin --</option>
												<option value="1">LAKI-LAKI</option>
												<option value="2">PEREMPUAN</option>
											</select>
										</div>
										<div class="col-sm-4">
											<input type="hidden" name="pekerjaanid_saksi2">
											<select class="form-control input-sm required" name="pekerjaansaksi2" id="pekerjaansaksi2" onchange="$('input[name=pekerjaanid_saksi2]').val($(this).find(':selected').data('pekerjaanid'));">
												<option value="">-- Pekerjaan --</option>
												<option value="Belum/Tidak Bekerja" data-pekerjaanid="1">Belum/Tidak Bekerja</option>
												<option value="Mengurus Rumah Tangga" data-pekerjaanid="2">Mengurus Rumah Tangga</option>
												<option value="Pelajar/Mahasiswa" data-pekerjaanid="3">Pelajar/Mahasiswa</option>
												<option value="Pensiunan" data-pekerjaanid="4">Pensiunan</option>
												<option value="Pegawai Negeri Sipil (PNS)" data-pekerjaanid="5">Pegawai Negeri Sipil (PNS)</option>
												<option value="Tentara Nasional Indonesia (TNI)" data-pekerjaanid="6">Tentara Nasional Indonesia (TNI)</option>
												<option value="Kepolisian RI (POLRI)" data-pekerjaanid="7">Kepolisian RI (POLRI)</option>
												<option value="Perdagangan" data-pekerjaanid="8">Perdagangan</option>
												<option value="Petani/Pekebun" data-pekerjaanid="9">Petani/Pekebun</option>
												<option value="Peternak" data-pekerjaanid="10">Peternak</option>
												<option value="Nelayan/Perikanan" data-pekerjaanid="11">Nelayan/Perikanan</option>
												<option value="Industri" data-pekerjaanid="12">Industri</option>
												<option value="Konstruksi" data-pekerjaanid="13">Konstruksi</option>
												<option value="Transportasi" data-pekerjaanid="14">Transportasi</option>
												<option value="Karyawan Swasta" data-pekerjaanid="15">Karyawan Swasta</option>
												<option value="Karyawan Bumn" data-pekerjaanid="16">Karyawan Bumn</option>
												<option value="Karyawan Bumd" data-pekerjaanid="17">Karyawan Bumd</option>
												<option value="Karyawan Honorer" data-pekerjaanid="18">Karyawan Honorer</option>
												<option value="Buruh Harian Lepas" data-pekerjaanid="19">Buruh Harian Lepas</option>
												<option value="Buruh Tani/Perkebunan" data-pekerjaanid="20">Buruh Tani/Perkebunan</option>
												<option value="Buruh Nelayan/Perikanan" data-pekerjaanid="21">Buruh Nelayan/Perikanan</option>
												<option value="Buruh Peternakan" data-pekerjaanid="22">Buruh Peternakan</option>
												<option value="Pembantu Rumah Tangga" data-pekerjaanid="23">Pembantu Rumah Tangga</option>
												<option value="Tukang Cukur" data-pekerjaanid="24">Tukang Cukur</option>
												<option value="Tukang Listrik" data-pekerjaanid="25">Tukang Listrik</option>
												<option value="Tukang Batu" data-pekerjaanid="26">Tukang Batu</option>
												<option value="Tukang Kayu" data-pekerjaanid="27">Tukang Kayu</option>
												<option value="Tukang Sol Sepatu" data-pekerjaanid="28">Tukang Sol Sepatu</option>
												<option value="Tukang Las/Pandai Besi" data-pekerjaanid="29">Tukang Las/Pandai Besi</option>
												<option value="Tukang Jahit" data-pekerjaanid="30">Tukang Jahit</option>
												<option value="Tukang Gigi" data-pekerjaanid="31">Tukang Gigi</option>
												<option value="Penata Rias" data-pekerjaanid="32">Penata Rias</option>
												<option value="Penata Busana" data-pekerjaanid="33">Penata Busana</option>
												<option value="Penata Rambut" data-pekerjaanid="34">Penata Rambut</option>
												<option value="Mekanik" data-pekerjaanid="35">Mekanik</option>
												<option value="Seniman" data-pekerjaanid="36">Seniman</option>
												<option value="Tabib" data-pekerjaanid="37">Tabib</option>
												<option value="Paraji" data-pekerjaanid="38">Paraji</option>
												<option value="Perancang Busana" data-pekerjaanid="39">Perancang Busana</option>
												<option value="Penterjemah" data-pekerjaanid="40">Penterjemah</option>
												<option value="Imam Masjid" data-pekerjaanid="41">Imam Masjid</option>
												<option value="Pendeta" data-pekerjaanid="42">Pendeta</option>
												<option value="Pastor" data-pekerjaanid="43">Pastor</option>
												<option value="Wartawan" data-pekerjaanid="44">Wartawan</option>
												<option value="Ustadz/Mubaligh" data-pekerjaanid="45">Ustadz/Mubaligh</option>
												<option value="Juru Masak" data-pekerjaanid="46">Juru Masak</option>
												<option value="Promotor Acara" data-pekerjaanid="47">Promotor Acara</option>
												<option value="Anggota DPR-RI" data-pekerjaanid="48">Anggota DPR-RI</option>
												<option value="Anggota DPD" data-pekerjaanid="49">Anggota DPD</option>
												<option value="Anggota BPK" data-pekerjaanid="50">Anggota BPK</option>
												<option value="Presiden" data-pekerjaanid="51">Presiden</option>
												<option value="Wakil Presiden" data-pekerjaanid="52">Wakil Presiden</option>
												<option value="Anggota Mahkamah Konstitusi" data-pekerjaanid="53">Anggota Mahkamah Konstitusi</option>
												<option value="Anggota Kabinet Kementerian" data-pekerjaanid="54">Anggota Kabinet Kementerian</option>
												<option value="Duta Besar" data-pekerjaanid="55">Duta Besar</option>
												<option value="Gubernur" data-pekerjaanid="56">Gubernur</option>
												<option value="Wakil Gubernur" data-pekerjaanid="57">Wakil Gubernur</option>
												<option value="Bupati" data-pekerjaanid="58">Bupati</option>
												<option value="Wakil Bupati" data-pekerjaanid="59">Wakil Bupati</option>
												<option value="Walikota" data-pekerjaanid="60">Walikota</option>
												<option value="Wakil Walikota" data-pekerjaanid="61">Wakil Walikota</option>
												<option value="Anggota DPRD Provinsi" data-pekerjaanid="62">Anggota DPRD Provinsi</option>
												<option value="Anggota DPRD Kabupaten/Kota" data-pekerjaanid="63">Anggota DPRD Kabupaten/Kota</option>
												<option value="Dosen" data-pekerjaanid="64">Dosen</option>
												<option value="Guru" data-pekerjaanid="65">Guru</option>
												<option value="Pilot" data-pekerjaanid="66">Pilot</option>
												<option value="Pengacara" data-pekerjaanid="67">Pengacara</option>
												<option value="Notaris" data-pekerjaanid="68">Notaris</option>
												<option value="Arsitek" data-pekerjaanid="69">Arsitek</option>
												<option value="Akuntan" data-pekerjaanid="70">Akuntan</option>
												<option value="Konsultan" data-pekerjaanid="71">Konsultan</option>
												<option value="Dokter" data-pekerjaanid="72">Dokter</option>
												<option value="Bidan" data-pekerjaanid="73">Bidan</option>
												<option value="Perawat" data-pekerjaanid="74">Perawat</option>
												<option value="Apoteker" data-pekerjaanid="75">Apoteker</option>
												<option value="Psikiater/Psikolog" data-pekerjaanid="76">Psikiater/Psikolog</option>
												<option value="Penyiar Televisi" data-pekerjaanid="77">Penyiar Televisi</option>
												<option value="Penyiar Radio" data-pekerjaanid="78">Penyiar Radio</option>
												<option value="Pelaut" data-pekerjaanid="79">Pelaut</option>
												<option value="Peneliti" data-pekerjaanid="80">Peneliti</option>
												<option value="Sopir" data-pekerjaanid="81">Sopir</option>
												<option value="Pialang" data-pekerjaanid="82">Pialang</option>
												<option value="Paranormal" data-pekerjaanid="83">Paranormal</option>
												<option value="Pedagang" data-pekerjaanid="84">Pedagang</option>
												<option value="Perangkat Desa" data-pekerjaanid="85">Perangkat Desa</option>
												<option value="Kepala Desa" data-pekerjaanid="86">Kepala Desa</option>
												<option value="Biarawati" data-pekerjaanid="87">Biarawati</option>
												<option value="Wiraswasta" data-pekerjaanid="88">Wiraswasta</option>
												<option value="Lainnya" data-pekerjaanid="89">Lainnya</option>
											</select>
										</div>
									</div>
									<div class="form-group row saksi2_luar_desa">
										<label for="alamat_saksi2" class="col-sm-3 control-label">Alamat / RT / RW</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="alamat_saksi2" id="alamat_saksi2" placeholder="Alamat" value="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm required" type="text" name="rt_saksi2" id="rt_saksi2" placeholder="RT" value="">
										</div>
										<div class="col-sm-2">
											<input class="form-control input-sm required" name="rw_saksi2" id="rw_saksi2" type="text" placeholder="RW" value="">
										</div>
									</div>
									<div class="form-group row saksi2_luar_desa">
										<label for="alamat_saksi2" class="col-sm-3 control-label">Desa / Kecamatan</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="desasaksi2" id="desasaksi2" placeholder="Desa" value="">
										</div>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="kecsaksi2" id="kecsaksi2" placeholder="Kecamatan" value="">
										</div>
									</div>
									<div class="form-group row saksi2_luar_desa">
										<label for="alamat_saksi2" class="col-sm-3 control-label">Kabupaten / Provinsi</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="kabsaksi2" id="kabsaksi2" placeholder="Kabupaten" value="">
										</div>
										<div class="col-sm-4">
											<input class="form-control input-sm required" type="text" name="provinsisaksi2" id="provinsisaksi2" placeholder="Provinsi" value="">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xs-12 col-sm-3 col-lg-3 control-label bg-maroon" style="margin-top:10px;padding-top:10px;padding-bottom:10px"><strong>PENANDA TANGAN</strong></label>
									</div>
									<div class="form-group row">
										<label class="col-sm-3 control-label">Lokasi Disdukcapil Kabupaten</label>
										<div class="col-sm-8">
											<input class="form-control input-sm required" type="text" name="lokasi_disdukcapil" id="lokasi_disdukcapil" placeholder="Lokasi Disdukcapil" value="">
										</div>
									</div>
									<div class="form-group row tdk-permohonan">
										<label class="col-sm-3 control-label">Tertanda Atas Nama</label>
										<div class="col-sm-6 col-lg-4">
											<select class="form-control input-sm select2 select2-hidden-accessible" name="pilih_atas_nama" onchange="ganti_ttd($(this).val());	" data-select2-id="1" tabindex="-1" aria-hidden="true">
												<option value="" data-select2-id="3">-- Atas Nama --</option>
												<option value="a.n Kepala Desa Manyeti">
													a.n Kepala Desa Manyeti </option>
												<option value="u.b Sekretaris Desa">
													u.b Sekretaris Desa </option>
											</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-pilih_atas_nama-w8-container"><span class="select2-selection__rendered" id="select2-pilih_atas_nama-w8-container" role="textbox" aria-readonly="true" title="-- Atas Nama --">-- Atas Nama --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
									</div>
									<div class="form-group row tdk-permohonan">
										<label class="col-sm-3 control-label">Staf Pemerintah Desa</label>
										<div class="col-sm-6 col-lg-4">
											<select class="form-control required input-sm" id="pamong" name="pamong" onchange="ambil_pamong($(this).find(':selected'))">
												<option value="" selected="selected">-- Pilih Staf Pemerintah Desa--</option>
												<option value="H. LILI SUGIRI" data-jabatan="Kepala Desa" selected="" data-nip="" data-pamong-id="14" data-ttd="1" data-ub="0">
													H. LILI SUGIRI (Kepala Desa) </option>
												<option value="JATNIKA" data-jabatan="Sekretaris Desa" data-nip="" data-pamong-id="20" data-ttd="" data-ub="1">
													JATNIKA (Sekretaris Desa) </option>
												<option value="ICHA OVIA OKTAVIANI" data-jabatan="Kasi Pemerintahan" data-nip="" data-pamong-id="21" data-ttd="" data-ub="0">
													ICHA OVIA OKTAVIANI (Kasi Pemerintahan) </option>
												<option value="EGI FAHMI ERIANA" data-jabatan="Kaur Umum &amp; Perencanaan" data-nip="" data-pamong-id="22" data-ttd="" data-ub="0">
													EGI FAHMI ERIANA (Kaur Umum &amp; Perencanaan) </option>
												<option value="RUNI MASYA AGRESYUNA" data-jabatan="Kaur Keuangan" data-nip="" data-pamong-id="23" data-ttd="" data-ub="0">
													RUNI MASYA AGRESYUNA (Kaur Keuangan) </option>
												<option value="JAJANG NURJAMAN" data-jabatan="Kasi Kesejahteraan &amp; Pelayanan" data-nip="" data-pamong-id="26" data-ttd="" data-ub="0">
													JAJANG NURJAMAN (Kasi Kesejahteraan &amp; Pelayanan) </option>
												<option value="ASEP SUPRIATNA" data-jabatan="Kepala Dusun Cikadu" data-nip="" data-pamong-id="27" data-ttd="" data-ub="0">
													ASEP SUPRIATNA (Kepala Dusun Cikadu) </option>
											</select>
											<input name="pamong_nip" id="pamong_nip" type="hidden" value="">
											<input name="pamong_id" id="pamong_id" type="hidden" value="14">
										</div>
									</div>
									<div class="form-group row tdk-permohonan">
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
								</div>

							</form>
						</div>
						<div class="box-footer">
							<div class="col-lg-12">
								<div class="pull-left">
									<button type="reset" onclick="$('#validasi').trigger('reset');" class=" btn btn-danger  btn-md" style=" float:left;"><i class="fa fa-times"></i> Batal</button>
									<div class="pull-right">
										<button type="button" onclick="tambah_elemen_cetak('cetak_rtf'); $('#validasi').submit()" class="btn btn-primary btn-md" style="float:right;"><i class="fa fa-file-word-o"></i> Unduh RTF</button>
									</div>
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
				</div>
			</div>
	</div>
	</div>
</section>
</div>
<?= $this->endSection() ?>