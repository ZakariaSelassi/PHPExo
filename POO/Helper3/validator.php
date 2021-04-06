<?php 

class Validator{

    public function __construct()
    {
        
    }
    // verifi si c'est une chaine de caractère
    public function validateCharacter($data){
    
    }

    public function validateInteger($data){

    }

    public function validateFloat($data)
    {

    }
    public function sendData(){
        if(isset($_POST['submit'])){
            echo "premier test";
        }
    }

}