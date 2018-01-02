<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="css/estilos.css"/>

<ul class="galeria">

<?php

    include 'mysql/conexion.php';

    $fotoDefault = "img/img_pub_orig/sin_foto.jpg";
    
    //SE PREPARA LA CONSULTA PARA BUSCAR REENCUENTROS
    $sql = "SELECT img_ruta FROM publicaciones, perros WHERE (perros.id_perro = publicaciones.id_perro) AND (publicaciones.reencuentro = 1)";
    
    // SE EJECUTA LA CONSULTA
    $result = mysqli_query ($conn, $sql);
    
    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            if ($row["img_ruta"] != $fotoDefault){ 
                echo '<li class="galeria__item"><img src="' . $row['img_ruta'] . '" class="galeria__img"></li>';
            }
        }
    }
    
    mysqli_close($conn);
    
?>
</ul>
