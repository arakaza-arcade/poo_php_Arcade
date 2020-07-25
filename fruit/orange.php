<?php

namespace oop\fruit\orange;
use oop\fruit\fruit\fruit;

class Orange extends fruit{

private $poids=0.5;
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