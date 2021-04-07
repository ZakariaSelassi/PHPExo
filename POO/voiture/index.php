<?php require 'voiture.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $myCar = new Voiture();
        $myCar->checkType("Audi");
        $myCar->checkVehicule(3.6);
        $myCar->checkCountry("FR");
        $myCar->checkKm(199000);
        $myCar->checkCirculation('2019-05-20');
        echo "<pre>";
        print_r($myCar);
        echo "</pre>";
    ?>
</body>
</html>