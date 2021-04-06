<?php
    require 'form.php';

    $formulaire = new Form();
    $country = array("Belgium","France","Deutsh","Danemark");
    $formulaire->create('index.php');
    $formulaire->input('lastName','text','name');
    $formulaire->input('firstName','text','name');
    $formulaire->select('country','country',$country);
    $formulaire->radio("radio",$country);
    $formulaire->submit('modifier');
    $formulaire->end();