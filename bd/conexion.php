<?php

	$servername = "localhost";
	$username = "root";
	$password = "29776955";

	//Crear conexión
	$conn = mysql_connect($servername, $username, $password);

	//Chequear conexión
	if (!$conn) {
		die("Conexion fallida: ".mysql_connect_error());
	}
	echo "Conectado satisfactoriamente";

?>