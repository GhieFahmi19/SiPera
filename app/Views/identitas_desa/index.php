<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>


<!-- Isi dari Main Content -->
<div class="card card-success">
	<div class="card-header">
		<div class="buttons">
			<a href="../identitas_desa/form" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Ubah Data Desa</a>
			<a href="../identitas_desa/maps/kantor" class="btn btn-icon icon-left btn-info"><i class="fa fa-map-marker"></i> Lokasi Kantor Desa</a>
			<a href="../identitas_desa/maps/wilayah" class="btn btn-icon icon-left btn-warning"><i class="fa fa-map"></i> Peta Wilayah Desa</a>
		</div>
	</div>
</div>
<div class="box-body">
	<div class="box-body bg-identitas">
		<img class="img-identitas img-responsive" src="<?= base_url() ?>/assets/img/avatar/sedang_1549419108_desa__sid__VClDogr.png" alt="logo">
		<h3 class="text-identitas">Desa Manyeti</h3>
		<p class="text-identitas"><b>Kecamatan Dawuan, Kabupaten Subang, Provinsi Jawa Barat</b></p>
	</div>
	<hr>
	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover tabel-rincian">
			<tbody>
				<tr>
					<th colspan="3" class="subtitle_head"><strong>DESA</strong></th>
				</tr>
				<tr>
					<td width="300">Nama Desa</td>
					<td width="1">:</td>
					<td>Manyeti</td>
				</tr>
				<tr>
					<td>Kode Desa</td>
					<td>:</td>
					<td>32.13.27.2001</td>
				</tr>
				<tr>
					<td>Kode Pos Desa</td>
					<td>:</td>
					<td>41271</td>
				</tr>
				<tr>
					<td>Kepala Desa</td>
					<td>:</td>
					<td>H. LILI SUGIRI</td>
				</tr>
				<tr>
					<td>NIP Kepala Desa</td>
					<td>:</td>
					<td></td>
				</tr>
				<tr>
					<td>Alamat Kantor Desa</td>
					<td>:</td>
					<td>Jl. Raya Desa Manyeti RT. 013 RW.03 Desa Manyeti</td>
				</tr>
				<tr>
					<td>E-Mail Desa</td>
					<td>:</td>
					<td>desa.manyeti@gmail.com</td>
				</tr>
				<tr>
					<td>Telpon Desa</td>
					<td>:</td>
					<td></td>
				</tr>
				<tr>
					<td>Website Desa</td>
					<td>:</td>
					<td></td>
				</tr>
				<tr>
					<th colspan="3" class="subtitle_head"><strong>KECAMATAN</strong></th>
				</tr>
				<tr>
					<td>Nama Kecamatan</td>
					<td>:</td>
					<td>Dawuan</td>
				</tr>
				<tr>
					<td>Kode Kecamatan</td>
					<td>:</td>
					<td>32.13.27</td>
				</tr>
				<tr>
					<td>Nama Camat</td>
					<td>:</td>
					<td>GANDI SUGANDI, S.Sd, MM.</td>
				</tr>
				<tr>
					<td>NIP Camat</td>
					<td>:</td>
					<td>196311041984101004</td>
				</tr>
				<tr>
					<th colspan="3" class="subtitle_head"><strong>KABUPATEN</strong></th>
				</tr>
				<tr>
					<td>Nama Kabupaten</td>
					<td>:</td>
					<td>Subang</td>
				</tr>
				<tr>
					<td>Kode Kabupaten</td>
					<td>:</td>
					<td>32.13</td>
				</tr>
				<tr>
					<th colspan="3" class="subtitle_head"><strong>PROVINSI</strong></th>
				</tr>
				<tr>
					<td>Nama Provinsi</td>
					<td>:</td>
					<td>Jawa Barat</td>
				</tr>
				<tr>
					<td>Kode Provinsi</td>
					<td>:</td>
					<td>32</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</section>

<?= $this->endSection() ?>