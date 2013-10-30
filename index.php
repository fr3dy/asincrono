<?php
  include_once("cabecera.php");

  include_once("menu.php");

  include_once("constante.php");
?>


	<h3>Listado de Personas</h3>

	
	<table class="table table-striped table-bordered table-hover table-condensed">
		<thead>
			<th>Id</th>
			<th>Nombres</th>
			<th>Paterno</th>
			<th>Materno</th>
			<th colspan="2">Operaciones</th>
		</thead>
<?php

		$vSQL	=	"SELECT p.* "
				.	"FROM persona p ";
		$resultado = $db_phpmysql->query($vSQL);
		while ($fila = $resultado->fetch_assoc()) {
?>
			<tr>
				<td><?=$fila['persona_id']?></td>
				<td><?=$fila['nombres']?></td>
				<td></td>
				<td></td>
				<td> <a href="persona_modificar_formulario.php?id=<?=$fila['persona_id']?>">Modificar</a> </td>
				<td> <a href="persona_eliminar.php?id=<?=$fila['persona_id']?>">Eliminar</a> </td>
			</tr>
<?php
		}
?>
	</table>


<script type="text/javascript">

alert("Hola JS");
</script>


<?php

  include_once("pie");
?>


