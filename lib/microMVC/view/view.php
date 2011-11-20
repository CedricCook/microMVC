<?php
namespace microMVC\view;

class View{
    public function load( $filename, $data ){
        if(is_array($data)){
            extract($data);
        }
        
        require('themes/default/' . $filename);
    }
}

?>