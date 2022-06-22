<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>

<!-- Isi dari Main Content -->
<section class="section">
  <div class="section-header">
    <h1>Pelayanan Surat</h1>
    <section class="content-header">
				</div>
    <!-- Main Content -->
  <div class="card-body p-0">
    <div class="table-responsive">
      <table id="tabel1" class="table table-striped" style="width:100%">
        <div class="card">
          <section class="content" id="maincontent" data-select2-id="maincontent">
              <div class="row" data-select2-id="9">
                <div class="col-md-12" data-select2-id="8">
                  <div class="box box-info" data-select2-id="7">
                    <div class="box-header with-border" data-select2-id="6">
                      <form id="main" name="main" action="m_surat" method="post" data-select2-id="main">
                        <div class="row" data-select2-id="5">
                          <div class="col-sm-6" data-select2-id="4">
                            <select class="form-control select2 select2-hidden-accessible" id="nik" name="nik" onchange="formAction('main')" style="width: 100%;" data-select2-id="nik" tabindex="-1" aria-hidden="true">
                              <option selected="selected" data-select2-id="2">-- Cari Judul Surat--</option>
                              <option value="surat_ket_pengantar" data-select2-id="11">KETERANGAN PENGANTAR</option>
                              <option value="surat_ket_penduduk" data-select2-id="12">KETERANGAN PENDUDUK</option>
                              <option value="surat_bio_penduduk" data-select2-id="13">BIODATA PENDUDUK</option>
                              <option value="surat_ket_pindah_penduduk" data-select2-id="14">KETERANGAN PINDAH PENDUDUK</option>
                              <option value="surat_ket_jual_beli" data-select2-id="15">KETERANGAN JUAL BELI</option>
                              <option value="surat_ket_catatan_kriminal" data-select2-id="16">PENGANTAR SURAT KETERANGAN CATATAN KEPOLISIAN</option>
                              <option value="surat_ket_ktp_dalam_proses" data-select2-id="17">KETERANGAN KTP DALAM PROSES</option>
                              <option value="surat_ket_beda_nama" data-select2-id="18">KETERANGAN BEDA IDENTITAS</option>
                              <option value="surat_ket_kurang_mampu" data-select2-id="20">KETERANGAN KURANG MAMPU</option>
                              <option value="surat_izin_keramaian" data-select2-id="21">PENGANTAR IZIN KERAMAIAN</option>
                              <option value="surat_ket_kehilangan" data-select2-id="22">PENGANTAR LAPORAN KEHILANGAN</option>
                              <option value="surat_ket_usaha" data-select2-id="23">KETERANGAN USAHA</option>
                              <option value="surat_ket_jamkesos" data-select2-id="24">KETERANGAN JAMKESOS</option>
                              <option value="surat_ket_domisili_usaha" data-select2-id="25">KETERANGAN DOMISILI USAHA</option>
                              <option value="surat_ket_kelahiran" data-select2-id="26">KETERANGAN KELAHIRAN</option>
                              <option value="surat_permohonan_akta" data-select2-id="27">PERMOHONAN AKTA LAHIR</option>
                              <option value="surat_pernyataan_akta" data-select2-id="28">PERNYATAAN BELUM MEMILIKI AKTA LAHIR</option>
                              <option value="surat_ket_kematian" data-select2-id="30">KETERANGAN KEMATIAN</option>
                              <option value="surat_ket_lahir_mati" data-select2-id="31">KETERANGAN LAHIR MATI</option>
                              <option value="surat_ket_pergi_kawin" data-select2-id="32">KETERANGAN UNTUK NIKAH (N-1 S/D N-7)</option>
                              <option value="surat_ket_pergi_kawin" data-select2-id="33">KETERANGAN PERGI KAWIN</option>
                              <option value="surat_ket_wali_hakim" data-select2-id="34">KETERANGAN WALI HAKIM</option>
                              <option value="surat_permohonan_duplikat_surat_nikah" data-select2-id="35">PERMOHONAN DUPLIKAT SURAT NIKAH</option>
                              <option value="surat_permohonan_cerai" data-select2-id="36">PERMOHONAN CERAI</option>
                              <option value="surat_ket_rujuk_cerai" data-select2-id="37">KETERANGAN PENGANTAR RUJUK/CERAI</option>
                              <option value="surat_permohonan_kartu_keluarga" data-select2-id="38">PERMOHONAN KARTU KELUARGA</option>
                              <option value="surat_domisili_usaha_non_warga" data-select2-id="39">DOMISILI USAHA NON-WARGA</option>
                              <option value="surat_ket_beda_identitas_kis" data-select2-id="40">KETERANGAN BEDA IDENTITAS KIS</option>
                              <option value="surat_izin_orangtua_suami_istri" data-select2-id="41">KETERANGAN IZIN ORANG TUA/SUAMI/ISTRI</option>
                              <option value="surat_sporadik" data-select2-id="42">PERNYATAAN PENGUASAAN FISIK BIDANG TANAH (SPORADIK)</option>
                              <option value="surat_permohonan_perubahan_kartu_keluarga" data-select2-id="43">PERMOHONAN PERUBAHAN KARTU KELUARGA</option>
                              <option value="surat_non_warga" data-select2-id="44">NON WARGA</option>
                              <option value="surat_ket_domisili" data-select2-id="45">KETERANGAN DOMISILI</option>
                              <option value="surat_ket_penghasilan_orangtua" data-select2-id="46">KETERANGAN PENGHASILAN ORANGTUA</option>
                              <option value="surat_permohonan_penerbitan_buku_pas_lintas" data-select2-id="47">PENGANTAR PERMOHONAN PENERBITAN BUKU PAS LINTAS</option>
                              <option value="surat_ket_penghasilan_ayah" data-select2-id="48">KETERANGAN PENGHASILAN AYAH</option>
                              <option value="surat_ket_penghasilan_ibu" data-select2-id="49">KETERANGAN PENGHASILAN IBU</option>
                              <option value="surat_perintah_perjalanan_dinas" data-select2-id="50">PERINTAH PERJALANAN DINAS</option>
                              <option value="surat_kuasa" data-select2-id="51">KUASA</option>
                              <option value="surat_ket_kepemilikan_kendaraan" data-select2-id="52">KETERANGAN KEPEMILIKAN KENDARAAN</option>
                              <option value="surat_ket_kepemilikan_tanah" data-select2-id="53">KETERANGAN KEPEMILIKAN TANAH</option>
                              <option value="surat_baru" data-select2-id="54">BARU</option>
                              <option value="raw" data-select2-id="55">RAW</option>
                            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-nik-container"><span class="select2-selection__rendered" id="select2-nik-container" role="textbox" aria-readonly="true" title="-- Cari Judul Surat--"><span class="btn btn-icon icon-left btn-primary">Cari Judul Surat</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                          </div>
                        </div>
                    </div>
                    <div class="row" data-select2-id="9">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="table-responsive">
                                  <table class="table table-bordered dataTable table-striped table-hover">
                                    <thead class="bg-gray disabled color-palette">
                                      <tr>
                                        <th width="1%">No</th>
                                        <th>Aksi</th>
                                        <th width="50%">Layanan Administrasi Surat</th>
                                        <th>Kode Surat</th>
                                        <th>Lampiran</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_pengantar') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/1/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Pengantar</td>
                                        <td>S-01</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>2</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_penduduk') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/2/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Penduduk</td>
                                        <td>S-02</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>3</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_bio_penduduk') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/3/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Biodata Penduduk</td>
                                        <td>S-03</td>
                                        <td>F-1.01</td>
                                      </tr>
                                      <tr>
                                        <td>4</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_pindah_penduduk') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/5/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Pindah Penduduk</td>
                                        <td>S-04</td>
                                        <td>F-1.08, F-1.25</td>
                                      </tr>
                                      <tr>
                                        <td>5</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_jual_beli') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/6/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Jual Beli</td>
                                        <td>S-05</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>6</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_catatan_kriminal') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/8/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Pengantar Surat Keterangan Catatan Kepolisian</td>
                                        <td>S-07</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>7</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_ktp_dalam_proses') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/9/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan KTP dalam Proses</td>
                                        <td>S-08</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>8</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_beda_nama') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/10/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Beda Identitas</td>
                                        <td>S-09</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>10</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_kurang_mampu') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/12/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Kurang Mampu</td>
                                        <td>S-11</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>11</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_izin_keramaian') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/13/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Pengantar Izin Keramaian</td>
                                        <td>S-12</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>12</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_kehilangan') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/14/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Pengantar Laporan Kehilangan</td>
                                        <td>S-13</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>13</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_usaha') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/15/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Usaha</td>
                                        <td>S-14</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>14</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_jamkesos') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/16/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan JAMKESOS</td>
                                        <td>S-15</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>15</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_domisili_usaha') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/17/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Domisili Usaha</td>
                                        <td>S-16</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>16</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_kelahiran') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/18/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Kelahiran</td>
                                        <td>S-17</td>
                                        <td>F-2.01</td>
                                      </tr>
                                      <tr>
                                        <td>17</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_permohonan_akta') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/20/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Permohonan Akta Lahir</td>
                                        <td>S-18</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>18</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_pernyataan_akta') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/21/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Pernyataan Belum Memiliki Akta Lahir</td>
                                        <td>S-19</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>20</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_kematian') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/24/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Kematian</td>
                                        <td>S-21</td>
                                        <td>F-2.29</td>
                                      </tr>
                                      <tr>
                                        <td>21</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_lahir_mati') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/25/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Lahir Mati</td>
                                        <td>S-22</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>22</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_nikah') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/26/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Untuk Nikah (N-1 s/d N-7)</td>
                                        <td>S-23</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>23</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_nikah') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/33/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Pergi Kawin</td>
                                        <td>S-30</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>24</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_ket_wali_hakim') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/35/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Wali Hakim</td>
                                        <td>S-32</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>25</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_permohonan_duplikat_surat_nikah') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/36/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Permohonan Duplikat Surat Nikah</td>
                                        <td>S-33</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>26</td>
                                        <td class="nostretch">
                                          <a href="<?= base_url('surat_permohonan_cerai') ?>" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/37/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Permohonan Cerai</td>
                                        <td>S-34</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>27</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_ket_rujuk_cerai" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/38/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Pengantar Rujuk/Cerai</td>
                                        <td>S-35</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>28</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_permohonan_kartu_keluarga" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/45/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Permohonan Kartu Keluarga</td>
                                        <td>S-36</td>
                                        <td>F-1.15, F-1.01</td>
                                      </tr>
                                      <tr>
                                        <td>29</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_domisili_usaha_non_warga" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/51/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Domisili Usaha Non-Warga</td>
                                        <td>S-37</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>30</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_ket_beda_identitas_kis" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/76/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Beda Identitas KIS</td>
                                        <td>S-38</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>31</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_izin_orangtua_suami_istri" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/85/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Izin Orang Tua/Suami/Istri</td>
                                        <td>S-39</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>32</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_sporadik" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/86/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Pernyataan Penguasaan Fisik Bidang Tanah (SPORADIK)</td>
                                        <td>S-40</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>33</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_permohonan_perubahan_kartu_keluarga" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/89/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Permohonan Perubahan Kartu Keluarga</td>
                                        <td>S-41</td>
                                        <td>F-1.16, F-1.01</td>
                                      </tr>
                                      <tr style="background-color:#f8deb5 !important;">
                                        <td>34</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_non_warga" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/110/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Non Warga</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>35</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_ket_domisili" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/156/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Domisili</td>
                                        <td>S-41</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>36</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_ket_penghasilan_orangtua" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/160/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Penghasilan Orangtua</td>
                                        <td>S-42</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>37</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_permohonan_penerbitan_buku_pas_lintas" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/161/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Pengantar Permohonan Penerbitan Buku Pas Lintas</td>
                                        <td>S-43</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>38</td>
                                        <td class="nostretch">
                                          <a href="..//surat/form/surat_ket_penghasilan_ayah" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/162/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Penghasilan Ayah</td>
                                        <td>S-44</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>39</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_ket_penghasilan_ibu" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/163/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Penghasilan Ibu</td>
                                        <td>S-45</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>40</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_perintah_perjalanan_dinas" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/167/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Perintah Perjalanan Dinas</td>
                                        <td>S-46</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>41</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_kuasa" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/168/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Kuasa</td>
                                        <td>S-47</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>42</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_ket_kepemilikan_kendaraan" class="btn btn-icon icon-left btn-secondary"><i class="fa fa-file-word-o"></i>Buat Surat</a>
                                          <a href="../surat/favorit/172/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Kepemilikan Kendaraan</td>
                                        <td>S-48</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>43</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_ket_kepemilikan_tanah" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/173/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Keterangan Kepemilikan Tanah</td>
                                        <td>S-49</td>
                                        <td></td>
                                      </tr>
                                      <tr style="background-color:#f8deb5 !important;">
                                        <td>44</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/surat_baru" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt"></i>Buat Surat</a>
                                          <a href="../surat/favorit/177/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Baru</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr style="background-color:#f8deb5 !important;">
                                        <td>45</td>
                                        <td class="nostretch">
                                          <a href="../surat/form/raw" class="btn btn-icon icon-left btn-primary"><i class="far fa-file-alt">></i>Buat Surat</a>
                                          <a href="../surat/favorit/178/0" class="btn bg-purple btn-flat btn-sm" title="Tambahkan ke Daftar Favorit"><i class="fa fa-star-o"></i></a>
                                        </td>
                                        <td>Raw</td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                    </tbody>
                                  </table>
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

            <?= $this->endSection() ?>