<?php

ini_set('display_errors', 1);

require('lib/microMVC/microMVC.inc.php');
use microMVC\controller\Controller;

$controller = new Controller;
switch ($_SERVER['PATH_INFO']){
	case "/home": 
		$controller->home();
		break;

	case "/about":
		$controller->about();
		break;
	default:
		$controller->home();
		break;
}

?>
