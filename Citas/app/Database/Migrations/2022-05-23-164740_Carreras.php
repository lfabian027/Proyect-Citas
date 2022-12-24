<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carreras extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_carrera' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
                'auto_increment' => true
            ],
            'carrera' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'estado' => [
                'type' => 'INT',
                'constraint' => 2
            ],

            'created_at datetime default current_timestamp'
        ]);

        $this->forge->addKey('id_carrera', TRUE);
        $this->forge->createTable('carreras');
    }

    public function down()
    {
        $this->forge->dropTable('carreras');
    }
}
