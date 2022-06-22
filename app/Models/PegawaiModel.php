<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id_pegawai";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_pegawai', 'nik', 'nama', 'jenis_kelamin', 'nama', 'jabatan', 'masa_jabatan', 'sk_jabatan', 'no_telp', 'email', 'alamat'];
}
