<?php 
spl_autoload_register('myAutoLoad');

function myAutoLoad ($className){
    // add path = 'repertoire/';
    $extension = '.php';
    $fileName = $className . $extension;
    if(!file_exists($fileName)){
        return false;
    }
    include_once $fileName;
}