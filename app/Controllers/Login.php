<?php

namespace App\Controllers;
use App\Models\LoginModels;
use CodeIgniter\Validation\Validation;


class Login extends BaseController
{

public function __construct(){
        $Usuario = $this->LoginModels = new LoginModels();
}

public function login()
    {
        $correo = trim($this->request->getPost('email'));
        $password = trim($this->request->getPost('password'));

         $Usuario = new LoginModels();

        $datosUsuario = $Usuario->obtenerUsuarios(['email'=>$correo]);

        if(!count($datosUsuario) > 0 ){
            return redirect()->back()->with('msgfalse', 'Usuario no registrado en el sistema');

        }elseif (!password_verify($password, $datosUsuario[0]['password'])) {
            return redirect()->back()->with('msgfalse', 'Contraseña invalida');
        } else{

            $data = [
                "id_usuario" => $datosUsuario[0]['id_usuario'],
                "nombre"   => $datosUsuario[0]['nombre'],
                "email"     => $datosUsuario[0]['email'],
                "password" =>  $datosUsuario[0]['password'],
                "genero"      => $datosUsuario[0]['genero'],
                "fecha"    => $datosUsuario[0]['fecha'],
                "logged_in" =>TRUE
            ];

            $session = session();
            $session->set($data);
            

            return redirect()->to(base_url('/'))->with('mensaje','3');

        }

        
    }

    public function registro(){

        $Usuario = new LoginModels();

        $nombre = $this->request->getPost("nombre");
            $email = $this->request->getPost("email");
            $genero = $this->request->getPost("genero");
            $encriptar = password_hash($this->request->getPost("password"), PASSWORD_DEFAULT);
            $passwordrp = $this->request->getPost('passwordrp');

            if(!$this->validate('registrate')){
               
                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back()->withInput();
        } else{
            if ($Usuario->check_email($email)) {
                            // Email no existe
                    return redirect()->to(base_url().'/login')->withInput()->with('msgfalse', 'Ya se encuentra este Correo registrado');
                }else{
                    $datosUsuario =     ["nombre"   =>  $nombre,
                                        "email"  =>  $email,
                                        "password" =>  $encriptar,
                                        "genero" => $genero];
            
                $Usuario->crearUsuarios($datosUsuario);


                return redirect()->to(base_url().'/login')->with('msgtrue', 'Usuario registrado correctamente');
            }
        }
    }



    public function logout(){

        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'))->with('mensaje','5');

    }
}