</main>

<br>

<footer class="pie">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="<?=base_url()?>/">
                        <img src="<?=base_url()?>/img/logododo.png" alt="">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2> SOBRE NOSOTROS </h2>
                <p>Somos una comunidad de escritores independientes que se dedica a crear noticias para nada relevantes y mucho menos trascendentales de la actualidad, utilizando un poco de satira.</p>
                <p> Nuestro objetivo principal es divertir y entretener, aprovechando este espacio libre de desarrollo.</p>
            </div>
            <div class="box">
                <h2> SIGUENOS </h2>
                <div class="redes">
                    <a href="https://instagram.com/dodonews2023?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/dodonews2023"><i class="fa fa-twitter" target="_blank"></i></a>
                    <a href="#"><i class="fa fa-facebook" target="_blank"></i></a>
                </div>
            </div>
        </div>

        <div class="grupo-2">
            <small><strong>Copyright &copy; 2021-2023 <a href="#">Ylan Rizo</a>.</strong> Todos los derechos
                reservados.</small>
        </div>
    </footer>
    <!--CIERRA PIE DE PAGINA -->
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?=base_url()?>/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="<?=base_url()?>/js/main.js"></script>


<script>

  (function(){
    let mensaje = <?=$mensaje?>;
  
  if(mensaje == '1'){
  Swal.fire(
    'Buen Trabajo!',
    'Se ha agregado EXITOSAMENTE!',
    'success'
  )
  } 
  
  else if(mensaje == '0'){
  Swal.fire({
    icon: 'error',
    title: 'Ha habido un problema..',
    text: 'Revisa los datos ingresador!',
  })
  } 
  
  else if(mensaje == '2'){
    Swal.fire(
        'Excelente!',
        'Lo haz eliminado correctamente!',
        'success'
    )
  }

  else if(mensaje == '3'){
    const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'success',
          title: 'Ingresaste con EXITOO.!!'
        })
  }
  else if(mensaje == '4'){
  Swal.fire(
    'Buen Trabajo!',
    'Te haz registrado EXITOSAMENTE!',
    'success'
  )

  }  
  else if(mensaje == '5'){
    const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'success',
          title: 'Saliste del sistema!!'
        })
  }

  else if(mensaje == '6'){
    Swal.fire(
        'Excelente!',
        'Lo haz modificado EXITOSAMENTE!!',
        'success'
    )
  }


  
  })();
</script>

</body>
</html>