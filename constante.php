<?php
	define('DB_HOST','localhost');
	define('DB_USER','');
	define('DB_PASSWORD','');
	define('DB_NAME','phpmysql');

	$db_phpmysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	if($db_phpmysql)
		;//echo "<h4>Conexion correcta</h4>";
?>