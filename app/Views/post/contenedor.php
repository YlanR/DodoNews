<?php
$id_publicacion = $public[0]['id_publicacion'];
$titulo = $public[0]['titulo'];
$subtitulo = $public[0]['subtitulo'];
$categoria = $public[0]['categoria'];
$usuario = $public[0]['usuario'];
$email = $public[0]['correo_usuario'];
$fecha = $public[0]['fecha'];
$descripcion = $public[0]['descripcion'];
$contenido = $public[0]['contenido'];
$imagen= $public[0]['imagen'];
// $genero = $public[0]['genero'];

?>

<script>
        function eliminar(){
            var respuesta = confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
        
    </script>

<div class="cajafinal container">

    
    <article id="post" class="container">

   
        <div class="label">
            <span><b><?=$categoria?></b> ></span>
        </div>
        <h1>
        <?=$titulo?>
        </h1>
        <h2>
        <?=$subtitulo?>
        </h2>

    

        <div class="autor">
       
            <img src="<?=base_url()?>/img/avatar.png" alt="imagen">            
            <div class="info">
                <div class="nombre">Por <span><?=$usuario?></span></div>
                <div class="fecha"><?=$fecha?></div>
                <div class="email"><?=$email?></div>
            </div>

        </div>
<style>
    #post .compartir{
    padding: 0;
}
#post .redes a{margin: 0 0px; width: 20px;
    display: contents;}
#post .redes .linkding{ color: rgb(34, 197, 34)}
#post .redes .insta{ color: rgb(67, 190, 228)}
</style>
      <div class="redes">
            <p class="compartir">Compartir en: </p>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?=base_url()?>/contenido/<?=$id_publicacion?>" target="_blank"><i class="fa fa-facebook fbk" > <b class="emoRedes">Facebook</b></i></a>
            <a href="https://api.whatsapp.com/send?text=<?=base_url()?>/contenido/<?=$id_publicacion?>" target="_blank"><i class="fa fa-whatsapp linkding"> <b class="emoRedes">WhatsApp</b></i></a>
            <a href="https://twitter.com/intent/tweet?text=<?=base_url()?>/contenido/<?=$id_publicacion?>" target="_blank"><i class="fa fa-twitter insta"> <b class="emoRedes">Twitter</b></i></a>
            
        </div>

        <figure>
            <img src="<?=base_url()?>/uploads/<?=$imagen?>">
            <figcaption>
            <?=$descripcion?>
            </figcaption>
        </figure>     

        <p class="parrafo-post">
        <?=$contenido?>
          </p>


    </article>


        <div class="banner">
            <article >
            <img src="<?=base_url()?>/img/reysport.jpg" width="300" height="590" alt="reyrey">
            </article>
        </div>

    <!-- Banner JavaTech -->
        <div class="bannerjava">
                <article id="javatech">
                    <img src="<?=base_url()?>/img/javatech.png" alt="">
                </article>
        </div>

        
    <!-- <div class="bannerrrj">
                <article>
                    <img src="<?=base_url()?>/img/rrj.png" width="300" height="250" alt="">
                </article>
    </div> -->

<style>

.comments-box {
    padding: 20px;
    background-color: #e7e7e0;
    border-radius: 20px;
}

.comments-box h3 {
    margin-top: 0;
    margin-left: 485px;
    font-size: 25px;
    color: #9ccc51;
    border: 1px solid #9ccc51;
    border-radius: 50px;
    width: 170px;
    background: white;
    text-align: center;
    font-family: sans-serif;

}

input{
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: none;
    border-radius: 5px;
    margin-bottom: 10px;
    margin-top: 10px;
    font-family: sans-serif;

}

label{
    margin-bottom: 5px;
    font-family: sans-serif;

}

textarea {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: none;
    border-radius: 5px;
    margin-bottom: 10px;
    margin-top: 10px;
    font-family: sans-serif;

}

button {
    background-color: #9ccc51;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    margin-bottom: 15px;
}

button:hover {
    background-color: #6b8e23;
}

.comment {
    background-color: white;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    text-decoration: none;
}

.comment-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}

.comment-header h4 {
    margin-top: 0;
    margin-bottom: 5px;
    font-family: sans-serif;
    position: relative;
    left: -300px;
}

#anuncio {
    margin-top: 10px;
    margin-bottom: 15px;
    font-size: 18px;
    margin-left: 355px;
}

#anuncio a{
    text-decoration: none;
    color: #9ccc51;
    font-family: sans-serif;

}

.comment-header span {
    font-size: 0.9rem;
    color: #666;
    font-family: sans-serif;
    position: absolute;
    right: 55px;

}

.comment-text {
    margin-top: 5px;
    font-size: 1.1rem;
}

.comment{
    text-decoration: none;
    position: relative;
}

p{
    font-family: sans-serif;

}

.cerrar2{
   float: right;
    margin-right: 15px;
}

.cerrar2 a{
    text-decoration: none;
    color: #9ccc51;
    cursor: pointer;
}


</style>


    <div class="comments-box">
                <h3>Comentarios</h3>

                <?php if($logged_in){?>
                <form action="<?=base_url('/comentario')?>" method="post">
                    <input type="hidden" name="id_publicacion" value="<?=$id_publicacion?>">

	                <label for="nombre"><b>Usuario:</b></label> <br>
                    <input type="text" name="nombre" value="<?= session('nombre')?>" readonly><br>

	                <label for="comentario"><b>¿Que piensas del Post?:</b></label> <br>
                    <textarea name="comentario" placeholder="Escribe un comentario"></textarea><br>

                    <button type="submit">Enviar</button>
                </form>
                <?php } else{?>
                    <h4 id="anuncio">Debes <a href="<?=base_url('/registro')?>">REGISTRARTE</a> e <a href="<?=base_url('/login')?>">INICIAR SESION</a> para comentar</h4>
                <?php } ?>


                <?php foreach ($comments as $comment => $valor): ?>
                <ul class="comment-list">
                    <li class="comment">
                    <?php if(session('nombre') == $valor->nombre) { ?><div class="cerrar2"><a href="<?=base_url()?>/eliminar/<?=$valor->id_comentario?>" onclick="return eliminar()"><b>X</b></a></div><?php } ?>
                        <div class="comment-header">
                            <h4><?=$valor->nombre?></h4>
                            <span><?=$valor->fecha?></span>
                        </div>
                        <p class="comment-text">
                        <?=$valor->comentario?>
                        </p>
                    </li>
                    
                </ul>
    <?php endforeach; ?>

            </div>

    </div>
</div>

