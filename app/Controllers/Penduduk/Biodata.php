<?php

namespace App\Controllers\Penduduk;

use App\Controllers\BaseController;

class Biodata extends BaseController
{
	public function __construct()
	{
		helper(["url"]);
	}
	public function kelola_biodata()
	{

		return view('admin/v_biodata_penduduk');
	}
}
