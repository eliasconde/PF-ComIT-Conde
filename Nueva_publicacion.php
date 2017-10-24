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

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Principal <span class="sr-only">(current)</span></a>
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

<!-- Formulario para datos del perro -->
<div class="row">
  <div class="col"> </div>
  <div class="col-8">
  
  <div class="card text-center">
  <div class="card-header">
    Datos del perro
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <!--Menú desplegable para Color de pelo-->
            <div class="form-group">
              <label class="col-form-label" for="formGroupExampleInput">Color de pelo</label>
              <div class="btn-group">
                <select class="form-control bg-default">
                    <option>Amarillo</option>
                    <option>Amarillo con manchas</option>
                    <option>Blanco</option>
                    <option>Blanco con manchas</option>
                    <option>Gris</option>
                    <option>Gris con manchas</option>
                    <option>Marrón</option>
                    <option>Marrón con manchas</option>
                    <option>Negro</option>
                    <option>Negro con manchas</option>
                </select>
              </div>
            </div>

      <!--Dropdown para raza-->
        <div class="form-group">
          <label class="col-form-label" for="formGroupExampleInput">Raza</label>
          <div class="btn-group">
            <select class="form-control bg-default">
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
            </select>
          </div>

      <!--Selección de Sexo-->
        <div class="form-group">
          <label class="col-form-label" for="formGroupExampleInput">Sexo</label>
            <div class="form-check">
              <label class="checkbox-inline"><input type="checkbox" value="Macho">Macho</label>
              <label class="checkbox-inline"><input type="checkbox" value="Hembra">Hembra</label>
              <label class="form-check-label"><input type="checkbox" value="No sé">No sé</label>
            </div>
        </div>    
     
      <!--Botón para cargar foto--> 
        <div class="row">
          <div class="col"> </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Foto</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <div class="col"> </div>  
        </div>  

      <!--Cuadro de texto para comentario-->  
        <div class="row">
          <div class="col"> </div>
          <div class="form-group col-6">
            <label for="exampleFormControlTextarea1">Comentario</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="col"> </div>
        </div>

    </blockquote>
  </div>
  </div>

  </div>
  <div class="col"> </div>
</div>  



<!-- Formulario para datos del usuario -->
<div class="panel panel-default">
  <div class="panel-heading bg-primary">Datos de contacto</div>
  <div class="panel-body">
   
  	<form>
  		<div class="form-group">
    		<label class="col-form-label" for="formGroupExampleInput">Nombre</label>
    		<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre de contacto">
  		</div>
  		<div class="form-group">
    		<label class="col-form-label" for="formGroupExampleInput2">Teléfono</label>
    		<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Teléfono de contacto">
  		</div>
  		<div class="form-group">
    		<label class="col-form-label" for="formGroupExampleInput2">E-mail</label>
    		<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Dirección de correo electrónico de contacto">
  		</div>
	</form>

  </div>
</div>

<br>

<button type="submit" class="btn btn-primary">Crear Publicación</button>



<!--Botón para creación de publicación-->

</body>
</html>