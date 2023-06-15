<?php

namespace App\Controllers;
use App\Models\BuscarModels;

class Buscar extends BaseController
{

    public function Buscar()
    {
        $session = session();
        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;
        } else {
            $data['logged_in'] = FALSE;
        }

        $mensaje = '';

        $busqueda = new BuscarModels();

        $buscar = $this->request->getPost("buscar");     
        if(!empty($buscar)){
            $busc = $busqueda->like(['usuario'=>'%'.$buscar.'%']);
            $busc = $busqueda->orLike(['titulo'=>'%'.$buscar.'%']);
            $busc = $busqueda->orLike(['correo_usuario'=>'%'.$buscar.'%']);
            $busc = $busqueda->orLike(['categoria'=>'%'.$buscar.'%'])->findAll();

            
            $datos = [
                'busqueda' => $busc,
                'mensaje' => $mensaje
            ];

            $vistas = view('layout/header').
                view('layout/navbar', $data).
                view('post/buscar', $datos).
                view('layout/footer');


            return $vistas;
        } 
        return redirect()->to(base_url('/'));

        

    }

   
   
}