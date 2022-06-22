<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<!-- Isi dari Main Content -->
<div class="card card-success">
  <div class="card-header">
    <h3 class="card-title">
      <h3>Data Kepala Keluarga</h3>
  </div>
  <div class="card-body">
    <?php if (!empty(session()->getFlashdata(''))) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo session()->getFlashdata(''); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
    <a href="<?= base_url('/kelola_penduduk/create'); ?>" class="btn btn-primary">Tambah</a>
    <div class="card-body">
    </div>
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
                <<? foreach ($tbl_pebduduk as $key => $value) : ?> <tr>
                  <td>
                    <<? $key + 1 ?>< /td>
                  <th><input type="checkbox" id="checkall" /></th>
                  <td class="aksi">
                    <div class="btn-group">
                      <button type="button" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-arrow-circle-down"></i> Pilih Aksi</button>
                      <ul class="dropdown-menu" role="menu" style="">
                        <li>
                          <a href="/penduduk/detail/1/0/5767" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                        </li>
                        <li>
                          <a href="/penduduk/form/1/0/5767" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                        </li>
                        <li>
                          <a href="/penduduk/ajax_penduduk_maps/1/0/5767/0" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                        </li>
                        <li>
                          <a href="/penduduk/edit_status_dasar/1/0/5767" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Status Dasar" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                        </li>
                        <li>
                          <a href="/penduduk/dokumen/5767" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                        </li>
                        <li>
                          <a href="/penduduk/cetak_biodata/5767" target="_blank" class="btn btn-social btn-flat btn-block btn-sm"><i class="fa fa-print"></i> Cetak Biodata Penduduk</a>
                        </li>
                        <li>
                          <a href="#" data-href="/penduduk/delete/1/0/5767" class="btn btn-social btn-flat btn-block btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i> Hapus</a>
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
                  <td><? $value->id_penduduk_pekerjaan ?></td>
                  <td><? $value->jstatus_kawink ?></td>
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
      <<? endforeach; ?> </tbody>
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
<div class='modal fade' id='confirm-status' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <h4 class='modal-title' id='myModalLabel'><i class='fa fa-exclamation-triangle text-red'></i> Konfirmasi</h4>
      </div>
      <div class='modal-body btn-info'>
        Apakah Anda yakin ingin mengembalikan status data penduduk ini?
      </div>
      <div class='modal-footer'>
        <button type="button" class="btn btn-social btn-flat btn-danger btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>
        <a class='btn-ok'>
          <button type="button" class="btn btn-social btn-flat btn-info btn-sm" id="ok-status"><i class='fa fa-check'></i> Simpan</button>
        </a>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection() ?>