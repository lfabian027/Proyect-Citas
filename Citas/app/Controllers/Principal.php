<?php

namespace App\Controllers;

use App\Models\Carreras;
use App\Models\Ciudades;
use App\Models\Niveles;
use App\Models\Roles;


class Principal extends BaseController
{
    public function index()
    {
        $modelNiveles=new Niveles();
        $modelCarreras= new Carreras();
        $modelCiudades=new Ciudades();
        $modelRoles=new Roles();


        $datos=[
            'niveles'=>$modelNiveles->select_level(),
            'carreras'=>$modelCarreras->select_carreras(),
            'ciudades'=>$modelCiudades->select_ciudad(),
            'roles'=>$modelRoles->selectRoles()
        ];

        return view('principal/index',$datos);
    }
}
