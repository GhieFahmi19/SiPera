<?php

namespace App\Controllers\Penduduk;

use CodeIgniter\Controller;
use App\Models\M_penduduk;

class PendudukController extends Controller
{
	public function __construct()
	{
		helper(["url"]);
	}
	public function kelola_penduduk()
	{
		//$pd = new M_penduduk();
		//$data = [
		//'tampildata' => $pd->tampildata()->getResult()
		//];
		return view('penduduk/v_data_penduduk');
	}
}
