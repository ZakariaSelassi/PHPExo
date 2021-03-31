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
</body>
</html>