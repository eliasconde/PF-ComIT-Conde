<?php

require 'conexion.php';
//require 'app/start.php';

$config = array();
$config ['app_id'] = '889406647892264';
$config ['app_secret'] = 'a40faf90fb8312fd1a827f387a1f3803';

$pub = $_POST['boton'];

$sql = "UPDATE publicaciones SET reencuentro = 1 WHERE id_pub = ?;";
echo $sql;

$sentencia = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($sentencia, 's', $pub);


// SE EJECUTA LA CONSULTA
mysqli_stmt_execute($sentencia);
mysqli_stmt_close($sentencia);
mysqli_close($conn);
header('Location: /PF-ComIT-Conde/Publicaciones.php');
