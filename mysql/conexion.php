<?php

	$servername = 'localhost';
	$username = 'root';
	$password = '29776955';

	// Crear conexión
	$conn = mysqli_connect($servername, $username, $password);

	// Checkeo de conexión
	if (!$conn) {
		die ("Conection failed: " . mysql_connect_error());
	}
	
?>