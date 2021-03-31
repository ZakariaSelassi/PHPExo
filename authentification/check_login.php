<?php 
    include 'db.php';
    session_start();
    $error = null;
    try{
        if(isset($_POST['login']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if(!empty($_POST['username']) && !empty($_POST['password']))
            {
                $hash = password_hash($_POST['password'],PASSWORD_DEFAULT, ['cost' => 12]); 
                $query = "select * from user where username=:username";
                $sql = $db -> prepare($query); 
                $sql->execute([
                    'username' => $_POST['username'],
                ]);
                $rows = $sql->fetchAll(PDO::FETCH_ASSOC);
                $count = count($rows);
                var_dump($count);
                //var_dump(password_verify($_POST['password'],$hash));
                if($count > 0 )
                {
                    if(password_verify($_POST['password'], $hash)){
                    $_SESSION['username'] = $_POST['username'];
                     $_SESSION['password'] = $hash;
                    //header("Location : login_success.php");
                    header("Location:login_success.php");
                    }
                    
                }else{
                    echo 'wrong';
                }
            }else{echo "error";}
        }

    }catch (PDOException $e) {
        $error = $e->getMessage();
        echo $error;
    }

   /* try{
        // Verifi info envoyé par login
        if(isset($_POST["login"]))
        {
            // Verifi si input empty 
            if(empty($_POST['username']) && empty($_POST['password']))
            {
                echo "All field required";
            }else{
               
               
               
                $sql-> execute([
                    'username' => $_POST['username'],
                    'password' => $pwd
                ]);
                echo strlen($pwd);
                var_dump(password_verify($_POST['password'],$pwd));
                echo "4";
                $count = $sql->rowCount();
                var_dump($count);
               
                
            }
        }
    }catch (PDOException $e) {
        $error = $e->getMessage();
        echo $error;
    }*/
    

?>