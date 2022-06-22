<?php

namespace App\Controllers\Penduduk;

use App\Controllers\BaseController;

class KelolaBantuan extends BaseController
{
	public function __construct()
	{
		helper(["url"]);
	}
	public function kelola_bantuan()
	{

		return view('admin/v_data_bantuan');
	}
}
