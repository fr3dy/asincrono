<?php
	include_once("constante.php");


	$vSQL 	=	"UPDATE persona set "
			.	"nombres = '{$_POST['txtNombre']}' "
			.	"WHERE persona_id = {$_POST['txtId']}";
	
	if($resultado = $db_phpmysql->query($vSQL)){
		header("Location:index.php");
	}else{

	};

	
?>
