<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Roles extends Seeder
{
    public function run()
    {
        $data = [
            ['rol' => 'ADMINISTRADOR','estado'=>1,],
            ['rol' => 'DOCTOR','estado'=>1],
            ['rol' => 'ESTUDIANTE','estado'=>1,],
            ['rol' => 'DOCENTE','estado'=>1],
            ['rol' => 'ADMINISTRATIVO','estado'=>1],
        ];
        foreach($data as $dt){
            $this->db->table('roles')->insert($dt);
        }
    }
}
