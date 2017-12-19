<!DOCTYPE html>
<head>
<title>Buscador de perros</title>
</head>

<body>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/estilos.css">
    
    
<!---------------------------------Barra de navegación-------------------------------->
    
<nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-primary">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav mr-auto">
   <li class="nav-item">
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

<!--------------------------Texto de presentación de la página--------------------------->
    
<div class="jumbotron jumbotron-fluid">
 <div class="container">
   <h1 class="display-3">Publicaciones</h1>
   <p class="lead"> En este apartado se podrán ver las publicaciones que se vayan haciendodonde se podrán recorrer y hacer comentarios si es necesario. </p>
 </div>
</div>
    
<?php include ('pub.php'); ?>

</body>
