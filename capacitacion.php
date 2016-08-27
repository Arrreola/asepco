<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asepco Capacitaciones</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style-capacitacion.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js"></script>
    <script src="js/main.js"></script>

  </head>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <!--NAVBAR INCLUDE-->
    <?php include 'navbar-blue.php';
    ?>
    <?php include 'capacitacion-list-2.php'; ?>
<<<<<<< HEAD
    <!-- Form -->
    <div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" name="button">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title text-center">¡Escribenos!</h4>
          </div>
          <div class="modal-form">
            <meta charset="utf-8">
            <form enctype="multipart/form-data" name="pagerform" id="pageForm" class="contacto-form">
              <input type="text" placeholder="Nombre"  name="nombre">
              <input type="text" placeholder="Correo"  name="correo">
              <input type="text" placeholder="Asunto:" name="asunto">
              <textarea class="input-mensaje" type="text" placeholder="Mensaje:" name="mensaje"></textarea>
              <input class="enviar-button" type="button" name="enviar" id="enviar" value="Enviar" onclick="validateForm('pageForm')">
            </form>
          </div>
          <div class="modal-contacto">
            <span>Telefonos: (81) 8134 2235 / 36 </span> <br>
            <span>informacion@asepco.com.mx</span>
          </div>
        </div>
      </div>
    </div>
=======

>>>>>>> b3fa02670a15697d10eac99cbaaff784e9268ee4
    <section>
      <div class="capacitacion-content-1 margin-navbar">
        <div class="container">
          <div class="quienes-main-copy">
            <h3 class="quienes-main-header font-white">Programas de capacitación</h3>
            <hr class="quienes-main-copy-hr">
            <p class="quienes-main-description font-white">
              Cursos y diplomados dirigidos al personal de nuestros clientes.
            </p>
          </div>
        </div>
      </div>
    </section>
<div class="scroll-nav-trigger"></div>

<!-- Form -->
<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close" name="button">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center">¡Escribenos!</h4>
      </div>
      <div class="modal-form">
        <meta charset="utf-8">
        <form enctype="multipart/form-data" name="pagerform" id="pageForm" class="contacto-form">
          <input type="text" placeholder="Nombre"  name="nombre">
          <input type="text" placeholder="Correo"  name="correo">
          <input type="text" placeholder="Asunto:" name="asunto">
          <textarea class="input-mensaje" type="text" placeholder="Mensaje:" name="mensaje"></textarea>
          <input class="enviar-button" type="button" name="enviar" id="enviar" value="Enviar" onclick="validateForm('pageForm')">
        </form>
      </div>
      <div class="modal-contacto">
        <span>Telefonos: (81) 8134 2235 / 36 </span> <br>
        <span>informacion@asepco.com.mx</span>
      </div>
    </div>
  </div>
</div>



<!-- Clients Section-->
<section>
  <div class="paper-pad-area">
    <span class="capacitacion-header-2 font-blue ">
      Catálogo de capacitación.
    </span>
    <div class="paper-pad">
      <span class="paper-pad-heading font-blue">Somos expertos en:</span>
      <div class="list-box">
        <ul class="paper-pad-list-1">
          <li data-toggle="modal" id="admin" data-target="#admin" data-toggle="modal">Administración</li>
          <li data-toggle="modal" id="calidad" data-target="#calidad" data-toggle="modal">Calidad y productividad</li>
          <li data-toggle="modal" id="cambio-innovacion" data-target="#cambio-innovacion" data-toggle="modal">Cambio e innovación</li>
          <li data-toggle="modal" id="comunicacion" data-target="#comunicacion" data-toggle="modal">Comunicación</li>
          <li data-toggle="modal" id="trabajo" data-target="#equipo" data-toggle="modal">Trabajo en equipo</li>
          <li data-toggle="modal" id="humanidades" data-target="#humanidades" data-toggle="modal">Humanidades</li>
          <li data-toggle="modal" id="liderazgo" data-target="#liderazgo" data-toggle="modal">Liderazgo</li>
        </ul>

        <ul class="paper-pad-list-2">
          <li data-toggle="modal" id="manejo-tiempo" data-target="#manejo-tiempo" data-toggle="modal">Manejo del tiempo</li>
          <li data-toggle="modal" id="negociacion" data-target="#negociacion" data-toggle="modal">Negociación</li>
          <li data-toggle="modal" id="recursos" data-target="#recursos" data-toggle="modal">Recursos humanos</li>
          <li data-toggle="modal" id="servicio" data-target="#servicio" data-toggle="modal">Servicio</li>
          <li data-toggle="modal" id="tecnicos" data-target="#tecnicos" data-toggle="modal">Técnicos</li>
<<<<<<< HEAD
          <li data-toggle="modal" id="ventas" data-target="#ventas" data-toggle="modal">Formatos de ventas</li>
=======
          <li data-toggle="modal" id="ventas" data-target="#ventas" data-toggle="modal">Ventas</li>
>>>>>>> b3fa02670a15697d10eac99cbaaff784e9268ee4
          <li data-toggle="modal" id="cambio-innovacion" data-target="#cambio-innovacion" data-toggle="modal">Innovación</li>
        </ul>
        <!-- <form method="get" action="catalogo.pdf">
          <button id="filerequest" type="submit" name="button" class="yellow-button">Descárgalo</button>
        </form> -->
      </div>
      <img src="img/paper-pad-3.png" alt=""/>
    </div>
  </div>
</section>

<!-- Content 3-->
    <section class="back-green">
      <div>
        <div class="container">
          <div class="capacitacion-heading-3">
            <h1 class="capacitacion-main-header-3 font-white">Asepco te ofrece lo mejor.</h1>
            <hr class="quienes-main-copy-hr">
            <p class="quienes-main-description font-white">
              Nuestro compromiso como empresa es comprobar resultados, por lo que a través de
              diferentes herramientas brindamos la oportunidad de evaluar el desarrollo
              de las personas capacitadas.
            </p>
          </div>
          <div class="capacitacion-bullets-area">
            <ul class="quienes-bullets font-white">
              <li class="capacitacion-bullet-point">
                <p class="capacitacion-bullet-title font-white"> Evaluaciones</p>
                Se utilizan diversos métodos de evaluación del participante,
                buscando siempre la personalización.
              </li>
              <hr>
              <li class="capacitacion-bullet-point">
                <p class="capacitacion-bullet-title font-white">Reconocimientos</p>
                Nuestros servicios incluyen un reconocimiento por participante bajo el registro de la Secretaría
                del Trabajo y Previsión Social (STPS).
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>



<!--details modal-->
<?php include 'details-1.php';

 ?>
<?php include 'capacitacion-list.php'; ?>

 <!-- Menu Scripts -->

 <script>
     var windowWidth = $(window).width();
     if(windowWidth < 800){
         $("#dropdown-menu-button").click(function () {
             $("#dropdown-menu").fadeToggle();
       });
     }
 </script>


 <script>
     var windowWidth = $(window).width();
     if(windowWidth < 800){
       $("section").click(function () {
           $("#dropdown-menu").fadeOut();
       });
     }
 </script>

 <script>
     var windowWidth = $(window).width();
     if(windowWidth < 800){
         $(".index-navbar-breadcrumb").click(function () {
             $("#dropdown-menu").fadeOut();
         });
     }
 </script>

 <script>
     var windowWidth = $(window).width();
     if(windowWidth < 800){
         $(".index-navbar-breadcrumb").click(function () {
             $("#dropdown-menu").fadeOut();
         });
     }
 </script>

 <!-- Navbar Color Changer -->

 <script>
 var scroll_start = 0;
   var change = $('.scroll-nav-trigger');
     var offset = change.offset();
     $(document).scroll(function() {
       scroll_start = $(this).scrollTop();
       if(scroll_start > offset.top) {
         $('#navbar').addClass('scroll-nav-back');
     }
     else {
     $('#navbar').removeClass('scroll-nav-back');
   }
 });
 </script>

<!-- List imports -->
<link href="css/capacitacion-list.css" rel="stylesheet">
<script>
        $("#psiquiatria, .pop-up-close").click(function () {
            $("#psiquiatria-modal").fadeToggle();
            $(".index-html").toggleClass("overflow-hidden")
    });
</script>



  </body>
</html>
