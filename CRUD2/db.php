<?php

try{
  $bd = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
 $sql = $bd->prepare("select * from tickets where id=24 OR id=25");
 $sql->execute();
 $data = $sql->fetch();

}catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


?>