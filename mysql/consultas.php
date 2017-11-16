<?php
	
	// INSERTAR USUARIO
	public function insertarUsuario ($user, $name, $lastname, $photo){
		include 'conexion.php';

		$sql = "INSERT INTO usuarios (nombre_user, nombre, apellido, foto) VALUES ($user, $name, $lastname, $photo)";

		if (mysqli_query ($conn, $sql)) {
			echo "El registro se cargó correctamente";
		} else { 
			echo "Error: " .$sql . "<br>" .mysqli_error($conn);
		}

		mysqli_close($conn);
	}

	//INSERTAR PERRO
	public function insertarPerro ($raza, $color_pelo, $sexo, $img_ruta){
		include 'conexion.php';

		$sql = "INSERT INTO perros (raza, color_pelo, sexo, img_ruta) VALUES ($raza, $color_pelo, $sexo, $img_ruta)";

		if (mysqli_query ($conn, $sql)) {
			echo "El registro se cargó correctamente";
		} else { 
			echo "Error: " .$sql . "<br>" .mysqli_error($conn);
		}

		mysqli_close($conn);
	}

	// INSERTAR PUBLICACION
	public function insertarPublicacion ($fecha, $texto, $reencuentro, $cerrada, $idUser, $idPerro){
		include 'conexion.php';

		$sql = "INSERT INTO perros (fecha, texto, reencuentro, cerrada, id_user, id_perro) VALUES ($fecha, $texto, $reencuentro, $cerrada, $idUser, $idPerro)";

		if (mysqli_query ($conn, $sql)) {
			echo "El registro se cargó correctamente";
		} else { 
			echo "Error: " .$sql . "<br>" .mysqli_error($conn);
		}

		mysqli_close($conn);
	}

	// INSERTAR COMENTARIO
	public function insertarComentario ($nombre, $texto, $fecha, $id_pub){
		include 'conexion.php';

		$sql = "INSERT INTO comentarios (nombre, texto, fecha, id_pub) VALUES ($nombre, $texto, $fecha, $id_pub)";

		if (mysqli_query ($conn, $sql)) {
			echo "El registro se cargó correctamente";
		} else { 
			echo "Error: " .$sql . "<br>" .mysqli_error($conn);
		}

		mysqli_close($conn);
	}

    // RECUPERAR PUBLICACIONES
    public function recuperarPublicaciones (){
        include 'conexion.php';
        
        $sql = "SELECT nombre_user, fecha, texto, img_ruta 
                FROM usuarios, publicaciones, perros 
                WHERE (publicaciones.reencuentro <> 1) or (publicaciones.cerrada <> 1)
                INNER JOIN publicaciones ON usuarios.id_user=publicaciones.id_user
                INNER JOIN publicaciones ON perros.id_perro=publicaciones.id_perro
                ORDER BY publicaciones.fecha";
        
        $result = mysqli_query ($conn, $sql);
        
    	mysqli_close($conn);
    }



?>