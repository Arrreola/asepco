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
        <script src="js/main.js"></script>
        <meta charset="utf-8">
        <form enctype="multipart/form-data" name="pagerform" id="pageForm">
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
