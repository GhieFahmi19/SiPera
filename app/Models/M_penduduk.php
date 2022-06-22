<?php

namespace App\CodeIgniter;

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class M_penduduk extends Model
{

    protected $table      = 'penduduk';
    protected $primaryKey = 'id_penduduk';
    protected $allowedFields = [
        'nama',
        'nik',
        'email',
        'id_keluarga',
        'kk_level',
        'no_kk_sebelumnya',
        'id_penduduk_hubungan',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'id_penduduk_agama',
        'id_penduduk_pendidikan',
        'id_penduduk_pendidikan_berjalan',
        'id_penduduk_pekerjaan',
        'status_kawin',
        'id_warganegara',
        'nama_ayah',
        'nama_ibu',
        'id_gol_darah',
        'alamat_sebelumnya',
        'alamat_sekarang',
        'akte_lahir',

    ];
}
