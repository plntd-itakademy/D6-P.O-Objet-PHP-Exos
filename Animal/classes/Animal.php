<?php
require_once 'Espece.php';
require_once 'RegimeAlimentaire.php';
require_once 'AnimalInterface.php';

class Animal implements AnimalInterface
{
    private $espece;
    private $nombreDeMembre;
    private $esperanceVie;
    private $regimeAlimentaire;
    private $periodeGestation;

    public function __construct($espece = new Espece(), $nombreDeMembre = 4, $esperanceVie = 20, $regimeAlimentaire = new RegimeAlimentaire(), $periodeGestation = 11)
    {
        $this->espece = $espece;
        $this->nombreDeMembre = $nombreDeMembre;
        $this->esperanceVie = $esperanceVie;
        $this->regimeAlimentaire = $regimeAlimentaire;
        $this->periodeGestation = $periodeGestation;
    }

    public function nourrir($regimeAlimentaire)
    {
        return $regimeAlimentaire;
    }
}
