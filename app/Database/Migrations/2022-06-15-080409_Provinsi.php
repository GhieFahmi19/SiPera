<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Provinsi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_prov'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'provinsi'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_prov', true);
        $this->forge->createTable('provinsi');
    }

    public function down()
    {
        $this->forge->dropTable('provinsi');
    }
}
