<?php

ini_set('display_errors', 1);

require('lib/microMVC/microMVC.inc.php');
use microMVC\controller\Controller;

$controller = new Controller;
$controller->home();
?>