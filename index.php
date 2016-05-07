<?php
	// require_once('include/connection.php');

	if(!isset($_GET['p'])) {
		$route ='index';
	} else {
		$args = explode("/", $_GET['p']);
		$route = $args[0];
	}

	require_once('include/routes.php');	

?>