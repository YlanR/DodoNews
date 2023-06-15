<?php

namespace App\Controllers;
use App\Models\PublicacionesModels;


class Home extends BaseController
{
    protected $helper = ['form'];

    public function index()
    {
        $session = session();
        $validation = \Config\Services::validation();
        $mensaje = session('mensaje');

        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;

        } else {
            $data['logged_in'] = FALSE;
        }

        // $publicaciones = new PublicacionesModels ();


        // $datospublic = $publicaciones->getPublicaciones();
        // shuffle ($datospublic);

        $mi_modelo = new PublicacionesModels();
        $principal = $mi_modelo->get_publicacionRandom();
        $dosdos = $mi_modelo->get_publicacionRandomdosdos();
        $dos = $mi_modelo->get_publicacionRandomdos();
        $Deportes = $mi_modelo->get_publicacionRandoms();
        $Economia = $mi_modelo->get_publicacionRandomss();
        $Politica = $mi_modelo->get_publicacionRandomsst();


        $datospublic = array(
            "publicaciones" => $principal,
            "dosdos" => $dosdos,
            "dos" => $dos,
            "deportes" => $Deportes,
            "economia" => $Economia,
            "politica" => $Politica,
            "mensaje" => $mensaje
        );

        
       
        $vistas = view('layout/header').
                view('layout/navbar', $data).
                view('index', $datospublic).
                view('layout/footer');

            return $vistas;
    }



    public function subirpost()
    {
        $session = session();
        $mensaje = session('mensaje');

        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;
        } else {
            $data['logged_in'] = FALSE;
        }

        $datos = ["mensaje" => $mensaje];
       
        $vistas = view('layout/header').
                view('layout/navbar', $data).
                view('post/crear', $datos).
                view('layout/footer');

            return $vistas;
    }
  
    public function mypublicacion()
    {
        $session = session();
        $mensaje = session('mensaje');

        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;
        } else {
            $data['logged_in'] = FALSE;
        }
        $correo_usuario = session('email');
        $nombre = session('nombre');
        
        $mi_modelo = new PublicacionesModels();
        $mispublicaciones = $mi_modelo->getPublicacionUser($correo_usuario);

        $datos = ['dos' => $mispublicaciones,
        "public" => $nombre,
        "mensaje" => $mensaje];
       
        $vistas = view('layout/header').
                view('layout/navbar', $data).
                view('post/mypublicacion', $datos).
                view('layout/footer');

            return $vistas;
    }

    public function categorias()
    {
        $session = session();

        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;
        } else {
            $data['logged_in'] = FALSE;
        }
        $correo_usuario = session('email');
        $nombre = session('nombre');
        
        $mi_modelo = new PublicacionesModels();
        $mispublicaciones = $mi_modelo->getPublicacionUser($correo_usuario);

        $datos = ['dos' => $mispublicaciones,
        "public" => $nombre];
       
        $vistas = view('layout/header').
                view('layout/navbar', $data).
                view('post/mypublicacion', $datos).
                view('layout/footer');

            return $vistas;
    }

    public function register(){
        session();

        $validation = \Config\Services::validation();

        // var_dump();


        $vistas = view('usuario/registro', ['validation' => $validation]);

        return $vistas;
    }

    
    public function login(){

        $vistas = view('usuario/login');

        return $vistas;
        
    }


    
}

