<?php

namespace App\Models;

use CodeIgniter\Model;

class M_kecamatan extends Model
{
	protected $table                = 'kecamatan';
	protected $primaryKey           = 'id_kec';
	protected $allowedFields        = ['kecamatan'];
}
