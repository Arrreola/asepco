<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asepco Capacitaciones</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  </head>
  <body>
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
      <div class="quienes-content-1 margin-navbar">
        <div class="container">
          <div class="quienes-main-copy">
            <h3 class="quienes-main-header font-white">Nuestra prioridad es tu personal</h3>
            <hr class="quienes-main-copy-hr">
            <p class="quienes-main-description font-white">
              Somos una compañía dedicada al desarrollo del capital humano a
través de la integración de un conjunto de herramientas y materiales.<br>
El objetivo es lograr la implementación del conocimiento y las habilidades del personal de nuestros clientes.
            </p>
          </div>
        </div>
      </div>
    </section>



<!-- Content 2-->
    <section class="scroll-nav-trigger">
      <div class="back-white">
        <div class="quienes-bullet-area-left">
          <div class="quienes-heading-2">
            <div class="quienes-center">
            <h3 class="quienes-second-header font-blue">Conoce Asepco.</h3>
            <hr class="quienes-main-copy-hr-2">
            <p class="quienes-main-description-2 font-gray">
              Con cada proyecto vivimos la emoción de innovar y mantenemos
              la capacidad de admirar la voluntad de superación de la gente.
              <br>Nuestras ventajas competitivas son:
            </p>
            <div class="quienes-bullets-area">
              <ul class="quienes-bullets font-gray">
                <li class="quienes-bullet-point">
                  <img src="img/check.png" alt="" />
                  <span>Desarrollo de programas adecuados a las necesidades y
                  circunstancias de nuestros clientes.</span>
                </li>
                <li class="quienes-bullet-point">
                  <img src="img/check.png" alt="" />
                  <span>
                  Completa flexibilidad para adaptarnos a la logística
                  de los programas de capacitación.
                  </span>
                </li>
                <li class="quienes-bullet-point">
                  <img src="img/check.png" alt="" />
                  <span>
                  Capacidad operativa para desarrollar el programa mediante
                  eventos simultáneos, locales y foráneos.
                  </span>
                </li>
                <li class="quienes-bullet-point">
                  <img src="img/check.png" alt="" />
                  <span>
                  Únicos con un modelo de retorno sobre la inversión.
                  </span>
                </li>
                <li class="quienes-bullet-point">
                  <img src="img/check.png" alt="" />
                  <span>
                  Altamente sensibles a los presupuestos asignados a la capacitación.
                  </span>
                </li>
              </ul>
            </div>
          </div>
          </div>
      </div>
      <div class="quienes-bullet-area-right">
        <img src="img/quienes-man.png" class="quienes-man" alt="" />
      </div>
    </section>


<!-- Clients Section-->
<section>
  <div class="yellow-ribbon">
    <span class="quienes-main-header-2 font-white text-center ">
      Nuestros clientes.
    </span>
  </div>

  <div class="container client-list-container">
    <ul class="client-list-a font-gray">
      <li class="client-list-each">Cintermex</li>
      <li class="client-list-each">Daimler</li>
      <li class="client-list-each">Delicias del Contry</li>
      <li class="client-list-each">Daltile</li>
      <li class="client-list-each">Frisa</li>
      <li class="client-list-each">Quaker State</li>
      <li class="client-list-each">Guntner</li>
      <li class="client-list-each">John Deere</li>
      <li class="client-list-each">Gruma</li>
      <li class="client-list-each">Telcel</li>
      <li class="client-list-each">GNC</li>
      <li class="client-list-each">Taf</li>
      <li class="client-list-each">Carniceria San Juan</li>
      <li class="client-list-each">C&A</li>
<<<<<<< HEAD
      <li class="client-list-each">Agua y Drenaje de Monterrey</li>
=======
      <li class="client-list-each">Agua y Drenaje</li>
>>>>>>> b3fa02670a15697d10eac99cbaaff784e9268ee4
      <li class="client-list-each">Inbursa</li>
    </ul>
    <ul class="client-list-b font-gray">
      <li class="client-list-each">Toyota</li>
      <li class="client-list-each">Arca</li>
      <li class="client-list-each">Takata</li>
      <li class="client-list-each">Franklin</li>
      <li class="client-list-each">Nemak</li>
      <li class="client-list-each">Banorte</li>
      <li class="client-list-each">Acosta verde</li>
      <li class="client-list-each">Grupo Premier</li>
      <li class="client-list-each">Caterpillar</li>
      <li class="client-list-each">Poder Judicial</li>
      <li class="client-list-each">Cajas San Nicolas</li>
      <li class="client-list-each">Convex</li>
      <li class="client-list-each">Berel</li>
      <li class="client-list-each">Laboratorios Moreira</li>
      <li class="client-list-each">Femsa</li>
      <li class="client-list-each">Rayados de Monterrey</li>
    </ul>
    <ul class="client-list-c font-gray">
      <li class="client-list-each">Hospital OCA</li>
      <li class="client-list-each">Hospital Muguerza</li>
      <li class="client-list-each">Alco</li>
      <li class="client-list-each">Mueblería Mínima</li>
      <li class="client-list-each">Zapateria Dione</li>
      <li class="client-list-each">Swiss Hospital</li>
      <li class="client-list-each">Constructora Garza Ponce</li>
      <li class="client-list-each">Cervecería Cuahutemoc Moctezuma</li>
      <li class="client-list-each">Granero Grill</li>
      <li class="client-list-each">LG</li>
      <li class="client-list-each">Panasonic</li>
      <li class="client-list-each">Delnosa</li>
      <li class="client-list-each">AON México</li>
      <li class="client-list-each">OMA Aeropuertos</li>
      <li class="client-list-each">Deloitte</li>
      <li class="client-list-each">Elite Beauty Selects</li>
    </ul>
  </div>
</section>
<div class="">
  <!--Cifras Asepco-->
      <ul class="cifras-asepco back-blue">
        <li class="cifra-modulo">
          <span class="cifra font-white" id="cifra-fx">+410</span>
          <span class="cifra-topico font-white">Programas de Capacitación al año</span>
        </li>

        <li class="cifra-modulo">
          <span class="cifra font-white" id="cifra-fx">+3500</span>
          <span class="cifra-topico font-white">Horas de Capacitación al año</span>
        </li>

        <li class="cifra-modulo">
          <span class="cifra font-white" id="cifra-fx">+26</span>
          <span class="cifra-topico font-white">Estados de la República Mexicana acudidos</span>
        </li>

        <li class="cifra-modulo">
          <span class="cifra font-white" id="cifra-fx">+15</span>
          <span class="cifra-topico font-white">Años de experiencia profesional en el mercado</span>
        </li>
      </ul>
</div>

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
</html>
