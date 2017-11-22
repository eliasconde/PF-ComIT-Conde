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
    
<div class="row">
    <div class="col"> </div>
    <div class="col-8">
    
    <div class="card text-center">
    <div class="card-header">
      Datos del perro
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">    
    
            <form method="post" action="upload.php" enctype="multipart/form-data">
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
                    <!--FOTO-->                                        
                    <div class="row">
                        <!--FOTO-->
                        <br>
                        <div class="col-5">
                            <p>Subir una foto (Opcional)</p>
                        </div>
                        <div class="col-7">
                            <input type="file" id="foto" class="form-control-file" name="foto" accept="image/png, .jpeg, .jpg, image/gif">
                        </div>                        
                    </div><br>   
                
                    <!--COMENTARIOS-->
                    <div class="container">
                        <div class="row">
                            <div class="cols-4"></div>
                            <div class="cols-4">
                                <label>Comentarios</label>
                            </div>
                            <div class="cols-4"></div>
                        </div>
                        <div class="row">
                            <textarea id="comentario" name="comentario" placeholder="Poné la información que creas necesaria" maxlength="255" rows="5" cols="255" required></textarea>
                        </div>    
                    </div>
                    <br>
                    
                    <!--BOTON DE PUBLICACION-->
                    <?php 
                    
                    echo    "<div class='row'>";
                                //  --BOTON DE PUBLICACION--
                    echo        "<div class='col-4'></div>";
                    echo        "<div class='col-4'>";
                    
                    if (!isset($_SESSION['facebook'])){
                        echo  "<button type='submit' id='boton' name='boton' class='btn btn-primary'data-toggle='tooltip' data-placement='top' title='Debés estar logueado para publicar' disabled>Publicar</button>";
                    }else {
                        echo  "<button type='submit' id='boton' name='boton' class='btn btn-primary'>Publicar</button>";
                    }
                    
                    echo        "</div>";
                    echo        "<div class='col-4'></div>";
                    echo    "</div>";
                    
                    ?>    
                </div>
            </form>
        
        
        </blockquote>
    </div>
    </div>

    </div>
    <div class="col"> </div>
  </div>   
    
    
  
  
    
    
</body>
</html>