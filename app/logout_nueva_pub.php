<?php

	session_start();

	unset($_SESSION['facebook']);

	header('Location: ../Nueva_publicacion.php');

?>