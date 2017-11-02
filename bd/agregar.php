<?php

	$servername = "localhost";
	$username = "root";
	$password = "29776955";
	$dbname = "buscarperrosdb";

	//Crear conexión
	$conn = mysql_connect($servername, $username, $password, $dbname);

	//Chequear conexion
	if (!$conn){
		die("Conexion fallida: " . mysql_connect_error());
	}

	$sql = "INSERT INTO MyGuests (firstname, lastname, email) 
			VALUES ('John', 'Doe', 'john@example.com')";

	if (mysql_query($conn, $sql)) {
		echo "Nuevo registro creado";
	} else {
		echo "Error: " . $sql . "<br>" . mysql_error($conn);
	}

	mysqli_close ($conn);

?>