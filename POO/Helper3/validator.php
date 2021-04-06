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


    public function validateInteger($data){

    }

    public function validateFloat($data)
    {

    }
    public function sendData(){
        if(isset($_POST['submit'])){
            /*$this->validateCharacter();
            echo "ok";*/
            $last = $_POST['lastName'];
            echo $last;
            $first = $_POST['firstName'];
            if(!$this->validateCharacter($last) && !$this->validateCharacter($first) && !empty($_POST['lastName']) && !empty($_POST['firstName']))
            {
                echo "send";
            }else{
                echo "error";
            }
            
        }
    }

}