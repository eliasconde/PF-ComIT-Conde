<?php

	session_start();

	require '/config/facebook.php';

	require '/vendor/autoload.php';

	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\FacebookResponse;
	use Facebook\GraphUser;
	use Facebook\GraphObject;
	use Facebook\FacebookRequestException;

	FacebookSession::setDefaultApplication($config['app_id'],$config['app_secret']);
    
    $helper = new FacebookRedirectLoginHelper('http://localhost/PF-ComIT-Conde/Nueva_publicacion.php');
            
    	
	try {
		$session = $helper -> getSessionFromRedirect();

		if ($session) {
			$_SESSION['facebook'] = $session -> getToken();
			header('Location: Nueva_publicacion.php');
		}

		if (isset($_SESSION['facebook'])) {
			$session = new FacebookSession($_SESSION['facebook']);

			$request = new FacebookRequest($session, 'GET', '/me');
			$response = $request -> execute();
			$graphObjectClass = $response -> getGraphObject(GraphUser::className());

			$facebook_user = $graphObjectClass;
		}
	} catch (FacebookRequestException $ex) {
		// Cuando Facebook retorne un error
	} catch (\Exception $ex) {
		// Cuando la validación falla o aparece otro problema local
	}


?>