
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
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<<<<<<< HEAD
=======
    <script src="js/main.js"></script>
>>>>>>> b3fa02670a15697d10eac99cbaaff784e9268ee4
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropdown-menu.js"></script>
    <script src="js/main.js"></script>

<<<<<<< HEAD

=======
>>>>>>> b3fa02670a15697d10eac99cbaaff784e9268ee4
    <!-- Form -->
  </head>
  <body class="index-body">
    <?php include_once("analyticstracking.php") ?>
<<<<<<< HEAD

=======
>>>>>>> b3fa02670a15697d10eac99cbaaff784e9268ee4
    <!--NAVBAR INCLUDE-->


    <?php include 'navbar-blue.php';
    ?>

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
              <input type="text" name="correo" placeholder="Correo">
              <input type="text" placeholder="Asunto:" name="asunto">
              <textarea class="input-mensaje" type="text" placeholder="Mensaje:" name="mensaje"></textarea>
              <input type="button" name="enviar" id="enviar" value="Enviar" onclick="validateForm('pageForm')" class="enviar-button">
            </form>
          </div>
          <div class="modal-contacto">
            <span>Telefonos: (81) 8134 2235 / 36 </span> <br>
            <span>informacion@asepco.com.mx</span>
          </div>
        </div>
      </div>
    </div>

    <section>
      <div class="content-1 margin-navbar">
        <div class="container">
          <div class=" main-copy">
<<<<<<< HEAD
            <h1 class="font-white">Hacemos de tu capacitación <br>la mejor inversión</h1>
=======
            <h1 class="font-white">Hacemos de tu capacitación <br>la mejor inversión.</h1>
>>>>>>> b3fa02670a15697d10eac99cbaaff784e9268ee4
            <hr class="main-copy-hr">
            <h3 class="font-white">Ofreciendo programas de capacitación en México por mas de 15 años.</h3>
          </div>
        </div>
      </div>

      <div class="msg"></div>
<<<<<<< HEAD
      <strong><?php echo $msg; ?></strong>

=======
>>>>>>> b3fa02670a15697d10eac99cbaaff784e9268ee4

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

  </body>
</html>
