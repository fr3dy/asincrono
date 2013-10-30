<?php
	include_once("constante.php");


	$vSQL = "DELETE FROM persona "
			. "WHERE persona_id = '{$_GET['id']}' ";
	
	if($resultado = $db_phpmysql->query($vSQL)){
		header("Location:index.php");
	}else{

	};

	
?>
