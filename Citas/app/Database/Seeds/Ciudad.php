<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Ciudad extends Seeder
{
    public function run()
    {
        $data = [
            ['ciudad' => 'IBARRA','estado'=>1,],
            ['ciudad' => 'SAN LORENZO','estado'=>1],
        ];

        foreach($data as $dt){
            $this->db->table('ciudades')->insert($dt);
        }
    }
}
