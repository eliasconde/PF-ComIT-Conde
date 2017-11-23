<?php

require 'conexion.php';
//require 'app/start.php';

$config = array();
$config ['app_id'] = '889406647892264';
$config ['app_secret'] = 'a40faf90fb8312fd1a827f387a1f3803';

$pub = $_POST['boton'];

$sql = "UPDATE publicaciones SET (reencuento = '1') WHERE (id_pub = " . $pub.")";
echo $sql;


// SE EJECUTA LA CONSULTA
mysqli_query ($conn, $sql);


mysqli_close($conn);
header('Location: Publicaciones.php');

?>