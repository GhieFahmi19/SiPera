<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelahiran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'no_kk'          => [
                'type'           => 'INT',
                'constraint'     => 22,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'jk' => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            't_dilahirkan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            't_kelahiran'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'hari'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'tanggal'       => [
                'type'           => 'DATE',
                'null'           => true,
            ],
            'pukul'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '10',
            ],
            'jenis_kelahiran'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '15',
            ],
            'kelahiranke'       => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'penolong'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'berat'       => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'panjang'       => [
                'type'           => 'INT',
                'constraint'     => '11',
            ],
            'nik_ibu'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'nik_ayah'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'tgl_nikah'       => [
                'type'           => 'DATE',
                'null'     => true,
            ],
            'nik_pelapor'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'nik_saksi1'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'nik_saksi2'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
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
        $this->forge->addPrimaryKey('no_kk');
        $this->forge->createTable('kelahiran');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('kelahiran');
    }
}
