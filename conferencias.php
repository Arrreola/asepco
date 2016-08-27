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
    <script src="js/main.js">

    </script>

    <!-- Socicon -->
    <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">


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
      <div class="conferencias-content-1 margin-navbar">
        <div class="container">
          <div class="conferencias-main-copy">
            <h1 class="conferencias-main-header font-white">Conferencias</h1>
            <hr class="quienes-main-copy-hr">
            <p class="conferencias-main-description font-white">
              En una conferencia buscamos impactar a grandes audiencias
              mediante diversos contenidos motivacionales, de productividad,
              servicios, comerciales, entre otros. <br>
              Contamos con diversos especialistas en diferentes temas
              de interés logrando adaptarnos a los objetivos de capacitación
              de nuestros clientes.
            </p>
<<<<<<< HEAD
            <button class="conferencias-link" data-toggle="modal" id="conferencias" data-target="#conferencias" data-toggle="modal">Conferencias ya impartidas</button>
=======
            <button class="conferencias-link" data-toggle="modal" id="conferencias" data-target="#conferencias" data-toggle="modal">Ver catálogo</button>
>>>>>>> b3fa02670a15697d10eac99cbaaff784e9268ee4
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

 <!-- List imports -->
 <link href="css/capacitacion-list.css" rel="stylesheet">
 <script>
         $("#psiquiatria, .pop-up-close").click(function () {
             $("#psiquiatria-modal").fadeToggle();
             $(".index-html").toggleClass("overflow-hidden")
     });
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

  </body>
</html>
