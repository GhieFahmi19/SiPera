<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblPenduduk extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'id_penduduk'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'nik'       => [
                'type'           => 'INT',
                'constraint'     => '16',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'phone' => [
                'type'           => 'VARCHAR',
                'constraint'     => '16',
            ],
            'id_keluarga' => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'id_datang' => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'id pindah' => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'kk_level' => [
                'type'           => 'TINYINT',
                'constraint'     => '2',
            ],
            'no_kk_sebelumnya' => [
                'type'           => 'VARCHAR',
                'constraint'     => '16',
            ],
            'id_status_ktp' => [
                'type'           => 'TINYINT',
                'constraint'     => '5',
            ],
            'id_penduduk_hubungan' => [
                'type'           => 'INT',
                'constraint'     => '10',
            ],
            'ktp_el' => [
                'type'           => 'TINYINT',
                'constraint'     => '4',
            ],
            'status_rekam' => [
                'type'           => 'TINYINT',
                'constraint'     => '4',
            ],
            'jk' => [
                'type'           => 'CHAR',
                'constraint'     => '8',
            ],
            'tempat_lahir' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'tanggal_lahir' => [
                'type'           => 'DATE',
                'null'           => true,
            ],
            'jenis_kelahiran' => [
                'type'          => 'TINYINT',
                'constraint'     => '4',
            ],
            'kelahiran_anak_ke' => [
                'type'           => 'TINYINT',
                'constraint'     => '2',
            ],
            'berat_lahir' => [
                'type'           => 'SMALLINT',
                'constraint'     => '6',
            ],
            'panjang_lahir' => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            'id_penduduk_agama' => [
                'type'           => 'INT',
                'constraint'     => '10',
            ],
            'id_penduduk_pendidikan' => [
                'type'           => 'INT',
                'constraint'     => '5',
            ],
            'id_penduduk_pendidikan_berjalan' => [
                'type'           => 'INT',
                'constraint'     => '1',
            ],
            'id_penduduk_pekerjaan' => [
                'type'           => 'INT',
                'constraint'     => '10',
            ],
            'id_penduduk_umur' => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'status_kawin' => [
                'type'           => 'TINYINT',
                'constraint'     => '4',
            ],
            'id_warganegara' => [
                'type'           => 'INT',
                'constraint'     => '10',
            ],
            'nik_ayah' => [
                'type'           => 'VARCHAR',
                'constraint'     => '16',
            ],
            'nik_ibu' => [
                'type'           => 'VARCHAR',
                'constraint'     => '16',
            ],
            'nama_ayah' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'nama_ibu' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'id_gol_darah' => [
                'type'           => 'INT',
                'constraint'     => '10',
                'null'           => true,
            ],
            'alamat_sebelumnya' => [
                'type'           => 'VARCHAR',
                'constraint'     => '200',
                'null'           => true,
            ],
            'alamat_sekarang' => [
                'type'           => 'VARCHAR',
                'constraint'     => '200',
                'null'           => true,
            ],
            'id_cacat' => [
                'type'           => 'INT',
                'constraint'     => '11',
                'null'           => true,
            ],
            'id_sakit_menahun' => [
                'type'           => 'INT',
                'constraint'     => '11',
                'null'           => true,
            ],
            'akte_lahir' => [
                'type'           => 'VARCHAR',
                'constraint'     => '400',
                'null'           => true,
            ],
            'id_asuransi' => [
                'type'           => 'TINYINT',
                'constraint'     => '5',
                'null'           => true,
            ],
            'no_asuransi' => [
                'type'           => 'CHAR',
                'constraint'     => '11',
                'null'           => true,
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id_penduduk');
        $this->forge->createTable('penduduk');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('tbl_penduduk');
    }
}
