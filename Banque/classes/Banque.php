<?php
require_once 'BanqueInterface.php';

class Banque implements BanqueInterface
{
    private static $compteUnique = null;
    private $numeroCompte;
    private $solde;

    // La fonction __construct en est private afin de ne pas pouvoir l'utiliser en dehors de la class
    private function __construct($numeroCompte, $solde)
    {
        $this->numeroCompte = $numeroCompte;
        $this->solde = $solde;
    }

    // Fonction appelée en dehors de la class qui vérifie si un compte n'a pas déjà été instanciée (singleton)
    public static function getInstance($numeroCompte, $solde)
    {
        if (Self::$compteUnique === null) {
            Self::$compteUnique = new Banque($numeroCompte, $solde);
        }
        return Self::$compteUnique;
    }

    // Soustrait le montant au solde du compte. Retourne le solde du compte si succès. Sinon, retourne false
    public function retirerArgent($montant): mixed
    {
        if ($this->solde >= $montant) {
            $this->solde -= $montant;
            return $this->getSolde();
        }

        return false;
    }

    // Ajoute le montant au solde du compte. Retourne le solde du compte
    public function deposerArgent($montant): float
    {
        $this->solde += $montant;
        return $this->solde;
    }

    // Retourne le solde actuel du compte
    public function getSolde(): float
    {
        return $this->solde;
    }
}
