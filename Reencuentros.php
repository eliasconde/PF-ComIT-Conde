<!DOCTYPE html>
<html>
<head>
	<title>Reencuentros</title>
</head>
<body>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    
    

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
    
<?php include ('galeria.php'); ?>
<script src="js/modal.js"></script>

</body>

</html>