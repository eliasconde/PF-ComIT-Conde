<?php
    require 'mysql/conexion.php';
    require 'mysql/consultas.php';
    require 'app/start.php';


echo "<!DOCTYPE html>";
echo "echo ";
echo "<head>";
echo	"<title>Buscador de perros</title>";
echo "</head>";

echo "<body>";
    
echo    "<div id='fb-root'></div>";
echo    "<script>(function(d, s, id) {";
echo      "var js, fjs = d.getElementsByTagName(s)[0];";
echo      "if (d.getElementById(id)) return;";
echo      "js = d.createElement(s); js.id = id;";
echo      "js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11&appId=889406647892264';";
echo      "fjs.parentNode.insertBefore(js, fjs);";
echo      "}(document, 'script', 'facebook-jssdk'));";
echo    "</script>";
    
echo    "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css'>";
echo	"<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js'></script>";
echo	"<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js'></script>";
echo	"<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js'></script>";
echo    "<link rel='stylesheet' href='css/estilos.css'>";
    
    
//<!--Barra de navegación-->
echo  "<nav class='navbar  fixed-top navbar-expand-lg navbar-dark bg-primary'>";
echo    "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>";
echo     "<span class='navbar-toggler-icon'></span>";
echo   "</button>";

echo   "<div class='collapse navbar-collapse' id='navbarSupportedContent'>";
echo     "<ul class='navbar-nav mr-auto'>";
echo       "<li class='nav-item'>";
echo         "<a class='nav-link' href='Index.php'>Principal </a>";
echo       "</li>";
echo       "<li class='nav-item active'>";
echo         "<a class='nav-link' href='#'>Publicaciones</a>";
echo       "</li>";
echo       "<li class='nav-item'>";
echo         "<a class='nav-link' href='Nueva_publicacion.php'>Nueva Publicación </a>";
echo       "</li>";
echo       "<li class='nav-item'>";
echo         "<a class='nav-link' href='Buscador.php'>Buscador </a>";
echo       "</li>";
echo       "<li class='nav-item'>";
echo         "<a class='nav-link' href='Reencuentros.php'>Reencuentros </a>";
echo       "</li>";
echo     "</ul>";
echo   "</div>";
echo "</nav>";

//<!--Texto de presentación de la página-->
echo  "<div class='jumbotron jumbotron-fluid'>";
echo    "<div class='container'>";
echo      "<h1 class='display-3'>Publicaciones</h1>";
echo      "<p class='lead'> En este apartado se podrán ver las publicaciones que se vayan haciendo, donde se podrán recorrer y hacer comentarios si es necesario. </p>";
echo    "</div>";
echo  "</div>";
    
//<!--LISTADO DE PUBLICACIONES-->
    
$sql = "SELECT usuarios.id_user, nombre_user, fecha, texto, img_ruta, id_pub 
        FROM usuarios, publicaciones, perros 
        WHERE ((publicaciones.reencuentro <> 1) or (publicaciones.cerrada <> 1))
        AND ((usuarios.id_user = publicaciones.id_user) and (perros.id_perro = publicaciones.id_perro))
        ORDER BY publicaciones.fecha";
        
        //INNER JOIN publicaciones ON usuarios.id_user=publicaciones.id_user
        //INNER JOIN publicaciones ON perros.id_perro=publicaciones.id_perro

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
    

echo "</body>";
echo "</html>";

?>