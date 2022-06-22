<?php

namespace App\Controllers\KelolaSurat;

use App\Controllers\BaseController;
use App\CodeIgniter\Models

class SuratController extends BaseController

{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
		$this->load->database();
		$this->load->model('surat_master_model');
	}
	public function view()
	{
		$this->load->view('surat');
	}
	
	public function viewajax()
	{
				$data=$this->surat_master_model->display_records();
				$i=1;
				foreach($data as $row)
				{
					  echo "<tr>";
					  echo "<td>".$i."</td>";
					  echo "<td>".$row->name."</td>";
					  echo "<td>".$row->email."</td>";
					  echo "<td>".$row->phone."</td>";
					  echo "<td>".$row->city."</td>";
					  echo "</tr>";
					  $i++;
				}
	}
}