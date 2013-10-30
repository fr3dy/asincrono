<?php
	include_once("constante.php");


	$vSQL = "INSERT INTO persona set "
			. "nombres = '{$_POST['txtNombre']}' ";
	
	if($resultado = $db_phpmysql->query($vSQL)){
		header("Location:index.php");
	}else{

	};

	
?>
