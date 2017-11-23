<?php
    include 'mysql/conexion.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Reencuentros</title>
</head>
<body>
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
          <a class="nav-link" href="Buscador.php">Buscador </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Reencuentros </a>
        </li>
      </ul>
    </div>
  </nav>

<!-- Título y texto explicativo de este apartado-->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">Reencuentros</h1>
      <p class="lead"> En el tablón de reencuentros se podrán ver las fotos de los perros que pudieron volver a sus hogares gracias a la colaboración de todos quienes participan en esta página. </p>
    </div>
  </div>
    
<?php
    $fotoDefault = "img/img_pub_orig/sin_foto.jpg";
    
    //SE PREPARA LA CONSULTA PARA BUSCAR REENCUENTROS
    $sql = "SELECT img_ruta FROM publicaciones, perros WHERE (perros.id_perro = publicaciones.id_perro) AND (publicaciones.reencuentro = 1)";
    
    // SE EJECUTA LA CONSULTA
    $result = mysqli_query ($conn, $sql);
    
    if (mysqli_num_rows($result) > 0){
                
        while ($row = mysqli_fetch_assoc($result)){
       
        if ($row["img_ruta"] != $fotoDefault){    
            echo "<div class='container'>";
            echo    "<div class='row'>";
            echo        "<div class='col-md-3'>";
            echo            "<div class='thumbnail'>";
            echo                "<img src='" . $row["img_ruta"] . "'>";
            echo            "</div>";
            echo        "</div>";
            echo    "</div>";
            echo "</div>";
        }
    
    }
    } else {
            //NO HAY FOTOS PARA MOSTRAR, PRESENTAR UN CARTEL
            echo "<h1>No hay fotos para mostrar</h1>";
            }
    
    mysqli_close($conn);
    
?>
    

</body>

</html>