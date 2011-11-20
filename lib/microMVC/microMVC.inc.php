<?php
namespace microMVC;

function classAutoload($namespace){
    
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);
    $fullpath = __DIR__ . "../../" . $path . '.php';
    return include_once($fullpath);
}

spl_autoload_register(__NAMESPACE__ . '\classAutoload');

?>