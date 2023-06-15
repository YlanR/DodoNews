<?php
$idPost = $datos[0]['id_publicacion'];
// $categoria    = $post[0]['categoria'];
$titulo   = $datos[0]['titulo'];
$descripcion   = $datos[0]['descripcion'];
$subtitulo     = $datos[0]['subtitulo'];
$imagen  = $datos[0]['imagen'];
$contenido      = $datos[0]['contenido'];
$usuario  = $datos[0]['usuario'];
$correo_usuario      = $datos[0]['correo_usuario'];

?>

<style>
    b{
        margin:0;
    }

    #muestra{
        display:block;
        margin-top: -20px;
        margin-bottom: 27px;
    }

    #creacontenido{
                color: white;
                display: flex;
                justify-content: center;
                margin-top: 15px !important;
                font-size: 26px;
                font-family: cursive;
                width: 300px;
                background: #9ccc51;
                border-radius: 30px;
                margin: auto;
                margin-bottom: 15px;
            }

    select:required {
    border: 1px red solid;
}
    #hecho input{
                left: 0px!important;
            }

            #hecho {
                margin-top: 25px;
                width: 140px;
            }

    .msgtrue{
                background: #effaf5;
                color: #257953;
                padding: 10px 15px;
                margin-bottom: 10px;
                font-size: 1rem;
                border-color: #48c78e;
                border-radius: .375em;
            }

            .msgfalse{
                background: #feecf0;
                color: #cc0f35;
                padding: 10px 15px;
                margin-bottom: 10px;
                font-size: 1rem;
                border-color: #f14668;
                border-radius: .375em;
            }

            @media (max-width:450px){
                .msgfalse {
                    background: #feecf0;
                    color: #cc0f35;
                    padding: 10px -4px !important;
                    margin-bottom: 10px;
                    font-size: 1rem;
                    border-color: #f14668;
                    border-radius: .375em;
                    width: 400px !important;
                    margin-left: -12px !important;
                }
            }
  
</style>
<script>
    document.querySelector('#categoria').addEventListener('change', function() {
    // El valor de required es igual a la propiedad checked del checkbox
    document.querySelector('#categoria').required = this.checked;
});
</script>

<div class="cajafinal container">
            
            <section class="editsection">
            
                 <b id= "creacontenido">Crea Contenido!</b>
                <form action="<?=base_url()?>/editarpost" method="post" class="contenido container" enctype="multipart/form-data">

                 <?php if(!empty(session()->getFlashdata('error'))): ?>
                    <div class="msgfalse">
                        <?=session()->getFlashdata('error')?>
                    </div>
                <?php endif; ?>

                <div class="bloque-izquierdoedit">   
                    <div class="inputBox">             
                        <input type="hidden" name="usuario" value="<?=$usuario?>">
                        <input type="hidden" name="correo_usuario" value="<?=$correo_usuario?>">
                        <input type="hidden" name="idPost" value="<?=$idPost?>">
                    </div>
                
                    <div class="inputBox">
                    <?php if(isset($validation) && $validation->getError('titulo')){; ?><small class="errorletra"><?= $validation->getError('titulo')?></small><?php } ?>             
                        <label for="titulo" class="labelTres"><b>Titulo de la publicacion</b></label>
                        <textarea <?php if(isset($validation) && $validation->getError('titulo')){ echo 'error'; } ?>" name="titulo" id="titulo" class="titulodit" required="required"><?=$titulo?></textarea><br><br>
                    </div>
                <!-- <input type="text" name="titulo" id="titulo" >  -->

                    <div class="inputBox">             
                        <label for="contenido" class="labelDos"><b>Contenido de la publicacion</b></label>
                        <textarea name="contenido" id="contenido" cols="30" rows="10" class="contenidodit"><?=$contenido?></textarea><br><br>
                    </div>

                    
 
                
                </div>
                <div class="bloque-derechoedit"> 

                    <div class="inputBox">
                        <label for="subtitulo" class="label"><b>Subitulo de la publicacion</b></label>        
                        <textarea name="subtitulo" id="subtitulo" class="subedit" required="required"><?= $subtitulo?></textarea><br><br>

                    </div>

                    <span for="categoria" id="inputBoxSelectLabel"><b>Categoria de la publicacion</b></span>

                    <div class="inputBoxSelect">             
                        <select name="categoria" placeholder="Selecciona una categoria" id="categoria" class="categoriadit" required>
                                    <option value="" selected disabled>Selecciona el genero</option>
                                    <option value="Politica">Politica</option>
                                    <option value="Deportes">Deportes</option>
                                    <option value="Economia">Economia</option>
                                    <option value="Chevere">Chevere</option>
                                    <option value="Mascotas">Mascotas</option>
                                    <option value="Opinion">Opinion</option>
                                    <option value="Juegos">Juegos</option>
                                    <option value="Tecnologia">Tecnologia</option>
                        </select><br><br>
                    </div>

                    <div class="inputBox" id="muestra">
                        <!-- <label for="imagen" class="labelimagen"><b>Coloque una imagen</b></label>
                        <input type="file" name="image" id="imagen" class="imagendit" value="<?=$imagen?>"><br><br> -->
                        <img id="muestra" src="<?=base_url()?>/uploads/<?=$imagen?>" width="180" alt="">

                    </div>

                    <div class="inputBox">
                        <span for="descripcion" class="label"><b>Descripcion de la imagen<b></b></span>
                        <textarea name="descripcion" id="descripcion" class="descripdit" required="required" ><?= $descripcion?></textarea>
                    </div>
                
                </div>

                    <div class="hecho" id="hecho">
                        <input type="submit" value="Hecho!"><br><br>
                    </div>

                    </form>

            </section>

        </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js"></script>
<script>

      tinymce.init({
        selector: '#contenido'
      });

</script>
