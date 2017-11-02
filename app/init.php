<?php 

	session_start();

	require_once('vendor/autoload.php');

	require_once('app/facebookauth.php');

	$facebook = new Facebook\Facebook([
			'app_id' => '889406647892264',
			'app_secret' => 'a40faf90fb8312fd1a827f387a1f3803',
			'default_graph_version' => 'v2.6',

		]);

	$fbauth = new facebookauth($facebook);
?>