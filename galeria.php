<script type="text/javascript" scr="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css"/>

<div class="galeria">

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
                echo '<a href= "'. $row['img_ruta'] .'" rel="lightbox[galeria]" title="foto"><img src="' . $row['img_ruta'] . '"/></a>';
            }
            
        }
    
    }
    
    mysqli_close($conn);
    
?>
</div>