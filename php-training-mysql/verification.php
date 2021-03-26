<?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $difficulty = $_POST['difficulty'];
        $distance = $_POST['distance'];
        $duration = $_POST['duration'];
        $height_difference = $_POST['height_difference'];
        
        $req = $db -> prepare("INSERT INTO hiking (name,difficulty,distance,duration,height_difference) values (:name,:difficulty,:distance,:duration,:height_difference)");
        $req->execute(array(
            'name' => $name,
            'difficulty' => $difficulty ,
            'distance' => $distance, 
            'duration' => $duration, 
            'height_difference' => $height_difference));
        echo 'Message envoyé ';
    }
    

?>