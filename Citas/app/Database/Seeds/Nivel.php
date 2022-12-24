<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Nivel extends Seeder
{
    public function run()
    {
        $data = [
            ['nivel' => 'PRIMERO','estado'=>1,],
            ['nivel' => 'SEGUNDO','estado'=>1],
            ['nivel' => 'TERCERO','estado'=>1,],
            ['nivel' => 'CUARTO','estado'=>1],
            ['nivel' => 'QUINTO','estado'=>1,],
            ['nivel' => 'SEXTO','estado'=>1],
        ];
        foreach($data as $dt){
            $this->db->table('niveles')->insert($dt);
        }
    }
}
