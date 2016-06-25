<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asepco | Manuales</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>
  <body>
    <!--NAVBAR INCLUDE-->
    <?php include 'navbar-blue.php';
    ?>

    <section>
      <div class="manuales-content-1 margin-navbar">
        <div class="container">
          <div class="manuales-main-copy">
            <h3 class="quienes-main-header font-white">Estandariza y asegura la calidad en cada paso.</h3>
            <hr class="quienes-main-copy-hr">
            <p class="quienes-main-description font-white">
              Un <i>manual</i> busca establecer las buenas prácticas orientadas
              al logro de objetivos cuantificables. Nos permite documentar procesos
              en una organización a través de un esfuerzo colectivo en el que se
              integran tareas de <i>investigación, análisis de datos, redacción y diseño.</i>
            </p>
            <p class="quienes-main-description font-white">
              El fin último de estas tareas se centran en asegurar un estándar
              de calidad en cada paso de cualquier operación, de modo que el
              personal se adapte a las funciones.
            </p>
          </div>
        </div>
      </div>
    </section>



<!-- Content 2-->
<section class="manuales-content-2 scroll-nav-trigger">
    <div class="ventajas-container">
      <img src="img/folders-3.png" class="folders" alt="" />
      <div class="manuales-right">
        <span class="manuales-main-header-2 font-gray text-center ">
          El Manual permite.
        </span>
        <div class="ventajas-area">
          <div class="ventajas-box">
            <p class="ventajas-text font-white">
              Establecer lineamientos, políticas y procedimientos de una
              actividad o área de trabajo específica y significativa.
            </p>
          </div>

          <div class="ventajas-box">
            <p class="ventajas-text font-white">
              Construirse como un instructivo o guia práctica para el usuario,
              en momentos de dudas en la operación.
            </p>
          </div>

          <div class="ventajas-box">
            <p class="ventajas-text font-white">
              Servir en actividades de capacitación de los diversos proceso
              operativos a los que se refiere el manual.
            </p>
          </div>
        </div>
      </div>
    </div>
</section>


<!-- Content 3-->
<section>
  <div class="manuales-content-3 back-light-gray">
    <div class="container productos-container">
      <span class="quienes-main-header-2 font-blue text-center ">
        Productos.
      </span>
      <div class="productos-area back-white">
        <div class="productos-box-3">
          <div class="productos-box">
            <img src="img/icons/icon-productos-01.png" alt="" />
            <p class="productos-box-heading font-blue">
              Manual de procedimientos.
            </p>
            <p class="productos-text font-gray">
              Documento base en el que se describen los procedimientos, paso
              por paso; las políticas y las normas; las responsabilidades y otras
              descripciones referentes al área de trabajo.
            </p>
          </div>
        </div>
        <div class="vertical-line-2"></div>
        <div class="productos-box-3">
          <div class="productos-box">
            <img src="img/icons/icon-productos-02.png" alt="" />
            <p class="productos-box-heading font-blue">
              Manual de capacitacion y <br>presentación de apoyo.
            </p>
            <p class="productos-text font-gray">
              Material requerido para la aplicación de capacitación. Dispuesto
              de manera didáctica, util para apoyar sesiones de capacitación interna.
            </p>
          </div>
        </div>
        <div class="vertical-line-2"></div>
        <div class="productos-box-3">
          <div class="productos-box">
            <img src="img/icons/icon-productos-03.png" alt="" />
            <p class="productos-box-heading font-blue">
              Guía de sesiones de capacitación.
            </p>
            <p class="productos-text font-gray">
              Documento opcional en el que se describe el plan de sesión
              de capacitación en el aula y el plan de adiestramiento en campo.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--details modal-->
<?php include 'details-1.php';

 ?>

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

  </body>
  <footer></footer>
</html>
