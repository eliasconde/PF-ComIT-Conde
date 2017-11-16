<?php

public function subirDatosPub($idUsuario, $nombreUsuario, $nombre, $apellido, $textoPub, $raza, $color, $sexo, $imgRuta){
    
    //DATOS QUE ESTA FUNCION GUARDA
    //PARA EL USUARIO: ID de usuario, nombre y apellido
    //PARA LA PUBLICACION: fecha y texto
    //PARA EL PERRO: raza, color, sexo y la ruta de la imagen
    
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


?>