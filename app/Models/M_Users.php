<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class M_Users extends Model
{
	protected $table = 'users';

	protected $allowedFields = ['id', 'nama', 'gbr', 'username', 'password'];
}
