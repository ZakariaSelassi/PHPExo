<?php include 'dbConnect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><p>Affiche tous les clients :
    <?php 
    $query = $db->prepare("select * from clients");
    $query->execute();
    $data = $query->fetchAll();
    echo "<table>";
    foreach($data as $d)
    {
        echo "<tr>
                <td>" . $d['id']. "</td>
                <td>" . $d['lastName']. "</td>
                <td>" . $d['firstName']. "</td>
                <td>" . $d['birthDate']. "</td>
                <td>" . $d['card']. "</td>
                <td>" . $d['cardNumber']. "</td>
             </tr>";
    }
    echo "</table>";
    ?></p></div>
       
        <div><p>Affiche tous les spectacles :
        <?php 
        $query = $db->prepare("select * from shows");
        $query->execute();
        $data = $query->fetchAll();
        echo "<table>";
        foreach($data as $d)
        {
            echo "<tr>
                    <td>" . $d['id']. "</td>
                    <td>" . $d['title']. "</td>
                    <td>" . $d['performer']. "</td>
                    <td>" . $d['date']. "</td>
                 </tr>";
        }
        echo "</table>";
        ?></p></div>

        <div><p>Affiche que les clients carte fidélitié :
        <?php 
        $query = $db->prepare("select * from clients where card =1");
        $query->execute();
        $data = $query->fetchAll();
        echo "<table>";
        foreach($data as $d)
        {
            echo "<tr>
                    <td>" . $d['id']. "</td>
                    <td>" . $d['lastName']. "</td>
                    <td>" . $d['firstName']. "</td>
                 </tr>";
        }
        echo "</table>";
        ?></p></div>

        <div><p>Affiche les 20 premier clients :
        <?php 
        $query = $db->prepare("select * from clients limit 20");
        $query->execute();
        $data = $query->fetchAll();
        echo "<table>";
        foreach($data as $d)
        {
            echo "<tr>
                    <td>" . $d['id']. "</td>
                    <td>" . $d['lastName']. "</td>
                    <td>" . $d['firstName']. "</td>
                 </tr>";
        }
        echo "</table>";
        ?></p></div>

        <div><p>Affiche nom et prenom :
        <?php 
        $query = $db->prepare("select lastName ,firstName from clients ORDER BY lastName,firstName DESC LIMIT 0,20");
        $query->execute();
        $data = $query->fetchAll();
        echo "<table>";
        foreach($data as $d)
        {
            echo "<tr>
                    <td>". $d['lastName']. "</td>
                    <td>". $d['firstName']. "</td>
                 </tr>
                 ";
        }
        echo "</table>";
        ?></p></div>

        <div><p> Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. :
        <?php 
        $query = $db->prepare("select title,performer,duration,startTime from shows ORDER BY title,performer,duration,startTime ASC");
        $query->execute();
        $data = $query->fetchAll();
        echo "<table>";
        foreach($data as $d)
        {
            echo "<tr>
                    <td>". $d['title']. "</td>
                    <td>". $d['performer']. "</td>
                    <td>". $d['duration']. "</td>
                    <td>". $d['startTime']. "</td>
                 </tr>
                 ";
        }
        echo "</table>";
        ?></p></div>


<div><p> Afficher tout les clients comme ceci :
        <?php 
        $query = $db->prepare("select * from clients");
        $query->execute();
        $data = $query->fetchAll();
      
        foreach($data as $d)
        {
            echo "<table>";
            $card = ($d['card']) ? $d['card'] : "Non";
           
            echo "<tr>
                    <td>" ."Nom :". $d['lastName']. "</td>
                 </tr>
                 <tr>
                    <td>"  ."Prénom :". $d['firstName']. "</td>
                 </tr>
                 <tr>
                    <td>"  ."Date de naissance :". $d['birthDate']. "</td>
                 </tr>
                 <tr>
                    <td>"  ."Carte de fidélité :". $card . "</td>
                 </tr>
                 ";
                 if($d['cardNumber']){
                 echo "<tr>
                    <td>"  ."numéro de carte :". $d['cardNumber'] . "</td>
                 </tr>";
                 
                 } 
                 echo "</table><br>";
        }
      
        ?></p></div>

</body>
</html>