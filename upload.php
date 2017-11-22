<?php
    include 'mysql/conexion.php';
    require 'app/start.php';

    $config = array();
	$config ['app_id'] = '889406647892264';
	$config ['app_secret'] = 'a40faf90fb8312fd1a827f387a1f3803';
	

//--------------------------CARGA DE TABLA USUARIOS-------------------------//


    // OBTENGO LOS DATOS DE FACEBOOK PARA LA TABLA USUARIOS
    $idUser = $facebook_user -> getId();
    $nombre_user = $facebook_user -> getName();
    $nombre = $facebook_user -> getFirstName();
    $apellido = $facebook_user -> getLastName();
    
    //SE PREPARA LA CONSULTA PARA INGRESAR LOS DATOS A LA TABLA USUARIOS
    $sql = "INSERT INTO usuarios (id_user, nombre_user, nombre, apellido) VALUES('$idUser','$nombre_user','$nombre','$apellido')";

    // SE EJECUTA LA CONSULTA
    mysqli_query ($conn, $sql);


//-------------------------CARGA DE TABLA PERROS----------------------------//

    $raza = $_POST['raza'];
    $pelo = $_POST['pelo'];
    $sexo = $_POST['sexo'];
    
    //OBTENGO EL ID SIGUIENTE
    $consulta = mysqli_query ($conn, "SELECT COUNT(*) AS cant FROM perros");
    $result = mysqli_fetch_assoc ($consulta);
    $idPerro = $result['cant'] + 1;

    $tmp_name = $_FILES['foto']['tmp_name'];
    $directorio = "img/img_pub_orig";
    $name = basename($_FILES['foto']['name']);
    if ($name == ""){
        $ruta = "img/img_pub_orig/sin_foto.jpg";
    }else{
       move_uploaded_file($tmp_name, $directorio ."/". $idPerro . $name); 
       $ruta = $directorio ."/". $idPerro . $name;
    }
    
    

    //SE PREPARA LA CONSULTA PARA INGRESAR LOS DATOS A LA TABLA PERROS
    $sql = "INSERT INTO perros (id_perro, raza, color_pelo, sexo, img_ruta) VALUES($idPerro,'$raza','$pelo','$sexo','$ruta')";

    // SE EJECUTA LA CONSULTA
    mysqli_query ($conn, $sql);

//-------------------------CARGA DE TABLA PUBLICACIONES----------------------------//


    // Preparo las variables para grabar en la BD
    
    $texto = $_POST['comentario'];
    $reencuentro = 0;
    $cerrada = 0;
    
        
    $consulta = mysqli_query ($conn, "SELECT COUNT(*) AS cant FROM publicaciones");
    $result = mysqli_fetch_assoc ($consulta);
    $cant = $result['cant'] + 1;

    
    //SE PREPARA LA CONSULTA PARA INGRESAR LOS DATOS A LA TABLA PUBLICACIONES
    $sql = "INSERT INTO publicaciones (id_pub, fecha, texto, reencuentro, cerrada, id_user, id_perro) VALUES($cant, NOW(), '$texto', '$reencuentro', '$cerrada', '$idUser', $idPerro)";
    // SE EJECUTA LA CONSULTA
    mysqli_query ($conn, $sql);

    
    mysqli_close($conn);
    header('Location: Nueva_publicacion.php');
?>