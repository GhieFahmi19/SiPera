<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<!-- Isi dari Main Content -->
<section class="section">
	<div class="section-header">
		<h1>Data Penduduk</h1>
		<div class="section-header-breadcrumb">
			<div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
			<div class="breadcrumb-item"><a href="#">Tabel Penduduk</a></div>
			<div class="breadcrumb-item">Data Penduduk</div>
		</div>
	</div>

	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-edit"></i> Tambah Data
			</h3>
		</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="card-body">

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">NIK</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Penduduk" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">TTL</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
					</div>
					<div class="col-sm-3">
						<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
					<div class="col-sm-3">
						<select name="jk" id="jk" class="form-control">
							<option>- Pilih -</option>
							<option>Laki-lakiK</option>
							<option>Perempuan</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Desa</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="desa" name="desa" placeholder="Desa" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">RT/RW</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="rt" name="rt" placeholder="RT" required>
					</div>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="rw" name="rw" placeholder="RW" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Agama</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="id_penduduk_agama" name="id_penduduk_agama" placeholder="Agama" required>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Status Perkawinan</label>
					<div class="col-sm-3">
						<select name="status_kawin" id="status_kawin" class="form-control">
							<option>- Pilih -</option>
							<option>Kawin</option>
							<option>Belum Kawin</option>
							<option>Cerai Mati</option>
							<option>Cerai Hidup</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Pekerjaan</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" id="id_penduduk_pekerjaan" name="id_penduduk_pekerjaan" placeholder="Pekerjaan" required>
					</div>
				</div>

			</div>
			<div class="card-footer">
				<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
				<a href="?page=v_data_penduduk" title="Kembali" class="btn btn-secondary">Batal</a>
			</div>
		</form>
	</div>

	<?php

	if (isset($_POST['Simpan'])) {
		//mulai proses simpan data
		$sql_simpan = "INSERT INTO tbl_penduduk (nik, nama, tempat_lh, tgl_lh, jekel, desa, rt, rw, agama, kawin, pekerjaan, status) VALUES (
            '" . $_POST['nik'] . "',
            '" . $_POST['nama'] . "',
			'" . $_POST['tempat_lh'] . "',
			'" . $_POST['tgl_lh'] . "',
            '" . $_POST['jekel'] . "',
            '" . $_POST['desa'] . "',
			'" . $_POST['rt'] . "',
			'" . $_POST['rw'] . "',
			'" . $_POST['agama'] . "',
			'" . $_POST['kawin'] . "',
			'" . $_POST['pekerjaan'] . "',
            'Ada')";
		$query_simpan = mysqli_query($koneksi, $sql_simpan);
		mysqli_close($koneksi);

		if ($query_simpan) {
			echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=v_data_penduduk';
          }
      })</script>";
		} else {
			echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add_pend';
          }
      })</script>";
		}
	}
     //selesai proses simpan data
