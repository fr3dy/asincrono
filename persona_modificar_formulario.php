<?php
  include_once("cabecera.php");

  include_once("menu.php");

  include_once("constante.php");


		$vSQL	=	"SELECT p.* "
				.	"FROM persona p "
				.	"WHERE p.persona_id = {$_GET['id']}";
		$resultado = $db_phpmysql->query($vSQL);
		$fila = $resultado->fetch_assoc();
?>

  <h3>Listado de Personas</h3>

  
<form role="form" name="frmNuevo" id="frmNuevo" method="post" action="persona_modificar_guarda.php">
	<input type="hidden" class="form-control" id="txtId" name = "txtId" value="<?=$fila['persona_id']?>">
	<div class="form-group">
		<label for="txtNombre">Nombre(s)</label>
		<input type="text" class="form-control" id="txtNombre" name = "txtNombre" value="<?=$fila['nombres']?>">
	</div>
	<button type="submit" class="btn btn-default">Guardar</button>
</form>

<?php

  include_once("pie");
?>




