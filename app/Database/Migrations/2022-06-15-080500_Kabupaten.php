<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kabupaten extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kab'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kabupaten'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_kab', true);
        $this->forge->createTable('kabupaten');
    }

    public function down()
    {
        $this->forge->dropTable('kabupaten');
    }
}
