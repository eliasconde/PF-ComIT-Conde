<?php

	require_once ('app/init.php');

	if ($fbauth -> login()){
		header('Location: index.php');
	}else{
		
		die('ERROR al inciar sesión');
	}
?>