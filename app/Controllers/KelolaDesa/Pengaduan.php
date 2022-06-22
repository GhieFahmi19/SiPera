<?php

namespace App\Controllers\KelolaDesa;

use App\Controllers\BaseController;

class Pengaduan extends BaseController
{
	public function __construct()
	{
		helper(["url"]);
	}
	public function kelola_pengaduan()
	{

		return view('admin/v_data_pengaduan');
	}
}
