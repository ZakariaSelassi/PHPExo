<?php
    require 'form.php';

    $formulaire = new Form();
    $country = array("Belgium","France","Deutsh","Danemark");
    $formulaire->create('test.php');
    $formulaire->input('lastName','text','name');
    $formulaire->input('firstName','text','name');
    $formulaire->select('country','country',$country);
    $formulaire->submit('modifier');
    $formulaire->end();