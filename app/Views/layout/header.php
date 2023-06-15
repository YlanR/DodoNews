<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">    	
    <link rel="icon" href="<?=base_url()?>/img/favicon-32x32.png" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/tipografia/tipografia.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <script src="<?=base_url()?>/sweetalert2/dist/sweetalert2.min.css"></script>

    <link rel="stylesheet" href="<?=base_url()?>/css/styles.css?<?=date('Y-m-d H:i:s')?>"">
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="<?=base_url()?>/js/js.js"></script>
    <script src="https://kit.fontawesome.com/3cc90d5c27.js" crossorigin="anonymous"></script>


    <title>DodoNews</title>
</head>
<body>



<div class="principal">

    <header>

        <!-- LOGO -->
            
            <div class="containerheader container">
                
                <div class="cabecera2">
                    <div class="redes">
                   <p>   </p> 
                    </div>
                </div>

                <figure class="cabecera" id="dodo">
                    <img src="<?=base_url()?>/img/logododo.png" width="505" height="115" alt="">
                    
                    
                    
                </figure>
                
               
                <div class="cabecera1">
                    <form action="<?php echo base_url('/buscar')?>" method="post">
                    <div class="lupa">
                        <img id="lupa" src="<?=base_url()?>/img/aaaaa.png" width="100" height="150" alt="">
                        <input type="text" name="buscar" id="buscar">
                    </div>
                    </form>
                </div>

        </div>

        <!-- CIERRA LOGO -->


