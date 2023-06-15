<?php
$total = count($politica);

?>
<div class="cajafinal container">

<section id="news-feed" class="container">

<div class="label2">
            <span><b>Politica</b> ></span>
        </div>

<style>
    #news-feed .noticiasmypost{
    display: grid;
    grid-template-columns: auto auto auto;
    width: 100%;
    margin-top: 10px;
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

 #news-feed .noticiasmypost{
        display: grid;
        grid-template-columns: auto auto auto;
        margin-top: 10px;
        gap: 5px;
    }

    #news-feed article {
        width: 375px;
    }

@media (max-width:767px){

    #news-feed .noticiasmypost{
        width: 100%;
    }

    #news-feed #tresbloques figure img {
        width: 100%;
        }

}

</style>

<div class="noticiasmypost">

<?php if($total > 0){?>

    <?php foreach($politica as $politicas): ?>
        <div class="block">
            <article id="tresbloques">
                <h2><a href="<?=base_url()?>/contenido/<?=$politicas["id_publicacion"] ?>"><?=$politicas["titulo"] ?></a></h2>
                
                <figure>
                    <a href="<?=base_url()?>/contenido/<?=$politicas["id_publicacion"] ?>"><img src="<?=base_url()?>/uploads/<?=$politicas["imagen"] ?>"></a>
                    <figcaption>
                       <span>Por <?=$politicas["usuario"] ?></span>
                    </figcaption>
                </figure>                       
            </article>
        </div>
        <?php endforeach;?>
        <br>

   <?php } else{?>

<p id="nadaa">! No hay contenido en esta seccion !</p>

<?php } ?>
 

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