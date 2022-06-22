<?php

namespace App\Controllers\Penduduk;

use App\Controllers\BaseController;

class KeluargaController extends BaseController
{
	public function __construct()
	{
		helper(["url"]);
	}
	public function kelola_keluarga()
	{

		return view('keluarga/v_data_keluarga');
	}
}
