<?php
	
	$CONTROLLER_LIST = [
		'pages_controller' => 'PagesController',
		'user_controller'  => 'UserController'
	];

	require_once('include/view.php');
	foreach ($CONTROLLER_LIST as $filename => $ctrlname) {
		require_once('controllers/' . $filename . '.php');
	}

	switch ($route) {
		case 'index':
			call('PagesController', 'home');
			break;

		default:
			dynamic_call($CONTROLLER_LIST, $route);
			break;
	}


	function call($controller, $action) {
		$controller::$action(); 
	}

	function dynamic_call($ctrls, $action) {
		$ROUTE_FOUND = false;
		foreach ($ctrls as $filename => $ctrlname) {
			if(method_exists($ctrlname, $action)) {
				call($ctrlname, $action);
				$ROUTE_FOUND = true;
			}
		}
		if (!$ROUTE_FOUND) {
			call('PagesController', 'error');
		}
	}



?>
