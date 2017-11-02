<!DOCTYPE html>
<html>
<head>
	<title>Prueba de funciones</title>
</head>
<body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <?php 
    function publicacion ($imagen, $usuario, $texto){
      ?> <!html>
          <!-- Tarjeta de publicación -->
           <div class="card mb-3">
              <img class="card-img-top" src= "<?php echo $imagen; ?>" class="img-responsive" height="450px" width="1000px" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title"><?php echo $usuario; ?></h4>
                <p class="card-text"><?php echo $texto; ?></p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
           </div>    
       </html> <?php 
  }
  publicacion("img/762.jpg", "Elias", "Esto es una prueba de publicación.");

  publicacion("img/perdido.jpg", "Verónica", "Se me acaba de perder mi perro, en la zona de Kilómetro 5. Es color marrón y se llama Firulais.");
  
  ?>



  
  
</body>
</html>