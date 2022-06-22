<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<!-- Isi dari Main Content -->
<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">
            <h3>Data Kepala Keluarga</h3>
    </div>
    <div class="box box-primary">
        <div class="box-header with-border">
            <div class="float-right">
                <div class="btn-group">
                    <a href="/index.php/data/penduduk">
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Kembali
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <form method="POST" action="/index.php/data/penduduk/show/6" accept-charset="UTF-8" id="form-penduduk" class="form-horizontal form-label-left"><input name="_token" type="hidden" value="7D0V0bhi8O6uBLaZapESAthKwopBtE8JhQywqX64">

            <div class="box-body">

                <div class="row">
                    <div class="col-md-6">
                        <legend>DATA DIRI</legend>
                        <div class="form-group">
                            <label class="control-label col-md-4 col-sm-3 col-xs-12">Foto</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img src="/img/pengguna/wuser.png" id="showgambar" style="max-width:120px;max-height:150px;float:left;">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama" class="control-label col-md-4 col-sm-3 col-xs-12">Nama</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="nama" name="nama" type="text" value="ADINI SEPTIA LISTA">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nik" class="control-label col-md-4 col-sm-3 col-xs-12">NIK</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="nik" name="nik" type="text" value="5201145003976995">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_kk_sebelumnya" class="control-label col-md-4 col-sm-3 col-xs-12">No KK Sebelumnya</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="no_kk_sebelumnya" name="no_kk_sebelumnya" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kk_level" class="control-label col-md-4 col-sm-3 col-xs-12">Hubungan dalam Keluarga</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" disabled="" id="kk_level" name="kk_level">
                                    <option value="1">KEPALA KELUARGA</option>
                                    <option value="2">SUAMI</option>
                                    <option value="3">ISTRI</option>
                                    <option value="4" selected="selected">ANAK</option>
                                    <option value="5">MENANTU</option>
                                    <option value="6">CUCU</option>
                                    <option value="7">ORANGTUA</option>
                                    <option value="8">MERTUA</option>
                                    <option value="9">FAMILI LAIN</option>
                                    <option value="10">PEMBANTU</option>
                                    <option value="11">LAINNYA</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="control-label col-md-4 col-sm-3 col-xs-12">Jenis Kelamin</label>
                            <div class="input-group col-md-6 col-sm-6 col-xs-12">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-primary btn-sm " disabled="">
                                        <input type="radio" name="sex" id="jenis_kelamin" disabled="" value="1" autocomplete="off"> Laki-Laki
                                    </label>
                                    <label class="btn btn-primary btn-sm  active  disabled">
                                        <input type="radio" name="sex" id="jenis_kelamin" disabled="" value="2" autocomplete="off" checked=""> Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="agama_id" class="control-label col-md-4 col-sm-3 col-xs-12">Agama</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" disabled="" id="agama_id" name="agama_id">
                                    <option value="1" selected="selected">ISLAM</option>
                                    <option value="2">KRISTEN</option>
                                    <option value="3">KATHOLIK</option>
                                    <option value="4">HINDU</option>
                                    <option value="5">BUDHA</option>
                                    <option value="6">KHONGHUCU</option>
                                    <option value="7">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status" class="control-label col-md-4 col-sm-3 col-xs-12">Status Penduduk</label>
                            <div class="input-group col-md-6 col-sm-6 col-xs-12">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-primary btn-sm " disabled="">
                                        <input type="radio" name="status" id="status" value="1" disabled="" autocomplete="off"> Tetap
                                    </label>
                                    <label class="btn btn-primary btn-sm " disabled="">
                                        <input type="radio" name="status" id="status" value="2" disabled="" autocomplete="off"> Tidak Aktif
                                    </label>
                                    <label class="btn btn-primary btn-sm " disabled="">
                                        <input type="radio" name="status" id="status" value="3" disabled="" autocomplete="off"> Pendatang
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="akta_lahir" class="control-label col-md-4 col-sm-3 col-xs-12">Akta Lahir</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="akta_lahir" name="akta_lahir" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir" class="control-label col-md-4 col-sm-3 col-xs-12">Tempat Lahir</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="tempat_lahir" name="tempat_lahir" type="text" value="MANGSIT">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir" class="control-label col-md-4 col-sm-3 col-xs-12">Tanggal Lahir</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="tanggal_lahir" name="tanggal_lahir" type="text" value="1996-03-10">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="wajib_ktp" class="control-label col-md-4 col-sm-3 col-xs-12">Wajib KTP</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="wajib_ktp" name="wajib_ktp" type="text" value="Ya">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status_rekam" class="control-label col-md-4 col-sm-3 col-xs-12">Status Rekam</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" disabled="" id="status_rekam" name="status_rekam">
                                    <option value="1">BELUM WAJIB</option>
                                    <option value="2">BELUM REKAM</option>
                                    <option value="3">SUDAH REKAM</option>
                                    <option value="4">CARD PRINTED</option>
                                    <option value="5">PRINT READY RECORD</option>
                                    <option value="6">CARD SHIPPED</option>
                                    <option value="7">SENT FOR CARD PRINTING</option>
                                    <option value="8">CARD ISSUED</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ktp_el" class="control-label col-md-4 col-sm-3 col-xs-12">e-KTP</label>
                            <div class="input-group col-md-6 col-sm-6 col-xs-12">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-primary btn-sm " disabled="">
                                        <input type="radio" name="ktp_el" id="ktp_el" value="1" disabled="" autocomplete="off"> Ya
                                    </label>
                                    <label class="btn btn-primary btn-sm " disabled="">
                                        <input type="radio" name="ktp_el" id="ktp_el" value="2" disabled="" autocomplete="off"> Tidak
                                    </label>
                                </div>
                            </div>
                        </div>

                        <legend>PENDIDIKAN DAN PEKERJAAN</legend>

                        <div class="form-group">
                            <label for="pendidikan_kk_id" class="control-label col-md-4 col-sm-3 col-xs-12">Pendidikan dalam KK</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" disabled="" id="pendidikan_kk_id" name="pendidikan_kk_id">
                                    <option value="1">TIDAK / BELUM SEKOLAH</option>
                                    <option value="2">BELUM TAMAT SD/SEDERAJAT</option>
                                    <option value="3">TAMAT SD / SEDERAJAT</option>
                                    <option value="4" selected="selected">SLTP/SEDERAJAT</option>
                                    <option value="5">SLTA / SEDERAJAT</option>
                                    <option value="6">DIPLOMA I / II</option>
                                    <option value="7">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                    <option value="8">DIPLOMA IV/ STRATA I</option>
                                    <option value="9">STRATA II</option>
                                    <option value="10">STRATA III</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pendidikan_sedang_id" class="control-label col-md-4 col-sm-3 col-xs-12">Pendidikan sedang ditempuh</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" disabled="" id="pendidikan_sedang_id" name="pendidikan_sedang_id">
                                    <option value="1">BELUM MASUK TK/KELOMPOK BERMAIN</option>
                                    <option value="2">SEDANG TK/KELOMPOK BERMAIN</option>
                                    <option value="3">TIDAK PERNAH SEKOLAH</option>
                                    <option value="4">SEDANG SD/SEDERAJAT</option>
                                    <option value="5">TIDAK TAMAT SD/SEDERAJAT</option>
                                    <option value="6">SEDANG SLTP/SEDERAJAT</option>
                                    <option value="7">SEDANG SLTA/SEDERAJAT</option>
                                    <option value="8">SEDANG D-1/SEDERAJAT</option>
                                    <option value="9">SEDANG D-2/SEDERAJAT</option>
                                    <option value="10">SEDANG D-3/SEDERAJAT</option>
                                    <option value="11">SEDANG S-1/SEDERAJAT</option>
                                    <option value="12">SEDANG S-2/SEDERAJAT</option>
                                    <option value="13">SEDANG S-3/SEDERAJAT</option>
                                    <option value="14">SEDANG SLB A/SEDERAJAT</option>
                                    <option value="15">SEDANG SLB B/SEDERAJAT</option>
                                    <option value="16">SEDANG SLB C/SEDERAJAT</option>
                                    <option value="17">TIDAK DAPAT MEMBACA DAN MENULIS HURUF LATIN/ARAB</option>
                                    <option value="18" selected="selected">TIDAK SEDANG SEKOLAH</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pekerjaan_id" class="control-label col-md-4 col-sm-3 col-xs-12">Pekerjaan</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" disabled="" id="pekerjaan_id" name="pekerjaan_id">
                                    <option value="1">BELUM/TIDAK BEKERJA</option>
                                    <option value="2" selected="selected">MENGURUS RUMAH TANGGA</option>
                                    <option value="3">PELAJAR/MAHASISWA</option>
                                    <option value="4">PENSIUNAN</option>
                                    <option value="5">PEGAWAI NEGERI SIPIL (PNS)</option>
                                    <option value="6">TENTARA NASIONAL INDONESIA (TNI)</option>
                                    <option value="7">KEPOLISIAN RI (POLRI)</option>
                                    <option value="8">PERDAGANGAN</option>
                                    <option value="9">PETANI/PERKEBUNAN</option>
                                    <option value="10">PETERNAK</option>
                                    <option value="11">NELAYAN/PERIKANAN</option>
                                    <option value="12">INDUSTRI</option>
                                    <option value="13">KONSTRUKSI</option>
                                    <option value="14">TRANSPORTASI</option>
                                    <option value="15">KARYAWAN SWASTA</option>
                                    <option value="16">KARYAWAN BUMN</option>
                                    <option value="17">KARYAWAN BUMD</option>
                                    <option value="18">KARYAWAN HONORER</option>
                                    <option value="19">BURUH HARIAN LEPAS</option>
                                    <option value="20">BURUH TANI/PERKEBUNAN</option>
                                    <option value="21">BURUH NELAYAN/PERIKANAN</option>
                                    <option value="22">BURUH PETERNAKAN</option>
                                    <option value="23">PEMBANTU RUMAH TANGGA</option>
                                    <option value="24">TUKANG CUKUR</option>
                                    <option value="25">TUKANG LISTRIK</option>
                                    <option value="26">TUKANG BATU</option>
                                    <option value="27">TUKANG KAYU</option>
                                    <option value="28">TUKANG SOL SEPATU</option>
                                    <option value="29">TUKANG LAS/PANDAI BESI</option>
                                    <option value="30">TUKANG JAHIT</option>
                                    <option value="31">TUKANG GIGI</option>
                                    <option value="32">PENATA RIAS</option>
                                    <option value="33">PENATA BUSANA</option>
                                    <option value="34">PENATA RAMBUT</option>
                                    <option value="35">MEKANIK</option>
                                    <option value="36">SENIMAN</option>
                                    <option value="37">TABIB</option>
                                    <option value="38">PARAJI</option>
                                    <option value="39">PERANCANG BUSANA</option>
                                    <option value="40">PENTERJEMAH</option>
                                    <option value="41">IMAM MASJID</option>
                                    <option value="42">PENDETA</option>
                                    <option value="43">PASTOR</option>
                                    <option value="44">WARTAWAN</option>
                                    <option value="45">USTADZ/MUBALIGH</option>
                                    <option value="46">JURU MASAK</option>
                                    <option value="47">PROMOTOR ACARA</option>
                                    <option value="48">ANGGOTA DPR-RI</option>
                                    <option value="49">ANGGOTA DPD</option>
                                    <option value="50">ANGGOTA BPK</option>
                                    <option value="51">PRESIDEN</option>
                                    <option value="52">WAKIL PRESIDEN</option>
                                    <option value="53">ANGGOTA MAHKAMAH KONSTITUSI</option>
                                    <option value="54">ANGGOTA KABINET KEMENTERIAN</option>
                                    <option value="55">DUTA BESAR</option>
                                    <option value="56">GUBERNUR</option>
                                    <option value="57">WAKIL GUBERNUR</option>
                                    <option value="58">BUPATI</option>
                                    <option value="59">WAKIL BUPATI</option>
                                    <option value="60">WALIKOTA</option>
                                    <option value="61">WAKIL WALIKOTA</option>
                                    <option value="62">ANGGOTA DPRD PROVINSI</option>
                                    <option value="63">ANGGOTA DPRD KABUPATEN/KOTA</option>
                                    <option value="64">DOSEN</option>
                                    <option value="65">GURU</option>
                                    <option value="66">PILOT</option>
                                    <option value="67">PENGACARA</option>
                                    <option value="68">NOTARIS</option>
                                    <option value="69">ARSITEK</option>
                                    <option value="70">AKUNTAN</option>
                                    <option value="71">KONSULTAN</option>
                                    <option value="72">DOKTER</option>
                                    <option value="73">BIDAN</option>
                                    <option value="74">PERAWAT</option>
                                    <option value="75">APOTEKER</option>
                                    <option value="76">PSIKIATER/PSIKOLOG</option>
                                    <option value="77">PENYIAR TELEVISI</option>
                                    <option value="78">PENYIAR RADIO</option>
                                    <option value="79">PELAUT</option>
                                    <option value="80">PENELITI</option>
                                    <option value="81">SOPIR</option>
                                    <option value="82">PIALANG</option>
                                    <option value="83">PARANORMAL</option>
                                    <option value="84">PEDAGANG</option>
                                    <option value="85">PERANGKAT DESA</option>
                                    <option value="86">KEPALA DESA</option>
                                    <option value="87">BIARAWATI</option>
                                    <option value="88">WIRASWASTA</option>
                                    <option value="89">LAINNYA</option>
                                </select>
                            </div>
                        </div>

                        <legend>DATA KEWARGANEGARAAN</legend>

                        <div class="form-group">
                            <label for="warga_negara_id" class="control-label col-md-4 col-sm-3 col-xs-12">Warganegara</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" disabled="" id="warga_negara_id" name="warga_negara_id">
                                    <option value="1" selected="selected">WNI</option>
                                    <option value="2">WNA</option>
                                    <option value="3">DUA KEWARGANEGARAAN</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dokumen_pasport" class="control-label col-md-4 col-sm-3 col-xs-12">Nomor Paspor</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="dokumen_pasport" name="dokumen_pasport" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_akhir_pasport" class="control-label col-md-4 col-sm-3 col-xs-12">Tanggal Akhir Paspor</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="tanggal_akhir_pasport" name="tanggal_akhir_pasport" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dokumen_kitas" class="control-label col-md-4 col-sm-3 col-xs-12">Nomor KITAS/KITAP</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="dokumen_kitas" name="dokumen_kitas" type="text">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <legend>ORANG TUA</legend>

                        <div class="form-group">
                            <label for="ayah_nik" class="control-label col-md-4 col-sm-3 col-xs-12">NIK Ayah</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="ayah_nik" name="ayah_nik" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_ayah" class="control-label col-md-4 col-sm-3 col-xs-12">Nama Ayah</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="nama_ayah" name="nama_ayah" type="text" value="AHLUL">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ibu_nik" class="control-label col-md-4 col-sm-3 col-xs-12">NIK Ibu</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="ibu_nik" name="ibu_nik" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama_ibu" class="control-label col-md-4 col-sm-3 col-xs-12">Nama Ibu</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="nama_ibu" name="nama_ibu" type="text" value="RUSDAH">
                            </div>
                        </div>

                        <legend>ALAMAT</legend>

                        <div class="form-group">
                            <label for="telepon" class="control-label col-md-4 col-sm-3 col-xs-12">Nomor Telepon</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="telepon" name="telepon" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat_sebelumnya" class="control-label col-md-4 col-sm-3 col-xs-12">Alamat Sebelumnya</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="alamat_sebelumnya" name="alamat_sebelumnya" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="control-label col-md-4 col-sm-3 col-xs-12">Alamat Sekarang</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="alamat_s" name="alamat" type="text">
                            </div>
                        </div>

                        <legend>STATUS KAWIN</legend>

                        <div class="form-group">
                            <label for="status_kawin" class="control-label col-md-4 col-sm-3 col-xs-12">Status Kawin</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" disabled="" id="status_kawin" name="status_kawin">
                                    <option value="1">BELUM KAWIN</option>
                                    <option value="2" selected="selected">KAWIN</option>
                                    <option value="3">CERAI HIDUP</option>
                                    <option value="4">CERAI MATI</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="akta_perkawinan" class="control-label col-md-4 col-sm-3 col-xs-12">No. Akta Nikah (Buku Nikah)</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" id="akta_perkawinan" name="akta_perkawinan" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_perkawinan" class="control-label col-md-4 col-sm-3 col-xs-12">Tanggal Nikah</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="tanggal_perkawinan" name="tanggal_perkawinan" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="akta_perceraian" class="control-label col-md-4 col-sm-3 col-xs-12">Akta Perceraian</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="akta_perceraian" name="akta_perceraian" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_perceraian" class="control-label col-md-4 col-sm-3 col-xs-12">Tanggal Perceraian</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input class="form-control" disabled="" id="tanggal_perceraian" name="tanggal_perceraian" type="text">
                            </div>
                        </div>

                        <legend>DATA KESEHATAN</legend>

                        <div class="form-group">
                            <label for="golongan_darah_id" class="control-label col-md-4 col-sm-3 col-xs-12">Golongan Darah</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" disabled="" id="golongan_darah_id" name="golongan_darah_id">
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">AB</option>
                                    <option value="4">O</option>
                                    <option value="13" selected="selected">TIDAK TAHU</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cacat_id" class="control-label col-md-4 col-sm-3 col-xs-12">Cacat</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" disabled="" id="cacat_id" name="cacat_id">
                                    <option value="1">CACAT FISIK</option>
                                    <option value="2">CACAT NETRA/BUTA</option>
                                    <option value="3">CACAT RUNGU/WICARA</option>
                                    <option value="4">CACAT MENTAL/JIWA</option>
                                    <option value="5">CACAT FISIK DAN MENTAL</option>
                                    <option value="6">CACAT LAINNYA</option>
                                    <option value="7">TIDAK CACAT</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sakit_menahun_id" class="control-label col-md-4 col-sm-3 col-xs-12">Sakit Menahun</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" disabled="" id="sakit_menahun_id" name="sakit_menahun_id">
                                    <option value="1">JANTUNG</option>
                                    <option value="2">LEVER</option>
                                    <option value="3">PARU-PARU</option>
                                    <option value="4">KANKER</option>
                                    <option value="5">STROKE</option>
                                    <option value="6">DIABETES MELITUS</option>
                                    <option value="7">GINJAL</option>
                                    <option value="8">MALARIA</option>
                                    <option value="9">LEPRA/KUSTA</option>
                                    <option value="10">HIV/AIDS</option>
                                    <option value="11">GILA/STRESS</option>
                                    <option value="12">TBC</option>
                                    <option value="13">ASTHMA</option>
                                    <option value="14">TIDAK ADA/TIDAK SAKIT</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cara_kb_id" class="control-label col-md-4 col-sm-3 col-xs-12">Cara KB</label>

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" disabled="" id="cara_kb_id" name="cara_kb_id">
                                    <option value="1">Pil</option>
                                    <option value="2">IUD</option>
                                    <option value="3">Suntik</option>
                                    <option value="4">Kondom</option>
                                    <option value="5">Susuk KB</option>
                                    <option value="6">Sterilisasi Wanita</option>
                                    <option value="7">Sterilisasi Pria</option>
                                    <option value="99">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hamil" class="control-label col-md-4 col-sm-3 col-xs-12">Status Kehamilan</label>
                            <div class="input-group col-md-6 col-sm-6 col-xs-12">
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-primary btn-sm " disabled="">
                                        <input type="radio" name="hamil" id="hamil" value="1" disabled="" autocomplete="off"> Tidak Hamil
                                    </label>
                                    <label class="btn btn-primary btn-sm " disabled="">
                                        <input type="radio" name="hamil" id="hamil" value="2" disabled="" autocomplete="off"> Hamil
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ln_solid"></div>
            </div>
        </form>
        <div class="box-footer with-border">
            <div class="float-right">
                <div class="btn-group">
                    <a href="index.php/data/penduduk">
                        <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Kembali
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>