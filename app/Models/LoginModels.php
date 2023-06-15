<?php
namespace App\Models;
use CodeIgniter\Model;

class LoginModels extends Model{
   
    public function obtenerUsuarios($data){
        $usuario = $this->db->table('usuario');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }

    public function crearUsuarios($datosUsuario){

        $usuarios = $this->db->table('usuario');
        $usuarios->insert($datosUsuario);

        return $usuarios;
    }

    public function check_email($email)
    {
        return $this->db->table('usuario')->where('email', $email)->countAllResults() > 0;
    }

    // public function getUsuarios(){
    //     $usuarios = $this->db->query("SELECT * FROM usuarios");

    //     return $usuarios->getResult();
    // }
}