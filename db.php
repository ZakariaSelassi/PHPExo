<?php

try{
  $bd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $deleteNull = $bd->prepare("DELETE from météo where ville is null and haut is null and bas is null");
  $deleteNull->execute();
  // $res en bazard de MYSQL sous form d'objet
  // prepare = plus sécurisé


}catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


?>