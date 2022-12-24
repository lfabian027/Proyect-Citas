<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Citas;
use App\Models\Users;

class Cita extends BaseController
{
    public function index()
    {
        $modelCitas=new Citas();
        $datos = [
            'title' => 'Citas'
        ];
        return view('cita/index', $datos);
    }

    public  function  insert(){
        $modelCitas=new Citas();
        $input=$this->getRequestInput($this->request);
        $validation = \Config\Services::validation();
        if (!$this->validate('citas')) {
            return $this->getRespose(['error' => $validation->getErrors()]);
        }

        $modelCitas->insert($input);
        return $this->getRespose([
            'success'=>'Registrada..!!'
        ]);
    }

    public  function all_citas(){
        $modelCitas=new Citas();
        return $this->getRespose(
            [
              'citas'=>$modelCitas->select_citas()
            ]
        );
    }

    public function reporteCitas(){
        $modelCitas=new Citas();
        $modelUsers=new Users();



        return $this->getRespose([
            'total_users' => $modelUsers->total_users(),
            'total_cita_mes'=>$modelCitas->total_citas_mes(),
            'total_cita_dia_mes'=>$modelCitas->total_dia_mes(),
            'total'=>$modelCitas->sumMonth()
        ]);
    }
}
