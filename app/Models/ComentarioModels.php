<?php
namespace App\Models;

use CodeIgniter\Model;

class ComentarioModels extends Model
{
    protected $table = 'comentario';


    public function obtenerComentarios($idPublicacion) {
        $query = $this->db->query("SELECT * FROM comentario WHERE id_publicacion = $idPublicacion");
        return $query->getResultObject();
    }

    public function crearComentario($datoscomments){

        $Comentario = $this->db->table('comentario');
        $Comentario->insert($datoscomments);

        return $Comentario;
    }

    public function eliminar($datosDelete){
        $Comentario = $this->db->table('comentario');
        $Comentario->where($datosDelete);
        return $Comentario->delete($datosDelete);
 
    }
}