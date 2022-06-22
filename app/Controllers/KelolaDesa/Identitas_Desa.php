<?php

namespace App\Controllers\KelolaDesa;

use App\Controllers\BaseController;

class Identitas_Desa extends BaseController
{
	public function __construct()
	{
		helper(["url"]);
	}
	public function kelola_identitas()
	{
		//$this->tbl_penduduk = new M_penduduk();
		//$data['tbl_penduduk'] = $this->tbl_penduduk->findAll();

		//$data = [
		//'tampildata' => $pd->tampildata()->getResult()
		//];
		return view('identitas_desa/index');
	}
}
