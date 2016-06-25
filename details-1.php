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
        <form class="contacto-form" method="post" name="pagerform" id="pagerform" action="http://asepco.com.mx/asepcov2/send.php">
          <input type="text" placeholder="Nombre"  name="nombre">
          <input type="text" placeholder="Correo"  name="correo"/>
          <input type="text" placeholder="Asunto:" value="" name="asunto">
          <textarea class="input-mensaje" type="text" placeholder="Mensaje:" name="mensaje" maxlength="300"></textarea>
          <input class="enviar-button" type="submit" name="enviar" id="enviar" value="Enviar">
        </form>
      </div>
      <div class="modal-contacto">
        <span>Telefonos: (81) 8134 2235 / 36</span> <br>
        <span>informacion@asepco.com.mx</span>
        <ul class="social-media-icons">
          <li class="socicon-facebook social-icon"> <a href="https://www.facebook.com/Asepco-Capacitaci%C3%B3n-170460659638224/"> b </a></li>
          <li class="socicon-linkedin social-icon"><a href="https://www.linkedin.com/company/asepco-capacitaci%C3%B3n"> j </a></li>
        </ul>
      </div>
    </div>

  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
        $("#pagerform").validate();
    });
  </script>

  </div>
</div>
