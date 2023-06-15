<?php


?>

<div class="cajafinal container">

    <section id="news-feed" class="container">

    <div class="label2">
                <span><b>Busqueda: <?=$_POST['buscar']?></b> </span>
            </div>

    <style>
        #news-feed .noticiasmypost{
        display: grid;
        grid-template-columns: auto auto auto;
        width: 100%;
        margin-top: 10px;
    }

    #news-feed figure img {
        width: 365px !important;
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

    <?php if(isset($busqueda)){?>
        <!-- Dos bloques de noticias -->
        <div class="noticiasmypost">

    
    <?php foreach($busqueda as $ases): ?>
        <div class="block">
            <article id="tresbloques">         
                <h2><a href="<?=base_url()?>/contenido/<?=$ases['id_publicacion'] ?>"><?=$ases['titulo'] ?></a></h2>       
                <figure>
                    <a href="<?=base_url()?>/contenido/<?=$ases['id_publicacion'] ?>"><img src="<?=base_url()?>/uploads/<?=$ases['imagen'] ?>"></a>
                    <figcaption>
                    <span>Por <?=$ases['usuario'] ?></span>
                    </figcaption>
                </figure>                       
            </article>
        </div>
    <?php endforeach;?>

    
<?php } else { ?>
<p id="nadaa">! No se encuentra lo que estas buscando !</p>
    <?php } ?>

    


    </section>
    
        <!-- Banner JavaTech -->
        <div class="bannerjava">
            <article id="javatech">
                <img src="img/javatech.png" alt="javatech">
            </article>
        </div>



</div>