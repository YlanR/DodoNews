
        <!-- NAVBAR -->

        <div id="noti"><i>"<b>DODO</b>nde la noticia no es veraz ni realista"</i></div>
        <nav class="barramenu container">
                <div class="logo22">
                    <img src="<?=base_url()?>/img/cabezalogo.png" alt="">
                    <p class="dodododo"><strong>DODO</strong></p><p class="newss">NEWS</p>
                </div>
             <ul id="listaul">         
                <li>
                    <a href="<?=base_url()?>">Inicio</a>
                </li>
                <li>
                    <a href="<?=base_url('/politica')?>">Politica</a>
                </li>
                <li>
                    <a href="<?=base_url('/deporte')?>">Deportes</a>
                </li>
                <li>
                    <a href="<?=base_url('/economia')?>">Economia</a>
                </li>
                <li>
                    <a href="<?=base_url('/chevere')?>">Chevere</a>
                </li>
                <li>
                    <a href="<?=base_url('/mascotas')?>">Mascotas</a>
                </li>
                <li>
                    <a href="<?=base_url('/opinion')?>">Opinion</a>
                </li>
                <li>
                    <a href="<?=base_url('/juegos')?>">Juegos</a>
                </li>
                <li>
                    <a href="<?=base_url('/tecnologia')?>">Tecnologia</a>
                </li>
            </ul>
        
            <?php
                if($logged_in) {
                ?>
                    <style>
                        .miDiv, .miDiv3 {
                            display: none;
                        }
                    </style>
                <?php } else {?>

                    <style>
                        .miDiv2 {
                            display: none;
                            position: relative;

                        }
                    </style>
                <?php } ?>


            <div class="miDiv" id="personal">
                <ul class="personal">
                        <li>
                        <a href="<?=base_url('/registro')?>">Registrate</a>
                        </li>
                        <li>
                        <a href="<?=base_url('/login')?>"><i id="login" class="fa-solid fa-user"></i></a>
                        </li>
                </ul>
            </div>

            <style>
     
                #persoonal{
                    list-style: none;
                    display: flex;
                    justify-content: space-around;
                }

                .ae{
                    display: block;
                    padding: 15px 20px;
                    margin-left: 0px;
                    color: #000;
                    /* margin-left: 140px; */
                    cursor: pointer;
                }

                #New{
                    width: 220px;
                    margin: 15px 0px 0px 0px;
                    padding: 5px;
                }

                .ae:hover{
                    background-color: #9ccc51;
                }

                #persoonal .lilist{
                    list-style: none;
                    color: #000;
                }
                #persoonal .lilist::marker{
                    text-decoration: none;
                    list-style: none;
                    position: relative;
                }
                ul{list-style: none;}

                .miDiv2 .blockul{
                    position: relative;
                }

                .menuUl{
                    position: absolute;
                    display: none;
                    list-style: none;
                    width: 140px;
                    /* background-color: rgb(0, 0, 0, .5); */
                    background-color: #d3d3d3;
                    color: rgb(42, 42, 42);
                    padding-left: 0;
                    border-radius: 8px;
                    border: 1px solid #9ccc51;
                    top: -50px;
                    right: 40px !important;
                    text-decoration: none;
                    list-style: none;
                    text-align: center;
                    
                }

                .menuUl #p{
                    /* justify-items: center; */
                    padding-left: 13px;
                    font-size: 18px;
                }

                .lilist:hover .menuUl {
                display: block;
                    z-index: 2;
                }

                .lilist:hover{
                background-color: #9ccc51;
                } 

                .menuUl li .a{
                    display: block;
                    color: #000;
                    /* padding: 15px 40px 15px 20px; */
                    width: 115px;
                    height: 40px;
                    padding-top: -1px;
                    margin-left: -5px;
                    text-decoration: none;
                }
                .menuUl li .a:hover{
                    color: white;
                }

                #nombre{
                    font-size: 19px;
                    background: gray;
                    padding: 3px 8px 3px 8px;
                    border-radius: 50px;
                    color: #9ccc51;
                    margin-left: auto;
                }

                @media (min-width:767px) {
                    #catete, .menuCate, .miDiv3, #inicio{
                    display: none;
                }


            </style>

            <div class="miDiv3" id="personal2">
                <ul id="personaal">
                    <li class="lilist">
                        <a class="ae" ><i class="fa-solid fa-bars" style="color: #0d0d0d;"></i></a>
                        <div class="blockul">
                            <ul class="menuUl">
                                <li class="lilist"><a class="a" id="inicio" href="<?=base_url()?>">Inicio</a></li>
                                <li class="lilist"><a class="a" id="catete"><b>< </b>Categorias</a>
                                <ul class="menuCate">
                                    <li>
                                        <a href="<?=base_url('/politica')?>">Politica</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/deporte')?>">Deportes</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/economia')?>">Economia</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/chevere')?>">Chevere</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/mascotas')?>">Mascotas</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/opinion')?>">Opinion</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/juegos')?>">Juegos</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/tecnologia')?>">Tecnologia</a>
                                    </li>
                                </ul></li>                       
                                
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="miDiv2" id="personal2">
                <ul id="personaal">
                    <li class="lilist">
                        <a class="ae" ><i class="fa-solid fa-bars" style="color: #0d0d0d;"></i></a>
                        <div class="blockul">
                            <ul class="menuUl">
                                <li class="lilist"><a class="a" id="nombre"><?=session('nombre')?></a></li>
                                <li class="lilist"><a class="a" href="<?=base_url()?>">Inicio</a></li>
                                <li class="lilist"><a class="a" id="catete"><b>< </b>Categorias</a>
                                <ul class="menuCate">
                                    <li>
                                        <a href="<?=base_url('/politica')?>">Politica</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/deporte')?>">Deportes</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/economia')?>">Economia</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/chevere')?>">Chevere</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/mascotas')?>">Mascotas</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/opinion')?>">Opinion</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/juegos')?>">Juegos</a>
                                    </li>
                                    <li>
                                        <a href="<?=base_url('/tecnologia')?>">Tecnologia</a>
                                    </li>
                                </ul></li>
                                <li class="lilist"><a class="a" href="<?=base_url('/subir')?>">Subir Post</a></li>
                                <li class="lilist"><a class="a" href="<?=base_url('/mypublicacion')?>">Mis Noticias</a></li>
                                <li class="lilist"><a class="a" href="<?=base_url('/salir')?>">Salir</a></li>
                                
                                
                                
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
           
        </nav>

        <!-- CIERRA NAVBAR -->

    </header>

    <main>

   