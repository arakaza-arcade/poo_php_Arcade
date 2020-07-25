<?php

namespace oop\fruit\anana;
use oop\fruit\fruit\fruit;

class Anana extends fruit{

private $poids=2;
public function __construct($nom)
{
    parent::__construct($nom);
}

/**
 * Get the value of poids
 */ 
public function getPoids()
{
return $this->poids;
}

public function affichage()
{
         echo 'le nom du fruit est un '.$this->getNom(). ' pese ' .$this->getPoids(). ' kg';
}
}