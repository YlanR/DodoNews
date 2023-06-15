<?php
namespace App\Models;
use CodeIgniter\Model;

class BuscarModels extends Model
{
    protected $table = 'publicaciones';
    protected $primaryKey ='id_publicacion';
    protected $allowedFields = ['titulo', 'usuario', 'correo_usuario', 'categoria'];

    //    public function BuscarDatos($busc){


    //    $buscar = $this->db->table('publicaciones a');
    //    $buscar->select('*');
    //    $buscar->like('a.titulo', $busc);
    //    $buscar->orLike('a.subtitulo', $busc);
    //    $buscar->orLike('a.descripcion', $busc);
    //    $buscar->orLike('a.usuario', $busc);
    //    $buscar->orLike('a.correo_usuario', $busc);
    //    $buscar->orLike('a.categoria', $busc);
     
    //    $resultado = $buscar->get();

    //     return $resultado->getResult();
    // }

}