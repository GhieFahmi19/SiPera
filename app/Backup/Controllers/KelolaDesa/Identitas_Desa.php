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


		return view('identitas_desa/index');
	}

	public function form()
	{


		// Buat row data desa di form apabila belum ada data desa

		echo view('identitas_desa/v_form');
	}

	public function insert()
	{

		redirect('identitas_desa');
	}

	public function update($id = 0)
	{

		redirect('identitas_desa');
	}
}
