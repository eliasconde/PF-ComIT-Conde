<!DOCTYPE html>
<html>
<head>
	<title></title>
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
        <a class="nav-link" href="index.php">Principal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Publicaciones.php">Publicaciones </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Nueva_publicacion.php">Nueva Publicación </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Buscador </a>
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
    <h1 class="display-3">Buscador</h1>
    <p class="lead"> En el buscador se pueden hacer búsquedas utilizando filtros para no tener que recorrer todas las publicaciones innecesariamente. </p>
  </div>
</div>

<!--Elementos del formulario de búsqueda-->

<!-- Formulario para elegir criterios de búsqueda -->
<div class="row">
  <div class="col"> </div>
  <div class="col-8">
  
  <div class="card text-center">
  <div class="card-header">
    Criterios de búsqueda
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

      <br>

    <!--Botón para creación de publicación-->

	<button type="submit" class="btn btn-primary">Buscar</button>

    </blockquote>
  </div>
  </div>

  </div>
  <div class="col"> </div>
</div>  

</body>
</html>