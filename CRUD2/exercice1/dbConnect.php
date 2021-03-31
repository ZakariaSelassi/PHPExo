<?php
try
{
    $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


  }catch(Exception $e)
  {
      // En cas d'erreur, on affiche un message et on arrête tout
          die('Erreur : '.$e->getMessage());
  }

?>