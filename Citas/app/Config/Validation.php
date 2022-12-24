<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
use \App\Validation\CustomRules;



class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */


    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        CustomRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $user = [
        'nombre' => 'required',
        'apellido' => 'required',
        'cedula' => 'required|is_unique[users.cedula]|max_length[10]|min_length[10]',
        'telefono' => 'required',
        'correo' => 'is_unique[users.correo]|required|valid_email',
        'clave' => 'required|min_length[5]|max_length[12]',
        'cclave' => 'required|min_length[5]|max_length[12]|matches[clave]',
        'id_rol' => 'required',
    ];

    public $loginUser = [

        'correo' => 'required|valid_email',
        'contrasenia' => 'required|min_length[5]|max_length[12]',
    ];



    public $citas=[
        'nombre'=>'required',
        'apellido'=>'required',
        'correo' => 'required|valid_email',
        'celular'=>'required|is_natural|min_length[10]|max_length[10]',
    ];








    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
}
