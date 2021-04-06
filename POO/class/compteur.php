<?php

class Compteur{
    private static $_compteur = 0;

    public function __construct()
    {
        self::$_compteur++;
    }
    public static function getCompteur()
    {
        return self::$_compteur;
    }
}s

$compt = new Compteur;
$compt2 = new Compteur;
$compt3 = new Compteur;
$compt4 = new Compteur;


echo $compt2->getCompteur();
echo Compteur::getCompteur();

