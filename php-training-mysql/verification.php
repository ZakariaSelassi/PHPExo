<?php
  include 'db.php';
    $name = $difficulty = $distance = $duration = $height_difference = '';
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
        header('Location:read.php');
    }

    if (isset($_POST['id'])) {
        $test = $_GET['id'];
        $req = $db -> prepare("select * from hiking where id =:test");
        $req->execute([
            'name' => $name,
            'difficulty' => $difficulty,
            'distance' => $distance,
            'duration' => $duration,
            'height_difference' => $height_difference
        ]);
        
        header('Location:read.php');
        echo 'champs update !';
    }

    if(isset($_GET['id']))
    {   
        $test = $_GET['id'];
        $req = $db -> prepare("DELETE from hiking where id =:test");
        $req->execute([ 
            'test' => $test,
        ]);
       
        
        header('Location:read.php');
        echo 'champs delete !';
        
    }

?>