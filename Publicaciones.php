<?php
    require ("mysql/conexion.php");
    require ("mysql/consultas.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buscador de perros</title>
</head>
  

<body onload="recuperarPublicaciones();">
    
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
    <link rel="stylesheet" href="css/estilos.css">
    
    
<!--Barra de navegación-->
  <nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="Index.php">Principal </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Publicaciones</a>
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
    </div>
  </nav>

<!--Texto de presentación de la página-->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">Publicaciones</h1>
      <p class="lead"> En este apartado se podrán ver las publicaciones que se vayan haciendo, donde se podrán recorrer y hacer comentarios si es necesario. </p>
    </div>
  </div>
    
<!--LISTADO DE PUBLICACIONES-->
    
    
    <div class="container" id="abc">
        <div class="row bg-dark">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <img src="img/img_pub_orig/6B5.jpg">
            </div>    
            <div class="col-md-3"></div>
        </div>    
        <div class="row bg-info">
            <div class="col-md-4"><h4>Nombre de usuario</h4></div>
            <div class="col-md-5"></div>
            <div class="col-md-3"><h4>Fecha</h4></div>
        </div>    
        <div class="row bg-light">
            <p>Comentarios que hizo el usuario que perdió a su mascota y quiere encontrarla. Acá va a poner información del perro para que la gente pueda tener más precisión del animal.</p>
        </div>
        <div class="fb-comments" data-href="http://localhost/PF-ComIT-Conde/abc" data-width="100%" data-numposts="3"></div>
    </div>
    <br>
    
    <div class="container" id="def">
        <div class="row bg-dark">
            <div class="col-md-1 bg-danger"></div>
            <div class="col-md-10 bg-success">
                <img src="img/img_pub_orig/que-comen-los-perros.jpg">
            </div>    
            <div class="col-md-1 bg-warning"></div>
        </div>    
        <div class="row bg-primary"><h2>Nombre de usuario</h2></div>
        <div class="row bg-success">
            <p>Comentarios que hizo el usuario que perdió a su mascota y quiere encontrarla. Acá va a poner información del perro para que la gente pueda tener más precisión del animal.</p>
        </div>
        <div class="row">
            <div class="col-md-3 bg-danger">
                <label>Fecha de la publicación</label>
            </div>    
                
            <div class="col-md-6 bg-success"></div>
                
            <div class="col-md-3 bg-warning">
                <a class="text-right">Comentarios</a>
            </div>
        </div>
        <div class="fb-comments" data-href="http://localhost/PF-ComIT-Conde/def" data-width="100%" data-numposts="3"></div>
    </div>


</body>
</html>