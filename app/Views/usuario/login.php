<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>/css/loginstyle.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/tipografia/tipografia.css">
    <title>Dodo ~ Login</title>
</head>
<body>

    <section class="form-register">
        <form action="<?php echo base_url('/login')?>" method="post">
        <h4>Iniciar Sesion</h4> <div class="cerrar2"><a href="<?=base_url()?>/"><b>X</b></a></div>
        
        <style>
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

            @media (max-width:767px){
                .form-register {
                    padding: 30px 15px;
                    width: auto;
                    margin-left: 5px;
                    margin-right: 5px;
                }
                .form-register h4 {
                    width: auto;
                    justify-content: center;
                    display: flex;
                }

                .cerrar2 {
                    display: none;
                }
            }

        </style>

        <?php if(session('msgtrue')): ?>
            <div class="msgtrue">
                <?=session('msgtrue')?>
            </div>
        <?php endif; ?>
        <?php if(session('msgfalse')): ?>
            <div class="msgfalse">
                <?=session('msgfalse')?>
            </div>
        <?php endif; ?>

        <input class="controls" type="email" name="email" id="" placeholder="Email" value="<?=old('email')?>" required>
        <input class="controls" type="password" name="password" id="" placeholder="Contraseña" required>

        <p>¿Quieres recordar tu <a>Contraseña</a>?</p>

        <!-- <input  type="submit" > -->
        <input class="botons" type="submit" value="Inicia Sesion">
        <p>Registrate dando <a href="<?=base_url('/registro')?>">CLICK AQUÍ</a></p>
        </form>
    </section>

</body>
</html>