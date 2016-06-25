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

    <!-- Socicon -->
    <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">


  </head>
  <body>
    <!--NAVBAR INCLUDE-->
    <?php include 'navbar-blue.php';
    ?>

    <section>
      <div class="conferencias-content-1 margin-navbar">
        <div class="container">
          <div class="conferencias-main-copy">
            <h1 class="conferencias-main-header font-white">Conferencias.</h1>
            <hr class="quienes-main-copy-hr">
            <p class="conferencias-main-description font-white">
              En una conferencia buscamos impactar a grandes audiencias
              mediante diversos contenidos motivacionales, de productividad,
              servicios, comerciales, entre otros. <br>
              Contamos con diversos especialistas en diferentes temas
              de interés logrando adaptarnos a los objetivos de capacitación
              de nuestros clientes.
            </p>
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

  </body>
</html>
