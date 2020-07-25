<?php

namespace oop\fruit\anana;
use oop\fruit\fruit\fruit;

class Anana extends fruit{

private $poids=5;
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
    echo 'le nom du fruit est  '.$this->getNom(). ' pese ' .$this->getNom(). 'kg';
}
}