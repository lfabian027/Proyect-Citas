<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Carrera extends Seeder
{
    public function run()
    {
        $data = [
            ['carrera' => 'REHABILITACIÓN FÍSICA','estado'=>1,],
            ['carrera' => 'ADMINISTRACIÓN','estado'=>1],
            ['carrera' => 'TRIBUTACIÓN','estado'=>1,],
            ['carrera' => 'GASTRONOMÍA','estado'=>1],
            ['carrera' => 'EMERGENCIAS MÉDICAS','estado'=>1],
        ];

        foreach($data as $dt){
            $this->db->table('carreras')->insert($dt);
        }
    }
}
