<?php

	$servername = 'localhost';
	$username = 'root';
	$password = '29776955';
    $database = 'buscarperrosbd';

	// Crear conexión
	$conn = mysqli_connect($servername, $username, $password, $database);

	// Checkeo de conexión
	if (!$conn) {
		die ("Conection failed: " . mysqli_connect_error());
	}
	
?>