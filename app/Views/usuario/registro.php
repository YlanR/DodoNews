<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url()?>/css/loginstyle.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/tipografia/tipografia.css">
    <title>Dodo ~ Registro</title>
</head>
<body>

<style>
    .error {
    border: 2px solid red;
    }
    .errorletra {
        margin-top: 0px;
        font-size: 15px;
        color: red;
        display: block;
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

                .cerrar {
                    display: none;
                }
                .check {
                    position: absolute;
                    bottom: 162px;
                    left: 3px;
                }
            }
</style>
    <section class="form-register">
        <form action="<?php echo base_url('/register')?>" method="post">
        <h4>Formulario Registro</h4> <div class="cerrar"><a href="<?=base_url()?>/"><b>X</b></a></div>

        <?php if(!empty(session()->getFlashdata('error'))): ?>
                    <div class="msgfalse">
                        <?=session()->getFlashdata('error')?>
                    </div>
                <?php endif; ?>

        <?php if(isset($validation) && $validation->getError('nombre')){; ?><small class="errorletra"><?= $validation->getError('nombre')?></small><?php } ?>
        <input required class="controls <?php if(isset($validation) && $validation->getError('nombre')){ echo 'error'; } ?>" type="text" name="nombre" id="nombre" placeholder=" Nombre y Apellido" value="<?= old('nombre')?>">
       
        <?php if(isset($validation) && $validation->getError('email')){; ?><small class="errorletra"><?= $validation->getError('email')?></smallp><?php } ?>
        <input required class="controls <?php if(isset($validation) && $validation->getError('email')){ echo 'error'; } ?>" type="email" name="email" id="" placeholder="Email" value="<?= old('email')?>">
        
        <?php if(isset($validation) && $validation->getError('genero')){; ?><small class="errorletra"><?= $validation->getError('genero')?></smallp><?php } ?>
        <select class="controls <?php if(isset($validation) && $validation->getError('genero')){ echo 'error'; } ?>" name="genero"  placeholder="Selecciona un Perfil" required>
                      <option focus disabled>Selecciona el genero</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    
                  </select>
        
        <?php if(isset($validation) && $validation->getError('password')){; ?><small class="errorletra"><?= $validation->getError('password')?></small><?php } ?>
        <input required class="controls <?php if(isset($validation) && $validation->getError('password')){ echo 'error'; } ?>" type="password" name="password" id="" placeholder="Contraseña">
        
        <?php if(isset($validation) && $validation->getError('pass_confirm')){; ?><small class="errorletra"><?= $validation->getError('pass_confirm')?></small><?php } ?>
        <input required class="controls <?php if(isset($validation) && $validation->getError('pass_confirm')){ echo 'error'; } ?>" type="password" name="pass_confirm" id="" placeholder="Confirma la Contraseña">

        <input class="check" type="checkbox" required><p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>


        <input class="botons" type="submit" value="Registrar">
        <p><a href="<?=base_url('/login')?>">¿Ya tengo Cuenta?</a></p>
        </form>
    </section>

    
<!-- <script src="<?=base_url()?>/js/registro.js"></script> -->
</body>
</html>