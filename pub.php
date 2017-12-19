<!----------------------------LISTADO DE PUBLICACIONES---------------------------------->
<?php

require 'mysql/conexion.php';
require 'mysql/consultas.php';
require 'app/start.php';

?>

<div id='fb-root'> </div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11&appId=889406647892264";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
</script>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/estilos.css">

<?php    

$sql = "SELECT usuarios.id_user, nombre_user, fecha, texto, img_ruta, id_pub 
        FROM usuarios, publicaciones, perros 
        WHERE (publicaciones.reencuentro = 0) 
        AND (publicaciones.cerrada = 0)
        AND ((usuarios.id_user = publicaciones.id_user) and (perros.id_perro = publicaciones.id_perro))
        ORDER BY publicaciones.fecha";
        
$result = mysqli_query ($conn, $sql);
        
if (mysqli_num_rows($result) > 0){
                
    while ($row = mysqli_fetch_assoc($result)){
            
        echo    "<div class='container'>";
        echo       "<div class='row'>" ;
        echo       "<div class='col-md-3'></div>"; 
        echo       "<div class='col-md-6'>";
        echo            "<img class='img-responsive img-thumbnail' src='" . $row["img_ruta"] . "'>";
        echo        "</div>";    
        echo        "<div class='col-md-3'></div>";
        echo    "</div>";    
        echo    "<div class='row bg-info'>";
        echo        "<div class='col-md-4'><h4>" . $row["nombre_user"] . "</h4></div>";
        echo        "<div class='col-md-5'></div>";
        echo        "<div class='col-md-3'><h4>" . $row["fecha"] . "</h4></div>";
        echo    "</div>";    
        echo    "<div class='row bg-light'>";
        echo        "<h5>" . $row["texto"] . "</h5>";
        echo    "</div>";
            if (isset($_SESSION['facebook'])){    
                $idUser = $facebook_user -> getId();
                if ($row['id_user'] = $idUser){
                      
                    echo "<div class='row bg-light'>";
                    echo    "<div class='col-md-9'></div>";
                    echo    "<div class='col-md-1'>";
                    echo "<form method='POST' action='mysql/encontrado.php'>";
                    echo        "<button type='submit' class='btn btn-link' name='boton' value='". $row['id_pub'] ."'>Encontrado</button>";
                    
                    echo "</form>";
                    echo    "</div>";
                    
                    echo    "<div class='col-md-2'>";
                    echo        "<button type='submit' id='cerrar' name='cerrar' class='btn btn-link'>Cerrar Publicación</button>";
                    echo    "</div>";
                    echo "</div>";
                  
                    
                }
            }
        echo    "<div class='fb-comments' data-href='http://localhost/PF-ComIT-Conde/" . $row["id_pub"] . "' data-width='100%' data-numposts='3' data-order-by='reverse_time'></div>";
        echo    "</div>";
        echo    "<br>";
    }
} else {
            //NO HAY PUBLICACIONES PARA MOSTRAR, PRESENTAR UN CARTEL
            echo "<h1>No hay publicaciones para mostrar</h1>";
        }
        
mysqli_close($conn);
    
?>