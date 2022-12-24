<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Citas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cita' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => false,
                'auto_increment' => true
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'apellido' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'correo' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'celular' => [
                'type' => 'VARCHAR',
                'constraint' => 12
            ],
            'id_rol' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'id_ciudad' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'id_carrera' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'id_nivel' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'estado' => [
                'type' => 'INT',
                'constraint' => 2
            ],

            'created_at datetime default current_timestamp'
        ]);
        $this->forge->addForeignKey('id_rol','roles','id_rol');
        $this->forge->addForeignKey('id_nivel','niveles','id_nivel');
        $this->forge->addForeignKey('id_ciudad','ciudades','id_ciudad');
        $this->forge->addForeignKey('id_carrera','carreras','id_carrera');
        $this->forge->addKey('id_cita', TRUE);
        $this->forge->createTable('citas');
    }

    public function down()
    {
        $this->forge->dropTable('citas');
    }
}
