<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asepco Capacitacion</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js"></script>

    <!-- Form -->
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#pagerform").validate();
    });
    </script>

  </head>
  <body class="index-body">
    <!--NAVBAR INCLUDE-->
    <?php include 'navbar-blue.php';
    ?>

    <section>
      <div class="content-1 margin-navbar">
        <div class="container">
          <div class=" main-copy">
            <h1 class="font-white">Hacemos de tu capacitacion <br>la mejor inversion.</h1>
            <hr class="main-copy-hr">
            <h3 class="font-white">Aqui deberia poner un texto que defina perfectamente lo que hace asepco y asi poder escribir una frase cool y que esto quede directo.</h3>
          </div>
        </div>
      </div>

      <div class="main-products">
            <a href="capacitacion.php" class="product-box">
              <h2 class="font-white">
                Programas de <br>Capacitación
              </h2>
              <p class="font-white product-box-text">
                Cursos y diplomados dirigidos al personal
                de nuestros clientes.
              </p>
              <img src="img/marker.png" class="product-box-img" alt="" />
            </a>
            <a href="conferencias.php" class="product-box">
              <h2 class="font-white">
                Conferencias
              </h2>
              <p class="font-white product-box-text">
                Contamos con los mejores expositores para el
                desarrollo de tus conferencias.
              </p>
              <img src="img/micro-copy.png" class="product-box-img" alt="" />
            </a>
            <a href="manuales.php" class="product-box">
              <h2 class="font-white">
                Desarrollo <br>de Manuales
              </h2>
              <p class="font-white product-box-text">
                Estandarizamos la calidad en cada paso de cualquier
                operación, de modo que el individuo se
                adapte a las funciones.
              </p>
              <img src="img/pen-copy.png" class="product-box-img" alt="" />
            </a>
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
