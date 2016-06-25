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

  </head>
  <body>
    <!--NAVBAR INCLUDE-->
    <?php include 'navbar-blue.php';
    ?>
    <?php include 'capacitacion-list.php'; ?>

    <section>
      <div class="capacitacion-content-1 margin-navbar">
        <div class="container">
          <div class="quienes-main-copy">
            <h3 class="quienes-main-header font-white">Programas de capacitación.</h3>
            <hr class="quienes-main-copy-hr">
            <p class="quienes-main-description font-white">
              Cursos y diplomados dirigidos al personal de nuestros clientes.
            </p>
          </div>
        </div>
      </div>
    </section>
<div class="scroll-nav-trigger"></div>

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
          <li data-toggle="modal" id="ventas" data-target="#ventas" data-toggle="modal">Ventas</li>
          <li data-toggle="modal" id="servicio" data-target="#servicio" data-toggle="modal">Servicio</li>
          <li data-toggle="modal" id="atencion" data-target="#atencion" data-toggle="modal">Atención al cliente</li>
          <li data-toggle="modal" id="comunicacion" data-target="#comunicacion" data-toggle="modal">Comunicación</li>
          <li data-toggle="modal" id="trabajo" data-target="#trabajo" data-toggle="modal">Trabajo en equipo</li>
          <li data-toggle="modal" id="calidad" data-target="#calidad" data-toggle="modal">Calidad</li>
          <li data-toggle="modal" id="productividad" data-target="#productividad" data-toggle="modal">Productividad</li>
        </ul>

        <ul class="paper-pad-list-2">
          <li data-toggle="modal" id="liderazgo">Liderazgo</li>
          <li data-toggle="modal" id="negociacion">Negociación</li>
          <li data-toggle="modal" id="admin">Administración</li>
          <li data-toggle="modal" id="recursos">Recursos humanos</li>
          <li data-toggle="modal" id="humanidades">Humanidades</li>
          <li data-toggle="modal" id="innovacion">Innovación</li>
          <li data-toggle="modal" id="motivacion">Motivación</li>
        </ul>
        <form method="get" action="catalogo.pdf">
          <button id="filerequest" type="submit" name="button" class="yellow-button">Descárgalo</button>
        </form>
      </div>
      <img src="img/paper-pad-2.png" alt=""/>
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
                <p class="capacitacion-bullet-title font-white">Reconocimiéntos</p>
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
     if(windowWidth < 768){
         $("#dropdown-menu-button").click(function () {
             $("#dropdown-menu").fadeToggle();
       });
     }
 </script>


 <script>
     var windowWidth = $(window).width();
     if(windowWidth < 768){
       $("section").click(function () {
           $("#dropdown-menu").fadeOut();
       });
     }
 </script>

 <script>
     var windowWidth = $(window).width();
     if(windowWidth < 768){
         $(".index-navbar-breadcrumb").click(function () {
             $("#dropdown-menu").fadeOut();
         });
     }
 </script>

 <script>
     var windowWidth = $(window).width();
     if(windowWidth < 768){
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
