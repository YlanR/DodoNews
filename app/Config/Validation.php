<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

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

    public $registrate = [
        'nombre' => [
            'rules' => 'min_length[4]|max_length[30]|alpha_space',
            'errors' => [
                'min_length' => 'El nombre y apellido debe tener mas de 4 Caracteres',
                'max_length' => 'El nombre y apellido debe tener menos de 50 Caracteres',
                'alpha_space' => 'El nombre y apellido no debe tener ningun signo o numero'
            ]
        ],
        'email' => [
            'rules' => 'min_length[10]|max_length[30]',
            'errors' => [
                'min_length' => 'El correo debe tener mas de 10 Caracteres',
                'max_length' => 'El correo debe tener menos de 30 Caracteres'
            ]
        ],
        'password' => [
            'rules' => 'min_length[5]',
            'errors' => [
                'min_length' => 'La contraseña debe tener mas de 5 Caracteres',
            ]
        ],
       
    ];

    public $subirpost = [
        'titulo'   => [
            'rules' =>  'required|min_length[70]|max_length[120]',
            'errors' => [
                'min_length' => 'En el titulo debe ingresar mas de 70 Caracteres',
                'max_length' => 'En el titulo debe ingresar menos de 120 Caracteres'
            ]
        ],
        'contenido' => [
            'rules' =>  'required|min_length[450]',
            'errors' => [
                'min_length' => 'En el contenido debe ingresar mas de 450 Caracteres',
            ]
        ],
        'subtitulo' => [
            'rules' =>  'required|min_length[70]|max_length[200]',
            'errors' => [
                'min_length' => 'En el subtitulo debe ingresar mas de 70 Caracteres',
                'max_length' => 'En el subtitulo debe ingresar menos de 200 Caracteres'
            ]
        ],
        // 'image' => [
        //     'rules' =>  'is_image[image]|max_dims[image,992,558]|ext_in[image,png,jpg]|max_size[image,200]',
        //     'errors' => [
        //         'is_image' => 'Debe ser una imagen',
        //         'max_dims' => 'La imagen debe tener un promedio de tamaño de 992 de alto y 558 de ancho',
        //         'ext_in' => 'La imagen debe ser png o jpg',
        //         'max_size' => 'La imagen no debe pesar mas de 200Kb'
        //     ]
        // ],
        'descripcion' => [
            'rules' =>  'required|min_length[20]|max_length[100]',
            'errors' => [
                'min_length' => 'En la descripcion debe ingresar mas de 20 Caracteres',
                'max_length' => 'En la descripcion debe ingresar menos de 100 Caracteres'
            ]
        ]
 
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
}
