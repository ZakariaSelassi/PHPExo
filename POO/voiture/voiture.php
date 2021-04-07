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
    private $usure;
    private $reserved;
    public function __construct($imma,$date,$km,$modele,$marque,$couleur,$poids)
    {
        $this->imma = $imma;
        $this->date = $date;
        $this->km = $km;
        $this->modele = $modele;
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->poids = $poids;
    }

    public function checkType(){
        if($this->modele == "Audi"){
           return $this->reserved = "reserved";
        }else{
           return $this->reserved = "free";
        }
        
    }
    public function checkVehicule(){
        
        if($this->poids > 3.5){
            $this->type = "Commercial";
        }else{
            $this->type = "Utilitaire";
        }
    }
    public function checkCountry(){
        if($this->imma == "BE")
        {
            $this->imma = "Belgique";
        }else if($this->imma == "FR")
        {
            $this->imma = "France";
        }else if($this->imma == "DE"){
            $this->imma = "Deutsh";
        }else{
            $this->imma = "Undifined";
        }
    }
    public function checkKm(){
        if(!is_int($this->km)){
            trigger_error("Error ", E_USER_WARNING);
        }else{
            if($this->km < 100000){
                $this->usure = "Low";
            }else if($this->km > 100000){
                $this->usure = "Middle";
            }else if($this->km > 200000){
                $this->usure = "hight";
            }
        }   
    }

    private function validateDate($date , $format = 'Y-m-d'){
        $d = DateTime::createFromFormat($format,$date);
        return $d && $d->format($format) == $date;
    }
   public function checkCirculation(){
        if($this->validateDate($this->date)){
            // https://www.php.net/manual/fr/function.date-diff.php
            // https://waytolearnx.com/2019/07/comment-verifier-le-format-dune-date-en-php.html#:~:text=La%20fonction%20isValid()%20v%C3%A9rifie,date%20est%20valide%2C%20sinon%20FALSE.
            echo "valide";
            echo '<p>'.$this->date.'</p>';
            $now = date('Y-m-d');
            $date1 = date_create($now);
            $date2 = date_create($this->date);
            $interval = date_diff($date1,$date2);
            $format = $interval->format('Years spent since your circulation : %y Year %m Month %d Days');
            return $this->date = $format;
        }else{echo "eROROROROROROR";}    
    }

    public function rouler($move)
    {
        echo '<p>la voiture va avancer de : '. $move.'</p>';
        
        echo $this->setKm($move);
        if($move > 200000){
           echo $move . $this->usure = "Hight";
        }else{
            echo $move. $this->usure = "Low";
        }
        return $this->setKm($move);
         
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
    //Setters 
    public function setImma($imma){
        $this->imma = $imma;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function setKm($km){
        $this->km = $km;
    }
    public function setModel($modele)
    {
        $this->modele = $modele;
    }
    public function setMarque($marque){
        $this->marque= $marque;
    }
    
}


?>