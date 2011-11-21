<?php
namespace microMVC\model;

class Model{
    
    public function getUser(){
        return array(
            'firstName' => 'Cedric',
            'lastName' => 'Cook'
        );
    }
	public function getAbout(){
		return array(
			'about' => 'This is about MVC'
		);
	}
}

?>
