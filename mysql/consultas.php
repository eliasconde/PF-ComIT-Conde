<?php
	
	// INSERTAR USUARIO
	function insertarUsuario ($idUsuario, $nombreUsuario, $nombre, $apellido){
		include 'conexion.php';
    
        $consulta = "SELECT id_user FROM usuarios WHERE '" . $idUsuario . "'= id_user"; 
        $result= msqli_query($conn,$consulta);
    
        if (mysqli_num_rows($result) == 0){
    
            $sql = "INSERT INTO usuarios (id_user, nombre_user, nombre, apellido)
                    VALUES ($idUsuario, $nombreUsuario, $nombre, $apellido)";
    
            $result = mysqli_query ($conn, $sql);
        }
    
        mysqli_close($conn);
	}

	//INSERTAR PERRO
	function insertarPerro ($raza, $color_pelo, $sexo, $img_ruta){
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
	function insertarPublicacion ($texto, $idUser, $idPerro){
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
    function recuperarPublicaciones (){
        include 'conexion.php';
        
        $sql = "SELECT nombre_user, fecha, texto, img_ruta 
                FROM usuarios, publicaciones, perros 
                WHERE (publicaciones.reencuentro <> 1) or (publicaciones.cerrada <> 1)
                INNER JOIN publicaciones ON usuarios.id_user=publicaciones.id_user
                INNER JOIN publicaciones ON perros.id_perro=publicaciones.id_perro
                ORDER BY publicaciones.fecha";
        
        $result = mysqli_query ($conn, $sql);
        
        if (mysqli_num_rows($result) > 0){
            //CREAR CODIGO PARA INSERTAR PUBLICACION EN LA PAGINA
            
            // HACER UN FOR EACH QUE ME RECORRA $RESULT
                //TOMO LOS DATOS DE LA FILA QUE ME MUESTRA $RESULT Y LO INSERTO
                //EN EL CODIGO HTML
            echo    "<div class='container' id='abc'>";
            echo       "<div class='row bg-dark'>" ;
            echo       "<div class='col-md-3'></div>"; 
            echo       "<div class='col-md-6'>";
            echo            "<img src='img/img_pub_orig/6B5.jpg'>";
            echo        "</div>";    
            echo        "<div class='col-md-3'></div>";
            echo    "</div>";    
            echo    "<div class='row bg-info'>";
            echo        "<div class='col-md-4'><h2>Nombre de usuario</h2></div>";
            echo        "<div class='col-md-5'></div>";
            echo        "<div class='col-md-3'><h2>Fecha</h2></div>";
            echo    "</div>";    
            echo    "<div class='row bg-light'>";
            echo        "<p>Comentarios que hizo el usuario que perdió a su mascota y quiere                     encontrarla. Acá va a poner información del perro para que la gente                   pueda tener más precisión del animal.</p>";
            echo    "</div>";
            echo    "<div class='fb-comments' data-href='http://localhost/PF-ComIT-Conde/abc'     data-width='100%' data-numposts='3'></div>";
            echo    "</div>";
            echo    "<br>";
                       
        } else {
            //NO HAY PUBLICACIONES PARA MOSTRAR, PRESENTAR UN CARTEL
            echo "No hay publicaciones para mostrar";
        }
        
    	mysqli_close($conn);
    }



?>