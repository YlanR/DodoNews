<?php

namespace App\Controllers;
use App\Models\PublicacionesModels;


class Categorias extends BaseController
{
    public function Politica(){

        $session = session();
        $mensaje = session('mensaje');

        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;

        } else {
            $data['logged_in'] = FALSE;
        }

        $mi_modelo = new PublicacionesModels();
        $Politica = $mi_modelo->get_publicacionRandomPolitica();

        $datospublic = array(
            'politica' => $Politica,
            "mensaje" => $mensaje
        );

        $vistas = view('layout/header').
        view('layout/navbar', $data).
        view('categorias/politica', $datospublic).
        view('layout/footer');

        return $vistas;
    }

    public function Deportes(){

        $session = session();
        $mensaje = session('mensaje');

        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;

        } else {
            $data['logged_in'] = FALSE;
        }

        $mi_modelo = new PublicacionesModels();
        $deporte = $mi_modelo->get_publicacionRandomsDeportes();

        $datospublic = array(
            'deporte' => $deporte,
            "mensaje" => $mensaje
        );

        $vistas = view('layout/header').
        view('layout/navbar', $data).
        view('categorias/deportes', $datospublic).
        view('layout/footer');

        return $vistas;
    }

    public function Economia(){

        $session = session();
        $mensaje = session('mensaje');

        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;

        } else {
            $data['logged_in'] = FALSE;
        }

        $mi_modelo = new PublicacionesModels();
        $economia = $mi_modelo->get_publicacionRandomsEconomia();

        $datospublic = array(
            'economia' => $economia,
            "mensaje" => $mensaje
        );

        $vistas = view('layout/header').
        view('layout/navbar', $data).
        view('categorias/economia', $datospublic).
        view('layout/footer');

        return $vistas;
    }

    public function Chevere(){

        $session = session();
        $mensaje = session('mensaje');

        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;

        } else {
            $data['logged_in'] = FALSE;
        }

        $mi_modelo = new PublicacionesModels();
        $chevere = $mi_modelo->get_publicacionRandomcheve();

        $datospublic = array(
            'chevere' => $chevere,
            "mensaje" => $mensaje
        );

        $vistas = view('layout/header').
        view('layout/navbar', $data).
        view('categorias/chevere', $datospublic).
        view('layout/footer');

        return $vistas;
    }

    public function Mascotas(){

        $session = session();
        $mensaje = session('mensaje');

        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;

        } else {
            $data['logged_in'] = FALSE;
        }

        $mi_modelo = new PublicacionesModels();
        $mascotas = $mi_modelo->get_publicacionRandomMascotas();

        $datospublic = array(
            'mascotas' => $mascotas,
            "mensaje" => $mensaje
        );

        $vistas = view('layout/header').
        view('layout/navbar', $data).
        view('categorias/mascotas', $datospublic).
        view('layout/footer');

        return $vistas;
    }

    public function Opinion(){

        $session = session();
        $mensaje = session('mensaje'); 

        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;

        } else {
            $data['logged_in'] = FALSE;
        }

        $mi_modelo = new PublicacionesModels();
        $opinion = $mi_modelo->get_publicacionRandomOpinion();

        $datospublic = array(
            'opinion' => $opinion,
            "mensaje" => $mensaje
        );

        $vistas = view('layout/header').
        view('layout/navbar', $data).
        view('categorias/opinion', $datospublic).
        view('layout/footer');

        return $vistas;
    }

    public function Juegos(){

        $session = session();
        $mensaje = session('mensaje');

        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;

        } else {
            $data['logged_in'] = FALSE;
        }

        $mi_modelo = new PublicacionesModels();
        $juegos = $mi_modelo->get_publicacionRandomJuegos();

        $datospublic = array(
            'juegos' => $juegos,
            "mensaje" => $mensaje
        );

        $vistas = view('layout/header').
        view('layout/navbar', $data).
        view('categorias/juegos', $datospublic).
        view('layout/footer');

        return $vistas;
    }

    public function Tecnologia(){

        $session = session();
        $mensaje = session('mensaje');

        if ($session->get('logged_in')) {
            $data['logged_in'] = TRUE;

        } else {
            $data['logged_in'] = FALSE;
        }

        $mi_modelo = new PublicacionesModels();
        $tecnologia = $mi_modelo->get_publicacionRandomTecno();

        $datospublic = array(
            'tecnologia' => $tecnologia,
            "mensaje" => $mensaje
        );

        $vistas = view('layout/header').
        view('layout/navbar', $data).
        view('categorias/tecnologia', $datospublic).
        view('layout/footer');

        return $vistas;
    }
}