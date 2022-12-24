<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Niveles extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id_nivel' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
                'auto_increment' => true
            ],
            'nivel' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'estado' => [
                'type' => 'INT',
                'constraint' => 2
            ],

            'created_at datetime default current_timestamp'
        ]);

        $this->forge->addKey('id_nivel', TRUE);
        $this->forge->createTable('niveles');
    }

    public function down()
    {
        $this->forge->dropTable('niveles');
    }
}
