<?php
  include_once("cabecera.php");

  include_once("menu.php");

  include_once("constante.php");

?>


  <h3>Modificar Personas</h3>

  
<form role="form" name="frmNuevo" id="frmNuevo" method="post" action="persona_nuevo_guarda.php">
  <div class="form-group">
    <label for="txtNombre">Nombre(s)</label>
    <input type="text" class="form-control" id="txtNombre" name = "txtNombre" placeholder="Ingrese Nombre">
  </div>
  <button type="submit" class="btn btn-default">Guardar</button>
</form>

<?php

  include_once("pie");
?>




