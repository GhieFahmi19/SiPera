  <!-- Main Content -->
  <div class="main-content">
      <section class="section">
          <div class="section-header">
              <h1>Data Bantuan</h1>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="box box-info">
                      <div class="box-header with-border">
                          <a href="#" class="btn btn-social btn-flat bg-olive btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Tambah Program Bantuan"><i class="fa fa-plus"></i> Tambah</a>
                          <a href="#" class="btn btn-social btn-flat bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Impor Program Bantuan" data-target="#impor" data-remote="false" data-toggle="modal" data-backdrop="false" data-keyboard="false"><i class="fa fa-upload"></i> Impor</a>
                          <a href="#" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Panduan"><i class="fa fa-question-circle"></i> Panduan</a>
                      </div>
                      <div class="box-body">
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                      <div class="row">
                                          <div class="col-sm-9">
                                              <form id="mainform" name="mainform" method="post">
                                                  <select class="form-control input-sm" name="sasaran" onchange="formAction('mainform', 'https://manyeti.desa.id/program_bantuan/filter/sasaran')">
                                                      <option value="">Pilih Sasaran</option>
                                                      <option value="1">Penduduk</option>
                                                      <option value="2">Keluarga / KK</option>
                                                      <option value="3">Rumah Tangga</option>
                                                      <option value="4">Kelompok/Organisasi Kemasyarakatan</option>
                                                  </select>
                                              </form>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="table-responsive">
                                                  <table class="table table-bordered table-striped dataTable table-hover" id="table-program">
                                                      <thead class="bg-gray disabled color-palette">
                                                          <tr>
                                                              <th width="1%">No</th>
                                                              <th width="5%">Aksi</th>
                                                              <th nowrap>Nama Program</th>
                                                              <th>Asal Dana</th>
                                                              <th>Jumlah Peserta</th>
                                                              <th nowrap>Masa Berlaku</th>
                                                              <th>Sasaran</th>
                                                              <th>Status</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td class="text-center">1</td>
                                                              <td nowrap>
                                                                  <a href="https://manyeti.desa.id/program_bantuan/detail/1" class="btn bg-purple btn-flat btn-sm" title="Rincian"><i class="fa fa-list"></i></a>
                                                                  <a href="https://manyeti.desa.id/program_bantuan/edit/1" class="btn bg-orange btn-flat btn-sm" title="Ubah"><i class="fa fa-edit"></i></a>
                                                                  <a href="https://manyeti.desa.id/program_bantuan/expor/1" class="btn bg-navy btn-flat btn-sm" title="Expor"><i class="fa fa-download"></i></a>
                                                                  <a href="#" class="btn bg-maroon btn-flat btn-sm disabled" title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
                                                              </td>
                                                              <td nowrap><a href="https://manyeti.desa.id/program_bantuan/detail/1">BPNT</a></td>
                                                              <td>Pusat</td>
                                                              <td>2</td>
                                                              <td nowrap>13 Dec 2015 - 13 Dec 2021</td>
                                                              <td nowrap>Keluarga / KK</td>
                                                              <td>0</td>
                                                          </tr>
                                                          <tr>
                                                              <td class="text-center">2</td>
                                                              <td nowrap>
                                                                  <a href="https://manyeti.desa.id/program_bantuan/detail/2" class="btn bg-purple btn-flat btn-sm" title="Rincian"><i class="fa fa-list"></i></a>
                                                                  <a href="https://manyeti.desa.id/program_bantuan/edit/2" class="btn bg-orange btn-flat btn-sm" title="Ubah"><i class="fa fa-edit"></i></a>
                                                                  <a href="https://manyeti.desa.id/program_bantuan/expor/2" class="btn bg-navy btn-flat btn-sm" title="Expor"><i class="fa fa-download"></i></a>
                                                                  <a href="#" class="btn bg-maroon btn-flat btn-sm disabled" title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
                                                              </td>
                                                              <td nowrap><a href="https://manyeti.desa.id/program_bantuan/detail/2">BLSM</a></td>
                                                              <td>Pusat</td>
                                                              <td>2</td>
                                                              <td nowrap>13 Dec 2015 - 13 Dec 2017</td>
                                                              <td nowrap>Keluarga / KK</td>
                                                              <td>0</td>
                                                          </tr>
                                                          <tr>
                                                              <td class="text-center">3</td>
                                                              <td nowrap>
                                                                  <a href="#" class="btn bg-purple btn-flat btn-sm" title="Rincian"><i class="fa fa-list"></i></a>
                                                                  <a href="#" class="btn bg-orange btn-flat btn-sm" title="Ubah"><i class="fa fa-edit"></i></a>
                                                                  <a href="#" class="btn bg-navy btn-flat btn-sm" title="Expor"><i class="fa fa-download"></i></a>
                                                                  <a href="#" class="btn bg-maroon btn-flat btn-sm disabled" title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
                                                              </td>
                                                              <td nowrap><a href="#">PKH</a></td>
                                                              <td>Pusat</td>
                                                              <td>2</td>
                                                              <td nowrap>13 Dec 2015 - 13 Dec 2022</td>
                                                              <td nowrap>Keluarga / KK</td>
                                                              <td>1</td>
                                                          </tr>
                                                          <tr>
                                                              <td class="text-center">4</td>
                                                              <td nowrap>
                                                                  <a href="#" class="btn bg-purple btn-flat btn-sm" title="Rincian"><i class="fa fa-list"></i></a>
                                                                  <a href="#" class="btn bg-orange btn-flat btn-sm" title="Ubah"><i class="fa fa-edit"></i></a>
                                                                  <a href="#" class="btn bg-navy btn-flat btn-sm" title="Expor"><i class="fa fa-download"></i></a>
                                                                  <a href="#" class="btn bg-maroon btn-flat btn-sm disabled" title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
                                                              </td>
                                                              <td nowrap><a href="#">Bedah Rumah</a></td>
                                                              <td>Pusat</td>
                                                              <td>2</td>
                                                              <td nowrap>13 Dec 2015 - 13 Dec 2021</td>
                                                              <td nowrap>Keluarga / KK</td>
                                                              <td>0</td>
                                                          </tr>
                                                          <tr>
                                                              <td class="text-center">5</td>
                                                              <td nowrap>
                                                                  <a href="#" class="btn bg-purple btn-flat btn-sm" title="Rincian"><i class="fa fa-list"></i></a>
                                                                  <a href="#" class="btn bg-orange btn-flat btn-sm" title="Ubah"><i class="fa fa-edit"></i></a>
                                                                  <a href="#" class="btn bg-navy btn-flat btn-sm" title="Expor"><i class="fa fa-download"></i></a>
                                                                  <a href="#" class="btn bg-maroon btn-flat btn-sm disabled" title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
                                                              </td>
                                                              <td nowrap><a href="https://manyeti.desa.id/program_bantuan/detail/5">JAMKESMAS</a></td>
                                                              <td>Pusat</td>
                                                              <td>2</td>
                                                              <td nowrap>13 Dec 2008 - 13 Dec 2010</td>
                                                              <td nowrap>Penduduk</td>
                                                              <td>0</td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="row paging">
                                          <div class="col-sm-3 dataTables_length">
                                              <form class="form-horizontal" id="paging" action="#" method="POST">
                                                  <label>
                                                      Tampilkan
                                                      <select class="form-control input-sm" name="per_page" onchange="$('#paging').submit()">
                                                          <option value="20" selected='selected'>20</option>
                                                          <option value="50">50</option>
                                                          <option value="100">100</option>
                                                      </select>
                                                      Dari <strong>5</strong> Total Data
                                                  </label>
                                              </form>
                                          </div>
                                          <div class="col-sm-9 dataTables_paginate">
                                              <ul class="pagination">
                                                  <li class='disabled'><a href="#" aria-label="First"><span aria-hidden="true">Awal</span></a></li>
                                                  <li class='active'><a href="#">1</a></li>
                                                  <li class='disabled'><a href="#" aria-label="Last"><span aria-hidden="true">Akhir</span></a></li>
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
  <div class='modal fade' id='confirm-delete' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
      <div class='modal-dialog'>
          <div class='modal-content'>
              <div class='modal-header'>
                  <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                  <h4 class='modal-title' id='myModalLabel'><i class='fa fa-exclamation-triangle text-red'></i> Konfirmasi</h4>
              </div>
              <div class='modal-body btn-info'>
                  Apakah Anda yakin ingin menghapus data ini?
              </div>
              <div class='modal-footer'>
                  <button type="button" class="btn btn-social btn-flat btn-warning btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>
                  <a class='btn-ok'>
                      <button type="button" class="btn btn-social btn-flat btn-danger btn-sm" id="ok-delete"><i class='fa fa-trash-o'></i> Hapus</button>
                  </a>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="impor">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Impor Program Bantuan</h4>
              </div>
              <form id="mainform" action="https://manyeti.desa.id/program_bantuan/impor" method="POST" enctype="multipart/form-data">
                  <div class="modal-body">
                      <div class="form-group">
                          <label for="file" class="control-label">File Program Bantuan : </label>
                          <div class="input-group input-group-sm">
                              <input type="text" class="form-control" id="file_path" name="userfile" required>
                              <input type="file" class="hidden" id="file" name="userfile">
                              <span class="input-group-btn">
                                  <button type="button" class="btn btn-info btn-flat" id="file_browser"><i class="fa fa-search"></i> Browse</button>
                              </span>
                          </div>
                          <br />
                          <label class="control-label">Impor Program :
                              <p class="help-block">&emsp;<input type="checkbox" name="ganti_program" value="1" /> Ganti data lama jika data ditemukan sama</p>
                          </label>
                          <br />
                          <label class="control-label">Impor Peserta :
                              <p class="help-block">&emsp;<input type="checkbox" name="kosongkan_peserta" value="1" /> Kosongkan data peserta program bantuan</p>
                              <p class="help-block">&emsp;<input type="checkbox" name="ganti_peserta" value="1" /> Ganti data lama jika data ditemukan sama</p>
                              <p class="help-block">&emsp;<input type="checkbox" name="rand_kartu_peserta" value="1" /> Acak No. Kartu Peserta Jika Kosong</p>
                          </label>
                          <br />
                          <a href="https://manyeti.desa.id/assets/import/format_impor_program_bantuan.xlsx" class="btn btn-social btn-flat bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block text-center"><i class="fa fa-file-excel-o"></i> Contoh Format Impor Program Bantuan</a>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm pull-left"><i class="fa fa-times"></i> Batal</button>
                      <button type="submit" class="btn btn-social btn-flat btn-info btn-sm" id="ok"><i class="fa fa-check"></i> Simpan</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  </section>
  </div>