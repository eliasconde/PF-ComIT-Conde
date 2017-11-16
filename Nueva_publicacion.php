<?php
  require_once 'app/start_nueva_pub.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nueva Publicación</title>
</head>
<body>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script language = "javascript" src="js/Scripts.js"></script>

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
        <li class="nav-item active">
          <a class="nav-link" href="#">Nueva Publicación </a>
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

<!-- Título y texto explicativo de este apartado-->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">Nueva publicación</h1>
      <p class="lead"> Perdiste a tu perro o encontraste a alguno que te parecía perdido? Creá una nueva publicación para que otras personas puedan verla. Completando los datos de este formulario luego se podrán hascer búsquedas mucho más sencillas. </p>
    </div>
  </div>

<!--Elementos del formulario-->

<!-- Formulario para datos del Usuario -->
  <div class="row">
    <div class="col"> </div>
    <div class="col-8">
    
    <div class="card text-center">
    <div class="card-header">
      Datos del Usuario
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">

      <!-- Acá van las opciones de logueo de usuario para la publicación -->
        <?php if (!isset($_SESSION['facebook'])): ?>
            <a href="<?php echo $helper -> getLoginUrl($config['scopes']); ?>" class="btn btn-primary"> Inciar Sesión con Facebook</a>
        <?php else: ?>
            <p><?php echo $facebook_user -> getname(); ?></p>
            <a href="app/logout_nueva_pub.php" class= "btn btn-danger">Cerrar Sesión</a>
        <?php endif; ?>
      
      </blockquote>
    </div>
    </div>

    </div>
    <div class="col"> </div>
  </div><br>

<!-- Formulario para los datos del Perro-->
  <h1>Datos del perro</h1>
  <form method="post" action="Publicaciones.php" >
    <div class="container">
        
    <!--RAZA-->
        <label>Raza</label>
        <select>
            <option>No sé</option>
            <option>Beagle</option>
            <option>Border Collie</option>
            <option>Boxer</option>
            <option>Bulldog Francés</option>
            <option>Caniche</option>
            <option>Cocker</option>
            <option>Dogo</option>
            <option>Labrador</option>
            <option>Mestizo</option>
            <option>Ovejero</option>
            <option>Salchicha</option>
            <option>Yorkshire Terrier</option>
        </select><br>   
    
    <!--COLOR DE PELO-->    
         <label>Color de pelo</label>
         <select>
             <option>No sé</option>
             <option>Blanco</option>
             <option>Beige</option>
             <option>Gris Claro</option>
             <option>Gris Oscuro</option>
             <option>Marrón Claro</option>
             <option>Marrón Oscuro</option>
             <option>Negro</option>
         </select><br>
    
    <!--SEXO-->
        <div class="radio">
            <p>Sexo</p>
            <label class="radio-inline"><input type="radio" name="optradio">Macho</label>
            <label class="radio-inline"><input type="radio" name="optradio">Hembra</label>
            <label class="radio-inline"><input type="radio" name="optradio" checked>No sé</label>
        </div><br>
    <!--FOTO-->
        <p>Subir una foto (Opcional)</p>
        <input type="file" class="form-control-file" id="imagen"><br>
    <!--COMENTARIOS-->
        <p>Comentarios</p>
        <textarea id="comentario" placeholder="Poné la información que creas necesaria" maxlength="255" rows="3" required></textarea><br>
    <!--BOTON DE PUBLICACION-->
        <button type="submit" name="boton" class="btn btn-primary">Publicar</button>
    </div>
  </form>


</body>
</html>