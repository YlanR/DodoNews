<?php
$total = count($dos);

?>
<script>
        function eliminar(){
            var respuesta = confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
        
    </script>
<div class="cajafinal container">

    <section id="news-feed" class="container">

    <div class="label2">
                <span><b><?=session('nombre')?></b> ></span>
            </div>

    <style>
        #news-feed .noticiasmypost{
        display: grid;
        grid-template-columns: auto auto auto;
        width: 100%;
        margin-top: 10px;
        gap: 10px;
    }

    #news-feed figure img {
        width: 365px;
    }

    #news-feed article {
        width: 365px;
    }

    .label2 {
        color: #9ccc51;
        position: relative;
        left: 110px;
        bottom: 5px;
        font-size: 24px;
        font-family: sans-serif;
        margin-bottom: 10px;
        margin-top: 20px;
    }

    #nadaa{
        font-size: 39px !important;
        font-family: sans-serif;
        color: gray;
        margin: 15px 15px;
        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    #cerrar2{
        position: absolute;
    right: 10px;
    top: 15px;
    height: 20px;
    width: 20px;
    background: #5d5b5b;
    border-radius: 50%;
    padding: 10px 5px 6px 9px;
    }
    #cerrar2 a{
    text-decoration: none;
}

#editar2{
        position: absolute;
    right: 10px;
    top: 60px;
    height: 20px;
    width: 20px;
    background: #5d5b5b;
    border-radius: 50%;
    padding: 10px 5px 6px 9px;
    }

figure{
    position: relative;
}

    </style>

    <?php if($total > 0){?>
        <!-- Dos bloques de noticias -->
        <div class="noticiasmypost">
        <?php foreach($dos as $doss): ?>
            <div class="block">
                <article id="tresbloques">
                
                    <h2><a href="<?=base_url()?>/contenido/<?=$doss["id_publicacion"] ?>"><?=$doss["titulo"] ?></a></h2>
                    
                    <figure>
                    <?php if(session('nombre') == $doss["usuario"]) { ?><div id="cerrar2"><a href="<?=base_url()?>/eliminarpost/<?=$doss["id_publicacion"]?>" onclick="return eliminar()"><i class="fa-solid fa-trash" style="color: #9ccc51;"></i></a></div><?php } ?>
                    <?php if(session('nombre') == $doss["usuario"]) { ?><div id="editar2"><a href="<?=base_url()?>/editarpost/<?=$doss["id_publicacion"]?>"><i class="fa-solid fa-pen-to-square" style="color: #9ccc51;"></i></a></div><?php } ?>

                        <a href="<?=base_url()?>/contenido/<?=$doss["id_publicacion"] ?>"><img src="<?=base_url()?>/uploads/<?=$doss["imagen"] ?>"></a>
                        <figcaption>
                        <span>Por <?=$doss["usuario"] ?></span>
                        </figcaption>
                    </figure>                       
                </article>
            </div>
            <?php endforeach;?>

    <?php } else{?>

        <p id="nadaa">! No haz publicado tu primera noticia !</p>

    <?php } ?>



            <!-- <div class="block">
                <article>
                    <h2><a href="<?=base_url()?>/post">La universida Maritima del caribe sigue sin profesores por falta del comedor</a></h2>
                    
                    <figure>
                        <a href="<?=base_url()?>/post"><img src="img/muestra.jpg"></a>
                        <figcaption>
                        <span>Por Ylan Rizo</span>
                        </figcaption>
                    </figure>                       
                </article>
            </div> -->
        <!-- </div> -->
    


    </section>
    
        <!-- Banner JavaTech -->
        <div class="bannerjava">
            <article id="javatech">
                <img src="img/javatech.png" alt="javatech">
            </article>
        </div>

<!-- <div class="banner2">
    <article >
        <img src="img/reysport.jpg" width="300" height="590" alt="reyrey">
    </article>
</div> -->

</div>