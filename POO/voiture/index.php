<?php require 'voiture.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div>
    <table class="table table-dark w-50 m-auto">
        <thead><tr>
                <th scope="col">#</th>
                <th scop="col">imma</th>
                <th scop="col">date</th>
                <th scop="col">km</th>
                <th scop="col">modele</th>
                <th scop="col">marque</th>
                <th scop="col">couleur</th>
                <th scop="col">poids</th>
            </tr>
            </thead>
    <tbody>
    <?php 
        $myCar = new Voiture("FR","2019-05-20",150000,"Sportback","Audi","Orange",2.5);
        $myCar2 = new Voiture("BE","2019-05-20",150000,"Sportback","Audi","Orange",2.5);
        $myCar3 = new Voiture("L","2019-05-20",150000,"Sportback","Audi","Orange",2.5);

        
        $myCar->display('img/audi.png');
        $myCar2->display('img/audi2.png');
        $myCar3->display('img/audi3.png');


        echo "<pre>";
        print_r($myCar);
        echo "</pre>";
    ?>
        </tbody>
    </table>
</body>
</html>