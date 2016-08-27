<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asepco | Unete </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  </head>
  <body class="team-background">
    <?php include_once("analyticstracking.php") ?>
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

    <section>
      <div class="unete-content">
        <div class="container unete-container">
          <div class="unete-main-copy">
            <h2 class="unete-main-header font-white">¿Te gustaría pertenecer a nuestro equipo?</h2>
            <hr class="unete-main-copy-hr">
            <p class="unete-main-description font-white">
              Comparte tu talento y desarrolla habilidades.
            </p>

            <div class="fileUpload unete-button">
              <span>Enviar mi Cv</span>
              <input class="upload" type="file" name="attachment" id="uploaded_file">
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

  </body>
</html>
