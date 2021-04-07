<?php
class Voiture{

    private $imma;
    private $date;
    private $km;
    private $modele;
    private $marque;
    private $couleur;
    private $poids;
    private $type;

    public function checkType($Modele){
        $this->modele = $Modele;
        if($Modele == "Audi"){
            $this->type = "reserved";
        }else{
            $this->type = "free";
        }
    }
    public function checkVehicule($poids){
        
        if($poids > 3.5){
            $this->type = "Commercial";
        }else{
            $this->type = "Utilitaire";
        }
    }
    public function checkCountry($imma){
        if($imma == "BE")
        {
            $this->imma = "Belgique";
        }else if($imma == "FR")
        {
            $this->imma = "france";
        }else if($imma == "DE"){
            $this->imma = "Deutsh";
        }else{
            $this->imma = "Undifined";
        }
    }
    public function checkKm($km){
        if(!is_int($km)){
            trigger_error("Error ", E_USER_WARNING);
        }else{
            if($km < 100000){
                $this->km = "Low";
            }else if($km > 100000){
                $this->km = "Middle";
            }else if($km > 200000){
                $this->km = "hight";
            }
        }
       
    }
    private function validateDate($date , $format = 'Y-m-d'){
        $d = DateTime::createFromFormat($format,$date);
        return $d && $d->format($format) == $date;
    }
    public function checkCirculation($date){
        if($this->validateDate($date)){
            // https://www.php.net/manual/fr/function.date-diff.php
            echo "valide";
            echo '<p>'.$date.'</p>';
            $now = date('Y-m-d');
            $date1 = date_create($now);
            $date2 = date_create($date);
            $interval = date_diff($date1,$date2);
            $format = $interval->format('%y Year %m Month %d Days');
            echo $format;
        }else{echo "eROROROROROROR";}
        
        
    }


    // Getters 
    public function imma()
    {
        return $this->imma;
    }
    public function date()
    {
        return $this->date;
    }
    public function km(){
        return $this->km;
    }
    public function modele(){
        return $this->modele;
    }
    public function marque(){
        return $this->marque;
    }
    public function poids(){
        return $this->poids;
    }
    public function couleur(){
        return $this->couleur;
    }
    public function type(){
        return $this->type;
    }

}


?>