<?php 
    include 'db.php';
    session_start();
    echo "1";
    $error = null;
    try{
        if(isset($_POST["login"]))
        {
            echo "2";
            if(empty($_POST['username']) && empty($_POST['password']))
            {
                echo "All field required";
            }else{
                echo "3";
                $query = "select * from user where username=:username AND password=:password";
                $sql = $db -> prepare($query);
                $sql-> execute([
                    'username' => $_POST['username'],
                    'password' => $_POST['password']
                ]);
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
        }
    }catch (PDOException $e) {
        $error = $e->getMessage();
        echo $error;
    }
    

?>