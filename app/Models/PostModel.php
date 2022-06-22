<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
	/**
	 * table name
	 */
	protected $table = "provinsi";

	/**
	 * allowed Field
	 */
	protected $allowedFields = [
		'id_prov',
		'provinsi'
	];
}
