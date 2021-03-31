<?php
   

    function getLogin()
    {
         require 'db.php';
        $query = "select * from user where username=:username AND  password=:password";
        $sql = $db -> prepare($query);
        $pwd = password_hash($_POST['password'],PASSWORD_DEFAULT, ['cost' => 12]);
        $sql-> execute([
            'username' => $_POST['username'],
            'password' => password_verify($_POST['password'],$pwd)
        ]);
        var_dump($pwd);
        var_dump(password_verify($_POST['password'],$pwd));
        echo "4";
        $count = $sql->rowCount();
        if($count >0)
        {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            //header("Location : login_success.php");
            header("Location:login_success.php");
        }else{
            echo 'wrong';
        }
    }

?>