<?php
require_once 'Espece.php';
require_once 'RegimeAlimentaire.php';

class Animal extends Espece
{
    private $nom;
    private $esperanceVie;
    private $periodeGestation;
    private $regimeAlimentaire;

    public function __construct()
    {
        $this->nom = 'Animal';
        $this->nom_espece = 'Espèce 1';
        $this->nombreDeMembre_espece = 4;
        $this->esperanceVie = 20;
        $this->periodeGestation = 11;
        $this->regimeAlimentaire = new RegimeAlimentaire;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function __toString()
    {
        return $this->nom;
    }
}
