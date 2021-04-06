<?php require 'validator.php';
require 'form.php';
$verif = new Validator();
$verif->sendData(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h2>Create user </h2>
    <?php
    $formulaire = new Form();
    $country = array("Belgium","France","Deutsh","Danemark");
    $formulaire->create('index.php');
    $formulaire->input('lastName','text','name');
    $formulaire->input('firstName','text','name');
    $formulaire->select('country','country',$country);
    $formulaire->radio("radio",$country);
    $formulaire->checkbox("checkbox",$country);
    $formulaire->submit('modifier');
    $formulaire->end();
    
  
    ?>
    </div>
</body>
</html>