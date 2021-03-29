<?php 
    include 'db.php';
    if (isset($_POST['name'])) {
        $test = $_GET['id'];
        $req = $db -> prepare("select * from hiking where id =:test");
        $req->execute([
            'name' => $name,
            'difficulty' => $difficulty,
            'distance' => $distance,
            'duration' => $duration,
            'height_difference' => $height_difference
        ]);
        echo 'champs update !';
        header('Location:read.php');
    }

        
?>