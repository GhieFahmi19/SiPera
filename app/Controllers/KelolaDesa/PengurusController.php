<?php

namespace App\Controllers\KelolaDesa;

use App\Controllers\BaseController;

class PengurusController extends BaseController
{
	public function __construct()
	{
		helper(["url"]);
	}
	public function kelola_pengurus()
	{

		return view('pegawai/v_pegawai');
	}
}
