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

  </head>
  <body class="team-background">
    <?php include_once("analyticstracking.php") ?>
    <!--NAVBAR INCLUDE-->
    <?php include 'navbar-blue.php';
    ?>

    <section>
      <div class="unete-content">
        <div class="container unete-container">
          <div class="unete-main-copy">
            <h2 class="unete-main-header font-white">¿Te gustaría pertenecer a nuestro equipo?</h2>
            <hr class="unete-main-copy-hr">
            <p class="unete-main-description font-white">
              Comparte tu talento y desarrolla habilidades.
            </p>
            <button  class="unete-button" type="button" name="button">Enviar mi CV</button>
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
