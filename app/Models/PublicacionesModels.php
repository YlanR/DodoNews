<?php
namespace App\Models;
use CodeIgniter\Model;

class PublicacionesModels extends Model{
    protected $table = 'publicaciones';
    protected $primaryKey = 'id_publicacion';
    protected $allowedFields = ['usuario', 'correo_usuario', 'titulo', 'subtitulo', 'imagen', 'descripcion', 'contenido', 'categoria'];

    public function get_publicacionRandom() {
        $this->orderBy('id_publicacion', 'desc');
        $this->limit(1); // Limitar a tres registros aleatorios
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }

    public function get_publicacionRandomdos() {
        $this->orderBy('RAND()');
        $this->limit(2); // Limitar a tres registros aleatorios
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }
    public function get_publicacionRandomdosdos() {
        $this->orderBy('RAND()');
        $this->limit(2); // Limitar a tres registros aleatorios
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }

    public function get_publicacionRandomsDeportes() {
        $this->orderBy('id_publicacion', 'desc');
        $this->where('categoria', 'Deportes');
        // $this->limit(10); // Limitar a tres registros aleatorios
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }

    public function get_publicacionRandoms() {
        $this->orderBy('id_publicacion', 'desc');
        $this->where('categoria', 'Deportes');
        $this->limit(10); // Limitar a tres registros aleatorios
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }

    public function get_publicacionRandomsEconomia() {
        $this->orderBy('id_publicacion', 'desc');
        $this->where('categoria', 'Economia');
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }

    public function get_publicacionRandomss() {
        $this->orderBy('id_publicacion', 'desc');
        $this->where('categoria', 'Economia');
        $this->limit(10); // Limitar a tres registros aleatorios
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }
    // public function get_publicacionRandomsst() {
    //     $this->orderBy('RAND()');
    //     $this->limit(10); // Limitar a tres registros aleatorios
    //     return $this->get()->getResultArray(); // Devuelve un array de registros
    // }

    public function get_publicacionRandomPolitica() {
        $this->orderBy('id_publicacion', 'desc');
        $this->where('categoria', 'Politica');
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }

    public function get_publicacionRandomsst() {
        $this->orderBy('id_publicacion', 'desc');
        $this->where('categoria', 'Politica');
        $this->limit(10); // Limitar a tres registros aleatorios
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }

    public function get_publicacionRandomcheve() {
        $this->orderBy('id_publicacion', 'desc');
        $this->where('categoria', 'Chevere');
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }

    public function get_publicacionRandomMascotas() {
        $this->orderBy('id_publicacion', 'desc');
        $this->where('categoria', 'Mascotas');
        // $this->limit(10); // Limitar a tres registros aleatorios
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }

    public function get_publicacionRandomOpinion() {
        $this->orderBy('id_publicacion', 'desc');
        $this->where('categoria', 'Opinion');
        // $this->limit(10); // Limitar a tres registros aleatorios
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }

    public function get_publicacionRandomJuegos() {
        $this->orderBy('id_publicacion', 'desc');
        $this->where('categoria', 'Juegos');
        // $this->limit(10); // Limitar a tres registros aleatorios
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }

    public function get_publicacionRandomTecno() {
        $this->orderBy('id_publicacion', 'desc');
        $this->where('categoria', 'Tecnologia');
        // $this->limit(10); // Limitar a tres registros aleatorios
        return $this->get()->getResultArray(); // Devuelve un array de registros
    }

    public function getPublicaciones(){
        $publicaciones = $this->db->query("SELECT *  FROM publicaciones");
        // $publicaciones = $this->db->table('publicaciones');
        // $publicaciones->limit(1);
        // shuffle($publicaciones);
        return $publicaciones->getResult();
    }

    // public function getPublicacion($idPublicacion){
    //     $publicaciones = $this->db->query("SELECT * FROM publicaciones where 'id_publicacion'= $idPublicacion");

    //     return $publicaciones->getResult();
    // }

    public function getPublicacion($data){
        $publicaciones = $this->db->table('publicaciones');
        $publicaciones->where($data);
        
        return $publicaciones->get()->getResultArray();

    } 
    public function getPost(){
        $publicaciones = $this->db->table('publicaciones');

        return $publicaciones->get()->getResultArray();

    } 

    public function actualizar($datosPost, $idPost){
        $post = $this->db->table('publicaciones');
        $post->set($datosPost);
        $post->where('id_publicacion', $idPost);
        return $post->update();
    }

    public function getPublicacionUser($correo_usuario){
        $query = $this->db->table('publicaciones');
        $query->where('correo_usuario', $correo_usuario);
        return $query->get()->getResultArray();

    }

    public function OnePublicacion(){
        $publicaciones = $this->db->table('publicaciones');
        
        return $publicaciones->get()->getRow();

    }

    public function crearPost($datosPost){

        $post = $this->db->table('publicaciones');
        $post->insert($datosPost);

        return $post;
    }


    public function eliminar($datosDelete){
        $post = $this->db->table('publicaciones');
        $post->where($datosDelete);
        return $post->delete($datosDelete);
 
    }

}
