<style>
    b{
        margin:0px;
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

            #hecho input{
                left: 0px!important;
            }

            #hecho {
                margin-top: 25px;
                width: 140px;
            }
            #creacontenido{
                color: white;
                display: flex;
                justify-content: center;
                margin-top: 15px !important;
                margin-bottom: 14px !important;
                font-size: 26px;
                font-family: cursive;
                width: 300px;
                background: #9ccc51;
                border-radius: 30px;
                margin: auto;
            }

            .cajafinal .bloque-derechoedit #inputBoxSelectLabel {
                top: 15px;
            }
            .cajafinal .bloque-derechoedit .inputBoxSelect {
                margin-bottom: 15px;
                margin-top: 25px;
            }

            #aviso{
                background: #fffabd;
                    color: #948d00;
                    font-size: 1rem;
                    text-align: center;
                    width: 400px;
                    justify-content: center;
                    display: flex;
                    padding: 5px 15px;
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
                    width: auto !important;
                    margin-left: -12px !important;
                }
                #aviso{
                    width: auto;
                }
            }
    
</style>

<div class="cajafinal container">
            
            <section class="editsection">
         
                <b id= "creacontenido">Crea Contenido!</b>
                <form action="<?=base_url()?>/subir" method="post" class="contenido container" enctype="multipart/form-data">

                <?php if(!empty(session()->getFlashdata('error'))): ?>
                    <div class="msgfalse">
                       <?=session()->getFlashdata('error')?>
                    </div>
                <?php endif; ?>


                <div class="bloque-izquierdoedit">   
                    <div class="inputBox">             
                        <input type="hidden" name="usuario" value="<?=session("nombre")?>">
                        <input type="hidden" name="correo_usuario" value="<?=session("email")?>">
                    </div>
                
                    <div class="inputBox">
                    <?php if(isset($validation) && $validation->getError('titulo')){; ?><small class="errorletra"><?= $validation->getError('titulo')?></small><?php } ?>             
                        <label for="titulo" class="labelTres"><b>Titulo de la publicacion</b></label>
                        <textarea <?php if(isset($validation) && $validation->getError('titulo')){ echo 'error'; } ?>" name="titulo" id="titulo" class="titulodit" required="required" value="<?= old('titulo')?>"><?= old('titulo')?></textarea>
                    </div>
                <!-- <input type="text" name="titulo" id="titulo" >  -->

                    <div class="inputBox">             
                        <label for="contenido" class="labelDos"><b>Contenido de la publicacion</b></label>
                        <textarea name="contenido" id="contenido" cols="30" rows="10" class="contenidodit" value="<?= old('contenido')?>"><?= old('contenido')?></textarea>
                    </div>

                    
 
                
                </div>
                <div class="bloque-derechoedit"> 

                    <div class="inputBox">
                        <label for="subtitulo" class="label"><b>Subtitulo de la publicacion</b></label>        
                        <textarea name="subtitulo" id="subtitulo" class="subedit" required="required" value="<?= old('subtitulo')?>"><?= old('subtitulo')?></textarea>

                    </div>

                    <span for="categoria" id="inputBoxSelectLabel"><b>Categoria de la publicacion</b></span>

                    <div class="inputBoxSelect">             
                        <select name="categoria" placeholder="Selecciona una categoria" id="categoria" class="categoriadit" required>
                                    <option selected disabled>Selecciona el genero</option>
                                    <option value="Politica">Politica</option>
                                    <option value="Deportes">Deportes</option>
                                    <option value="Economia">Economia</option>
                                    <option value="Chevere">Chevere</option>
                                    <option value="Mascotas">Mascotas</option>
                                    <option value="Opinion">Opinion</option>
                                    <option value="Juegos">Juegos</option>
                                    <option value="Tecnologia">Tecnologia</option>
                        </select>
                    </div>

                    <p id="aviso">La imagen tener dimensiones similares a 600x335 píxeles</p>
                    <div class="inputBox">
                        <label for="imagen" class="labelimagen"><b>Inserte una imagen</b></label>
                        <input type="file" name="image" id="imagen" class="imagendit" required data-msg-required="Por favor ingresa una imagen" accept=".jpg,.png,.jpeg">
                    </div>
                    <span id="texto-archivo">No hay imagen</span>

                    <div class="inputBox">
                        <span for="descripcion" class="label"><b>Descripcion de la imagen</b></span>
                        <textarea name="descripcion" id="descripcion" class="descripdit" required="required" value="<?= old('descripcion')?>"><?= old('descripcion')?></textarea>

                    </div>
                
                </div>

                    <div id="hecho">
                        <input type="submit" value="Hecho!">
                    </div>

                    </form>
            

        </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.7.0/tinymce.min.js"></script>
<script>

      tinymce.init({
        selector: '#contenido'
      });

</script>
