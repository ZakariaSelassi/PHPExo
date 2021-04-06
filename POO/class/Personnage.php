<?php

class Personnage{
    private $_force=2;
    private $_localisation;
    private $_degats = 0; // degats du personnage 
    private $_experience = 1; // experience
    private $_name = "";

    const FORCE_PETIT = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    private static $_text = 'Je vais tous vous tuer!';
    // bdd ce fait via constructeur 
    public function __construct($force,$degats)
    {
        $this->_degats = $degats;
        $this->_force = $force;
        $this->_experience = 1;
    }
    // méthode static agit sur la classe et non pas sur objet , sur une classe on peut simplement modifier les attributs car ils appartiennent a celle-ci
    public static function parler()
    {
        echo self::$_text;
    }
    public function frapper(Personnage $perso)
    {
        $perso = 42;
        echo $perso = $this->_degats += $this->_force;
        //$perso = $this->_degats +=  $this->_force;
        
    }
    public function gagnerExperience()
    {
        // Ajoute 1 experience
     return   $this->_experience = $this->_experience + 1;
        }
    public function setExperience($experience)
    {
        if(!is_int($experience)) // si pas un entier alors error
        {
            trigger_error('l experience du personnage doit etre un entier ! ',E_USER_WARNING);
            return;
        }
        if($experience > 100)
        {
            trigger_error('l experience ne doit pas dépasser 100',E_USER_WARNING);
            return ;
        }
        // la valeur de l'objet courrant devient la valeur $experience
        $this->_experience = $experience;
    }
    public function experience()
    {
        return $this->_experience;
    }
    public function setForce($force)
    {
        if(!is_int($force))
        {
            trigger_error('la force du personnage doit etre un entier ! ',E_USER_WARNING);
            return;
        }
        if($force > 100)
        {
            trigger_error('la force ne doit pas dépasser 100',E_USER_WARNING);
            return ;
        }
        $this->_force = $force;
    }
    public function force()
    {
        return $this->_force;
    }
    public function degats(){
        return $this->_degats;
    }

}

//$perso = new Personnage("test",0); // principe d'encapsulation plus respecter si les arguments sont passé directement en paramètre
//$perso2 = new Personnage(100,10);
Personnage::parler();
