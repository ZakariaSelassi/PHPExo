<?php 
class User extends DataBase{
    private $id;
    private $name;
    private $email;
    private $password;
    private $connected;

    public function getUsers(){

        $sql = "Select id,username,email from user LIMIT 0,10";
        // on recupère la fonction connect qui permet de faire le lien à la db ensuite on execute notre query puis fetchle tout
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([]);
        $items = $stmt->fetchAll();
        foreach($items as $item)
        {
            $this->displayAllUsers($item);
        }
    }
    private function displayAllUsers($item){
        echo '<tr>
                <td>'.$item['id'].'</td>
                <td>'.$item['username'].'</td>
                <td>'.$item['email'].'</td>
      </tr>';
    }
public function createUsers($username,$email,$password){
       try
       {
        $sql = "INSERT INTO user (username,email,password) values (:username,:email,:password)";
        $stmt = $this->connect()->prepare($sql);
        $stmt -> bindParam(":username",$username);
        $stmt -> bindParam(":email",$email);
        $stmt -> bindParam(":password",$password);
        
        $data = $stmt->execute();
        if(!$data)
        {
            echo $stmt->errorCode();
        }else{
            echo $stmt -> rowCount();
            echo "New clients as been register !";
        }

       }catch(PDOException $e){
           echo $e->getMessage();
           return false;
        }
              
    }


}


?>