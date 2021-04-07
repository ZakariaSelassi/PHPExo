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
        $myCar = new Voiture("FR","2019-05-20",150000,"Sportback","Audi","Orange",2.5);
        $myCar->checkType();
        $myCar->checkVehicule();
        $myCar->checkCountry();
        $myCar->checkKm();
        $myCar->checkCirculation();
        echo "<pre>";
        print_r($myCar);
        echo "</pre>";
    ?>
</body>
</html>