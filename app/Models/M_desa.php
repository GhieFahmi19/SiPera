<?php

namespace App\Models;

use CodeIgniter\Model;

class M_desa extends Model
{
	protected $table                = 'desa';
	protected $primaryKey           = 'id_desa';
	protected $allowedFields        = ['id_kec', 'desa'];
}
