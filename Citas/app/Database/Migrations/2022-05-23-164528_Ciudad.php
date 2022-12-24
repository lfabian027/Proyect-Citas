<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ciudad extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_ciudad' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
                'auto_increment' => true
            ],
            'ciudad' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'estado' => [
                'type' => 'INT',
                'constraint' => 2
            ],

            'created_at datetime default current_timestamp'
        ]);

        $this->forge->addKey('id_ciudad', TRUE);
        $this->forge->createTable('ciudades');
    }

    public function down()
    {
        $this->forge->dropTable('ciudades');
    }
}
