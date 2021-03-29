<?php
include 'db.php';
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