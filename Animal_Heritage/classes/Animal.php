<?php
require_once 'Espece.php';

// animal : attribut class espece, attribut type nombre de membres, attribut type régime alimentaire, attribut espérance de vie

class Animal extends Espece
{
    private $espece;
    private $esperanceVie;
    private $periodeGestation;

    public function __construct()
    {
        $this->espece = new Espece;
        $this->nombreDeMembre = 4;
        $this->esperanceVie = 20;
        $this->periodeGestation = 11;
    }
}
