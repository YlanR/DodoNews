<?php

namespace App\Controllers;
use App\Models\PublicacionesModels;
use App\Models\ComentarioModels;
use CodeIgniter\Validation\Validation;

class Publicaciones extends BaseController
{
//     private function _upload($id)
//     {
 
//     if($imageFile = $this->request->getFile('image')){
  
//     if($imageFile->isValid() && !$imageFile->hasMoved()){
    
//     // validaciones
//     $validated = $this->validate([
//         'image' => [
//         'uploaded[image]',
//         'mime_in[image,image/jpg,image/gif,image/png]'
//         ]
//     ]);
//     if($validated){
//         echo "ok";
//         $newName = $imageFile->getRandomName();
//         //$imageFile->move(WRITEPATH . 'uploads/avatar/', $newName);
//         $imageFile->move(ROOTPATH.'public/uploads', $newName);
//         $personModel = new PersonModel();
//         $personModel->update($id, [
//         'image' => $newName
//         ]);
        
//         return null;
        
//     }else {
//         return $this->validator->getError("image");
//     }

//   }
//  }
// }



public function create()
        {
        $publicacion = new PublicacionesModels();
            // if ($this->validate('person')) {
    

        if($imagen = $this->request->getFile('image')){
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('../public/uploads/',$nuevoNombre);

            $datosImagen = [
                'imagen' => $nuevoNombre
            ];
        //    $publicacion->insert($datosImagen);
        }
        $usuario = $this->request->getPost("usuario");
        $categoria = $this->request->getPost("categoria");
        $contenido = $this->request->getPost("contenido");
        $descripcion = $this->request->getPost("descripcion");
        $titulo = $this->request->getPost("titulo");
        $correo_usuario = $this->request->getPost("correo_usuario");
        $subtitulo = $this->request->getPost("subtitulo");
    
        



            if(! $this->validate('subirpost')){

                session()->setFlashdata('error', $this->validator->listErrors());
                return redirect()->back()->withInput();
 
            } else {


                $datosPost =  array("categoria"   =>  $categoria, 
                                "usuario"   =>  $usuario,
                                "descripcion"   =>  $descripcion,
                                "contenido"   =>  $contenido,
                                "titulo"   =>  $titulo,
                                "correo_usuario"   =>  $correo_usuario,
                                "subtitulo"   =>  $subtitulo,
                                "imagen"   =>  $datosImagen,
                            );

                $publicacion->crearPost($datosPost);
                return redirect()->to(base_url('/mypublicacion'))->with('mensaje', '1');
                   
            }
            

        }


public function publicacion($idPublicacion){
    $publicacion = new PublicacionesModels();
    $comentario = new ComentarioModels();

    $session = session();
    $mensaje = session('mensaje');

    if ($session->get('logged_in')) {
        $data['logged_in'] = TRUE;
    } else {
        $data['logged_in'] = FALSE;
    }

    // $post = $comentario->find($idPublicacion);
    // Obtener los comentarios asociados a la publicación
    $comments = $comentario->obtenerComentarios($idPublicacion);


        $datas = ["id_publicacion" => $idPublicacion];
        $datospublicacion = array(
                "public" => $publicacion->getPublicacion($datas),
                "comments" => $comments,
                "mensaje" => $mensaje
            );
        

    $vistas = view('layout/header').
            view('layout/navbar', $data).
            view('post/contenedor', $datospublicacion).
            view('layout/footer');

        return $vistas;
}

public function comentario(){
// Obtener la publicación por su id

$comentario = new ComentarioModels();

        
        $idPublicacion = $this->request->getPost('id_publicacion');
        $nombre = $this->request->getPost('nombre');
        $comentariocc = $this->request->getPost('comentario');

        $datoscomments = array(
                "id_publicacion" => $idPublicacion,
                "nombre" => $nombre,
                "comentario" => $comentariocc
        );
        $respuesta = $comentario->crearComentario($datoscomments);

        
   
    return redirect()->back()->with('mensaje', '1');

}

public function obtenerPost($idPost){
    $session = session();
    $mensaje = session('mensaje');

    if ($session->get('logged_in')) {
        $datas['logged_in'] = TRUE;
    } else {
        $datas['logged_in'] = FALSE;
    }

    $data = ["id_publicacion" => $idPost];
    $post = new PublicacionesModels();

    $respuesta = $post->getPublicacion($data);

    $mensaje = session('mensaje');

    $datos = ["datos" => $respuesta,
            "mensaje" => $mensaje];

    if($datas==TRUE and session('email')== $respuesta[0]['correo_usuario']){
    echo view("layout/header");
    echo view("layout/navbar", $datas);
    echo view("post/postedit", $datos);
    echo view("layout/footer");
    } else{
        return redirect()->to(base_url('/'));
        
    }
}

public function Actualizar(){
    $publicacion = new PublicacionesModels();


        $usuario = $this->request->getPost("usuario");
        $categoria = $this->request->getPost("categoria");
        $contenido = $this->request->getPost("contenido");
        $descripcion = $this->request->getPost("descripcion");
        $titulo = $this->request->getPost("titulo");
        $correo_usuario = $this->request->getPost("correo_usuario");
        $subtitulo = $this->request->getPost("subtitulo");

        if(! $this->validate('subirpost')){

            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();

        } else {
    
        $datosPost =  array("categoria"   =>  $categoria, 
                                "usuario"   =>  $usuario,
                                "descripcion"   =>  $descripcion,
                                "contenido"   =>  $contenido,
                                "titulo"   =>  $titulo,
                                "correo_usuario"   =>  $correo_usuario,
                                "subtitulo"   =>  $subtitulo,
                            );

        $idPost = $_POST['idPost'];

        $respuesta = $publicacion->actualizar($datosPost, $idPost);


            return redirect()->to(base_url().'/mypublicacion')->with('mensaje', '6'); 
    }
}


public function eliminarComent($id){
    $comentario = new ComentarioModels();

    $datosDelete = ["id_comentario" => $id];

    $respuesta = $comentario->eliminar($datosDelete);

    return redirect()->back()->with('mensaje','2');

}

public function eliminarPost($id){
    $post = new PublicacionesModels();

    $datosDelete = ["id_publicacion" => $id];

    $respuesta = $post->eliminar($datosDelete);

    return redirect()->back()->with('mensaje','2');

}

}