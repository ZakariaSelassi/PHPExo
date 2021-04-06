<?php 

class Validator{

    // verifi si c'est une chaine de caractère
    private function checkCharacter($data)
    {
        return preg_match('/[^a-z]+/i', $data);
    }
    public function validateCharacter(){

        if(isset($_POST['lastName']) &&  isset($_POST['firstName'])){
            $lastname = $_POST['lastName'];
            $firstName = $_POST['firstName'];

            if($this->checkCharacter($lastname) && $this->checkCharacter($firstName))
            {
            echo "<p>probleme</p>";
            }
        }
        
    }


    public function validateInteger(){
        if(isset($_POST['number']))
        {
            $data = $_POST['number'];
            if(!is_int($data)){
                trigger_error("Vous devez saisir un nombre obliger ma gueule",E_USER_WARNING);
            }
            $this->$data =$data;
        }
      

    }

    public function validateFloat()
    {

        if(isset($_POST['float']))
        {
            $data = $_POST['float'];
            if(!is_float($data)){
                trigger_error("Vous devez saisir un nombre obligatoire",E_USER_WARNING);
            }
            $this->$data =$data;
        }
      
    }
    public function sendData(){
        if(isset($_POST['submit'])){
            /*$this->validateCharacter();
            echo "ok";*/
            $last = $_POST['lastName'];
            echo $last;
            $first = $_POST['firstName'];
            $data = $_POST['number'];
            if(!$this->validateCharacter($last) && !$this->validateCharacter($first) && !$this->validateCharacter($data) && !empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['number']))
            {
                echo "send";
            }else{
                echo "error";
            }
            
        }
    }

}