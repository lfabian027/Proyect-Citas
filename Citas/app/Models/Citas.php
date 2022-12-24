<?php

namespace App\Models;

use CodeIgniter\Model;

class Citas extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'citas';
    protected $primaryKey       = 'id_cita';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombre','apellido','correo','celular','id_rol','id_ciudad','id_carrera','id_nivel','estado'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
    }
    public function select_citas()
    {
        $builder = $this->db->table('citas');
        $builder->select('*,citas.created_at as fecha');
        $builder->join('roles','roles.id_rol=citas.id_rol');
        $builder->join('niveles','niveles.id_nivel=citas.id_nivel');
        $builder->join('ciudades','ciudades.id_ciudad=citas.id_ciudad');
        $builder->join('carreras','carreras.id_carrera=citas.id_carrera');
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function total_citas_mes(){
        $mes=date('m');
        $anio=date('y');
        $builder = $this->db->table('citas');
        $builder->select('COUNT(citas.estado) AS TOTAL');
        $builder->where('MONTH(citas.created_at) ', $mes);
        $builder->where('YEAR(citas.created_at) ', "20".$anio);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public  function total_dia_mes(){
        $mes=date('m');
        $dia=date('d');
        $anio=date('y');
        $builder = $this->db->table('citas');
        $builder->select('COUNT(citas.estado) AS TOTAL');
        $builder->where('DAY(citas.created_at) ', $dia);
        $builder->where('MONTH(citas.created_at) ', $mes);
        $builder->where('YEAR(citas.created_at) ', "20".$anio);
        $query = $builder->get();
        return $query->getResultArray();
    }


    public function sumMonth()
    {
        $anio='20'.date('y');
        $builder = $this->db->table('citas');
        $builder->select(' COUNT(citas.estado) AS TOTAL, MONTH(citas.created_at) AS mes');
        $builder->where(' YEAR(citas.created_at) ', $anio);
        $builder->groupBy('MONTH(citas.created_at)');
        $query = $builder->get();
        return $query->getResultArray();

    }
}
