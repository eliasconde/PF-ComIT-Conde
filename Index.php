<?php
  require_once 'app/start.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buscador de perros</title>
</head>
  

<body>
    <meta lang="es">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<!--Barra de navegación-->
  <nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Principal <span class="sr-only">(current)</span></a>
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
          <a class="nav-link" href="Reencuentros.php">Reencuentros </a>
        </li>
      </ul>
      <ul>
        <?php if (!isset($_SESSION['facebook'])): ?>
            <a href="<?php echo $helper -> getLoginUrl($config['scopes']); ?>" class="btn btn-primary"> Iniciar Sesión </a>
        <?php else: ?>
            <a> Bienvenido, <?php echo $facebook_user -> getname(); ?> </a>
            <a href="app/logout.php" class= "btn btn-danger"> Cerrar Sesión </a>
        <?php endif; ?>  
      </ul>
    </div>
  </nav>

<!--Texto de presentación de la página-->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">Buscador de perros</h1>
      <p class="lead"> Buscador de Perros es una página creada para facilitar la búsqueda de perros perdidos por medio de opciones que harán más cómoda la navegación por las publicaciones. Dentro de la página se podrán ver las publicaciones de perros que están siendo buscados por sus dueños o de mascotas vistas solas por la calle. Se podrán hacer búsquedas filtradas para no tener que recorrer todas las publicaciones de la página y se podrá interactuar con las personas que participen en la búsqueda. También hay una sección Reencuentros donde se podrán ver a los perros con sus dueños gracias a la colaboración de todos. </p>
    </div>
  </div>

<!--Carrusel con 3 imágenes decorativas -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img\293.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img\762.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img\316.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div><br><br>

<!--Tarjetas con links para navegar la página-->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 15rem;">
    			<img class="card-img-top" src="img/perdido.jpg" alt="Card image cap">
    			<div class="card-body">
      			<h4 class="card-title">Publicaciones</h4>
      			<p class="card-text">Aquí se podrán ver todas las publicaciones de perros que están siendo buscados o personas que hayan visto a alguno perdido.</p>
      			<a href="Publicaciones.php" class="btn btn-primary">Ir a Publicaciones</a>
    			</div>
  		</div>
      </div>
    <div class="col-sm">
        <div class="card" style="width: 15rem;">
    			<img class="card-img-top" src="img/nueva_publicacion.jpg" alt="Card image cap">
    			<div class="card-body">
      			<h4 class="card-title">Nueva Publicación</h4>
      			<p class="card-text">Apartado donde se podrán hacer publicaciones tanto de dueños que buscan a su mascota como personas que ven perros perdidos.</p>
      			<a href="Nueva_publicacion.php" class="btn btn-primary">Ir a Nueva Publicación</a>
    			</div>
  		</div>
    </div>

    	<div class="col-sm">
        <div class="card" style="width: 15rem;">
    			<img class="card-img-top" src="img/buscador.jpg" alt="Card image cap">
    			<div class="card-body">
      			<h4 class="card-title">Buscador</h4>
      			<p class="card-text">Aquí se podrán ver todas las publicaciones de perros que están siendo buscados o personas que hayan visto a alguno perdido.</p>
      			<a href="Buscador.php" class="btn btn-primary">Ir a Buscador</a>
    			</div>
  		</div>
      </div>

      <div class="col-sm">
        <div class="card" style="width: 15rem;">
    			<img class="card-img-top" src="img/reencuentros.jpg" alt="Card image cap">
    			<div class="card-body">
      			<h4 class="card-title">Reencuentros</h4>
      			<p class="card-text">En esta sección se podrán ver los reencuentros de los perros con sus dueños.</p>
      			<a href="Reencuentros.php" class="btn btn-primary">Ir a Reencuentros</a>
    			</div>
  		</div>
      </div>
    </div>
  </div>

</body>
</html>