<style>

    
    .carousel__contenedor{
        position: relative;
        padding-top: 10px;
    }

    .carousel__anterior, .carousel__siguiente, 
    .carousel__anterior2, .carousel__siguiente2,
    .carousel__anterior3, .carousel__siguiente3{
        position: absolute;
        display: block;
        width: 30px;
        height: 30px;
        border: none;
        top: calc(50% - 35px);
        cursor: pointer;
        line-height: 30px;
        text-align: center;
        background: none;
        color: #9ccc51;
        font-size: 20px;
        opacity: 70%
    }

    .carousel__anterior:hover, .carousel__siguiente:hover, 
    .carousel__anterior2:hover, .carousel__siguiente2:hover,
    .carousel__anterior3:hover, .carousel__siguiente3:hover{
        opacity: 100%
    }

    .carousel__anterior, .carousel__anterior2, .carousel__anterior3{
        left: -30px;
    }

    .carousel__siguiente, .carousel__siguiente2, .carousel__siguiente3{
        right: -30px;
    }

    .carousel__lista, .carousel__lista2, .carousel__lista3{
        overflow: hidden;
    }

    .carousel__elemento{
        padding-right: 3%;
        width: 
    }
    #news-feed .bloque-noticias #tresbloques{
    width: 365px;
    padding-right: 5px;
    margin-right: 5px;
}
.postpost{
    flex-grow: 1;
    height: 110px;
}

.categoria{
    width: 169px;
    height: auto;
    margin: 0 0px;
    background: #9ccc51;
    text-align: center;
    font-size: 32px;
    color: white;
    padding-top: 5px;
    border-radius: 20px;
}


#news-feed p {
    flex-grow: 0 !important;
}

  </style>

<div class="cajafinal container">

<section id="news-feed" class="container">

    <!-- Noticias principales -->
    <div class="bloque-noticias">
   
    <?php foreach($publicaciones as $publicacion): ?>
        <div class="bloque-izquierda">
                <div class="categoria" id="New"> <b>Lo mas nuevo</b> </div>
        <article>
                        <h1><a href="<?=base_url()?>/contenido/<?=$publicacion["id_publicacion"] ?>"><?=$publicacion["titulo"] ?></a></h1>
                        <p><?=$publicacion["subtitulo"] ?></p>
                        
                        <figure>
                            <a href="<?=base_url()?>/contenido/<?=$publicacion["id_publicacion"] ?>"><img src="<?=base_url()?>/uploads/<?=$publicacion["imagen"] ?>"></a>
                            <figcaption>
                               <span>Por <?=$publicacion["usuario"] ?></span>
                            </figcaption>
                        </figure>                       
                    </article>

        </div>
        <?php endforeach; ?>



        <div class="bloque-derecha">
    <?php foreach($dos as $doss): ?>
            
            <article>
                <h2><a href="<?=base_url()?>/contenido/<?=$doss["id_publicacion"] ?>"><?=$doss["titulo"] ?></a></h2>
                
                <figure>
                    <a href="<?=base_url()?>/contenido/<?=$doss["id_publicacion"] ?>"><img src="<?=base_url()?>/uploads/<?=$doss["imagen"] ?>" ></a>
                    <figcaption>
                       <span>Por <?=$doss["usuario"] ?></span>
                    </figcaption>
                </figure>                       
           </article>

        <?php endforeach;?>
        </div>
    </div>

    <!-- Dos bloques de noticias -->
    <div class="bloque-noticias">
    <?php foreach($dosdos as $dosss): ?>
        <div class="block">
            <article id="dosbloques">
                <h2><a href="<?=base_url()?>/contenido/<?=$dosss["id_publicacion"] ?>"><?=$dosss["titulo"] ?></a></h2>
                
                <figure>
                    <a href="<?=base_url()?>/contenido/<?=$dosss["id_publicacion"] ?>"><img src="<?=base_url()?>/uploads/<?=$dosss["imagen"] ?>"></a>
                    <figcaption>
                       <span>Por <?=$dosss["usuario"] ?></span>
                    </figcaption>
                </figure>                       
            </article>
        </div>
        <?php endforeach;?>

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
    </div>
   

    <!-- Banner JavaTech -->
    <div class="bannerjava">
        <article id="javatech">
            <img src="img/javatech.png" alt="javatech">
        </article>
    </div>

    <style>
     @media (max-width:767px){
         .carousel #carrusel{
             font-size:12px;
         }
        .carousel #carruselfigure {
            width: 140px !important;
            height: 80px!important;
        }
        .carousel #carruselfig{
                padding: 5px;
                bottom: 12px;
                left: 1px;
                font-size: 0.9em;
        }
        .carousel__elemento {
            padding-right: 0px;
        }
     }
    </style>
    <!-- Cuatro bloques de noticias -->
    

<!-- Tres bloques de noticias -->
  


    <div class="carousel">

    <div class="categoria"> Politica</div>

        <div class="carousel__contenedor">
            <button aria-label="Anterior" class="carousel__anterior">
            <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="carousel__lista">
            <?php foreach($politica as $polit): ?>
                <div class="carousel__elemento">
                    <div class="bloque-noticias">
                            <div class="blocktres">
                                <article id="tresbloques">
                                    <h2 class="postpost" id="carrusel"><a href="<?=base_url()?>/contenido/<?=$polit["id_publicacion"] ?>"><?=$polit["titulo"] ?></a></h2>
                                    <figure>
                                        <a href="<?=base_url()?>/contenido/<?=$polit["id_publicacion"]?>"><img id="carruselfigure" src="<?=base_url()?>/uploads/<?=$polit["imagen"] ?>"  ></a>
                                        <figcaption id="carruselfig">
                                        <span>Por <?=$polit["usuario"]?></span>
                                        </figcaption>
                                    </figure>                       
                                </article>
                            </div>
                    </div>
                </div>
                <?php endforeach; ?>
            
            </div>

            <button aria-label="Siguiente" class="carousel__siguiente">
            <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div role="tablist" class="carousel__indicadores"></div>
    </div>

  

    <div class="carousel">
    <div class="categoria"> Deportes</div>
        <div class="carousel__contenedor">
            <button aria-label="Anterior" class="carousel__anterior2">
            <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="carousel__lista2">
            <?php foreach($deportes as $deport): ?>
                <div class="carousel__elemento">
                    <div class="bloque-noticias">
                        <div class="blocktres">
                            <article id="tresbloques">
                                <h2 class="postpost" id="carrusel"><a href="<?=base_url()?>/contenido/<?=$deport["id_publicacion"] ?>"><?=$deport["titulo"] ?></a></h2>
                                <figure>
                                    <a href="<?=base_url()?>/contenido/<?=$deport["id_publicacion"]?>"><img id="carruselfigure" src="<?=base_url()?>/uploads/<?=$deport["imagen"] ?>"  ></a>
                                    <figcaption id="carruselfig">
                                    <span>Por <?=$deport["usuario"]?></span>
                                    </figcaption>
                                </figure>                       
                            </article>
                        </div>
                    </div>

                </div>
                <?php endforeach; ?>
            
            </div>

            <button aria-label="Siguiente" class="carousel__siguiente2">
            <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div role="tablist" class="carousel__indicadores2"></div>
    </div>

    <div class="carousel">
    <div class="categoria"> Economia</div>
        <div class="carousel__contenedor">
            <button aria-label="Anterior" class="carousel__anterior3">
            <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="carousel__lista3">
            <?php foreach($economia as $econo): ?>
                <div class="carousel__elemento">
                    <div class="bloque-noticias">
                        <div class="blocktres">
                            <article id="tresbloques">
                                <h2 class="postpost" id="carrusel"><a href="<?=base_url()?>/contenido/<?=$econo["id_publicacion"] ?>"><?=$econo["titulo"] ?></a></h2>
                                <figure>
                                    <a href="<?=base_url()?>/contenido/<?=$econo["id_publicacion"]?>"><img id="carruselfigure" src="<?=base_url()?>/uploads/<?=$econo["imagen"] ?>"  ></a>
                                    <figcaption id="carruselfig">
                                    <span>Por <?=$econo["usuario"]?></span>
                                    </figcaption>
                                </figure>                       
                            </article>
                        </div>
                    </div>

                </div>
                <?php endforeach; ?>
            
            </div>

            <button aria-label="Siguiente" class="carousel__siguiente3">
            <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div role="tablist" class="carousel__indicadores3"></div>
    </div>

   

</section>

<div class="banner2">
    <article >
        <img src="img/reysport.jpg" width="300" height="590" alt="reyrey">
    </article>
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
<script src="<?=base_url()?>/js/main.js"></script>


<script>
window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista'), {
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: '.carousel__indicadores',
        arrows: {
            prev: '.carousel__anterior',
            next: '.carousel__siguiente'
        }
    });
});

window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista2'), {
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: '.carousel__indicadores2',
        arrows: {
            prev: '.carousel__anterior2',
            next: '.carousel__siguiente2'
        }
    });
});

window.addEventListener('load', function(){
    new Glider(document.querySelector('.carousel__lista3'), {
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: '.carousel__indicadores3',
        arrows: {
            prev: '.carousel__anterior3',
            next: '.carousel__siguiente3'
        }
    });
});



</script>