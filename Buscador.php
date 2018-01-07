<?php
    include 'mysql/conexion.php';

?>
<!DOCTYPE html>
<html>

<head>
	<title>Buscar</title>
</head>

<body>
	
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.11&appId=889406647892264';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    

<!--Barra de navegación-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="Index.php">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Publicaciones.php">Publicaciones </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Nueva_publicacion.php">Nueva Publicación </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Buscador </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Reencuentros.php">Reencuentros </a>
        </li>
      </ul>
    </div>
  </nav>

<!-- Título y texto explicativo de este apartado-->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">Buscar</h1>
      <p class="lead"> Perdiste a tu perro o encontraste a alguno que te parecía perdido? Creá una nueva publicación para que otras personas puedan verla. Completando los datos de este formulario luego se podrán hascer búsquedas mucho más sencillas. </p>
    </div>
  </div>

<!-----------------------------OPCIONES DE BUSQUEDA------------------------------------>
    
<div class="row">
    <div class="col"> </div>
    <div class="col-8">
    
    <div class="card text-center">
    <div class="card-header">
      Opciones de búsqueda
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">    
    
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="container">
                    <!--RAZA---COLOR DE PELO---SEXO-->
                    <div class= "row">
                        <div class="col-3">
                            <!--RAZA-->
                            <label>Raza</label>
                            <select name="raza">
                                <option value="No sé">No sé</option>
                                <option value="Beagle">Beagle</option>
                                <option value="Border Collie">Border Collie</option>
                                <option value="Boxer">Boxer</option>
                                <option value="Bulldog Francés">Bulldog Francés</option>
                                <option value="Caniche">Caniche</option>
                                <option value="Cocker">Cocker</option>
                                <option value="Dogo">Dogo</option>
                                <option value="Labrador">Labrador</option>
                                <option value="Mestizo">Mestizo</option>
                                <option value="Ovejero">Ovejero</option>
                                <option value="Salchicha">Salchicha</option>
                                <option value="Yorkshire Terrier">Yorkshire Terrier</option>
                            </select>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-3">
                            <!--COLOR DE PELO-->
                            <label>Color de pelo</label>
                            <select name="pelo">
                                <option value="No sé">No sé</option>
                                <option value="Blanco">Blanco</option>
                                <option value="Beige">Beige</option>
                                <option value="Gris Claro">Gris Claro</option>
                                <option value="Gris Oscuro">Gris Oscuro</option>
                                <option value="Marrón Claro">Marrón Claro</option>
                                <option value="Marrón Oscuro">Marrón Oscuro</option>
                                <option value="Negro">Negro</option>
                            </select>
                        </div>    
                        <div class="col-5">
                            <!--SEXO-->
                            <div class="radio">
                                <p>Sexo</p>
                                <label class="radio-inline"><input type="radio" name="sexo" value="Macho">Macho</label>
                                <label class="radio-inline"><input type="radio" name="sexo" value="Hembra">Hembra</label>
                                <label class="radio-inline"><input type="radio" name="sexo" value="No sé" checked>No sé</label>
                            </div>
                        </div>
                    </div>
                    <br>
                                    
                    <!--BOTON PARA BUSCAR-->
                    
                    <div class='row'>
                        <div class="col-4"></div>
                        <div class="col-4">
                            <button type="submit" id="buscar" name="buscar" class="btn btn-primary">Buscar</button>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
            </form>
        </blockquote>
    </div>
    </div>

    </div>
    <div class="col"> </div>
  </div>  
    
<?php

     if ($_POST){
        
        // PREPARO LA PARTE DE LA CONSULTA POR RAZA
        if ($_POST['raza'] != 'No sé'){
            $raza = " AND (perros.raza = '" . $_POST['raza'] . "')";
        }else {
            $raza = '';
        }
        
        // PREPARO LA PARTE DE LA CONSULTA POR PELO
        if ($_POST['pelo'] != 'No sé'){
            $pelo = " AND (perros.color_pelo = '" . $_POST['pelo'] . "')";
        }else {
            $pelo = '';
        }
        
        // PREPARO LA PARTE DE LA CONSULTA POR SEXO
        if ($_POST['sexo'] != 'No sé'){
            $sexo = " AND (perros.sexo = '" . $_POST['sexo'] . "')";
        }else {
            $sexo = '';
        }
        
        $sql = "SELECT nombre_user, fecha, texto, img_ruta, id_pub 
        FROM usuarios, publicaciones, perros 
        WHERE (((publicaciones.reencuentro <> 1) and (publicaciones.cerrada <> 1))
        AND ((usuarios.id_user = publicaciones.id_user) and (perros.id_perro = publicaciones.id_perro)))" . $raza . $pelo . $sexo . " ORDER BY publicaciones.fecha";
        
        $result = mysqli_query ($conn, $sql);
        
        if (mysqli_num_rows($result) > 0){
                
        while ($row = mysqli_fetch_assoc($result)){

            echo    "<div class='container' id='" . $row["id_pub"] . "'>";
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
            echo    "<div class='fb-comments' data-href='http://localhost/PF-ComIT-Conde/" . $row["id_pub"] . "' data-width='100%' data-numposts='3' data-order-by='reverse_time'></div>";
            echo    "</div>";
            echo    "<br>";
        }
        } else {
                    //NO HAY PUBLICACIONES PARA MOSTRAR, PRESENTAR UN CARTEL
                    echo "<h1>No hay publicaciones para mostrar</h1>";
                }
        
        mysqli_close($conn);
    }
    
?>
    
    
    
</body>
</html>