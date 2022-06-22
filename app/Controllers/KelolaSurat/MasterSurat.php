<?php

namespace App\Controllers\KelolaSurat;

use App\Controllers\BaseController;

class MasterSurat extends BaseController
{

	public function __construct()
	{
		helper(["url"]);
	}
	public function surat()
	{
		return view('surat/v_kelola_surat');
	}
	public function surat_ket_kematian()
	{
		echo view('surat/suket_mati');
	}
	public function surat_ket_pengantar()
	{
		echo view('surat/suket_pengantar');
	}
	public function surat_ket_penduduk()
	{
		echo view('surat/suket_penduduk');
	}
	public function surat_bio_penduduk()
	{
		echo view('surat/suket_bio_penduduk');
	}
	public function surat_ket_pindah_penduduk()
	{
		echo view('surat/suket_pindah_penduduk');
	}
	public function surat_ket_jual_beli()
	{
		echo view('surat/suket_jual_beli');
	}
	public function surat_ket_catatan_kriminal()
	{
		echo view('surat/suket_catatan_kriminal');
	}
	public function surat_ket_ktp_dalam_proses()
	{
		echo view('surat/suket_ktp_dalam_proses');
	}
	public function surat_ket_beda_nama()
	{
		echo view('surat/suket_beda_nama');
	}
	public function surat_ket_kurang_mampu()
	{
		echo view('surat/suket_kurang_mampu');
	}
	public function surat_izin_keramaian()
	{
		echo view('surat/suket_izin_keramaian');
	}
	public function surat_ket_kehilangan()
	{
		echo view('surat/suket_kehilangan');
	}
	public function surat_ket_usaha()
	{
		echo view('surat/suket_usaha');
	}
	public function surat_ket_jamkesos()
	{
		echo view('surat/suket_jamkesos');
	}
	public function surat_ket_domisili_usaha()
	{
		echo view('surat/suket_domisili_usaha');
	}
	public function surat_ket_kelahiran()
	{
		echo view('surat/suket_kelahiran');
	}
	public function surat_permohonan_akta()
	{
		echo view('surat/surat_permohonan_akta');
	}
	public function surat_pernyataan_akta()
	{
		echo view('surat/surat_pernyataan_akta');
	}
	public function surat_ket_lahir_mati()
	{
		echo view('surat/suket_lahir_mati');
	}
	public function surat_ket_nikah()
	{
		echo view('surat/suket_nikah');
	}
	public function surat_ket_pergi_kawin()
	{
		echo view('surat/suket_pergi_kawin');
	}
	public function surat_ket_wali_hakim()
	{
		echo view('surat/suket_wali_hakim');
	}
	public function surat_permohonan_duplikat_surat_nikah()
	{
		echo view('surat/surat_permohonan_duplikat_surat_nikah');
	}
	public function surat_permohonan_cerai()
	{
		echo view('surat/surat_permohonan_cerai');
	}
}
