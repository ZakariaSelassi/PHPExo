<?php 

function loadPersonnage($class){
    require $class .'.php';
    
}

spl_autoload_register('loadPersonnage');
$perso = new Personnage(60,10);

