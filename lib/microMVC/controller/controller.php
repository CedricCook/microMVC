<?php
namespace microMVC\controller;

use microMVC\view\View;
use microMVC\model\Model;

class Controller{
    
	function home(){
		$data = Model::getUser();
		View::load('home.php', $data);
	 }
	
	function about(){
		$data = Model::getAbout();
		View::load('about.php', $data);
	}
}

?>
