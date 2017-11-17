<?php
	
	// INSERTAR USUARIO
	public function insertarUsuario ($idUsuario, $nombreUsuario, $nombre, $apellido){
		include 'conexion.php';
    
        $consulta = "SELECT id_user FROM usuarios WHERE '" . $idUsuario . "'= id_user"; 
        $result= msqli_query($conn,$consulta);
    
        if (msqli_num_rows($result) = 0){
    
            $sql = "INSERT INTO usuarios (id_user, nombre_user, nombre, apellido)
                    VALUES ($idUsuario, $nombreUsuario, $nombre, $apellido)";
    
            $result = mysqli_query ($conn, $sql);
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
	public function insertarPublicacion ($texto, $idUser, $idPerro){
		include 'conexion.php';
        
        // OBTENER LA FECHA ACTUAL --- guardarlo en la variable $fecha
        
        $reencuentro = 0;
        $cerrada = 0;
        
		$sql = "INSERT INTO perros (fecha, texto, reencuentro, cerrada, id_user, id_perro) VALUES ($fecha, $texto, $reencuentro, $cerrada, $idUser, $idPerro)";

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