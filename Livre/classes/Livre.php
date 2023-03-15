<?php

class Livre
{
    private static $livreUnique = null;
    private $titre;

    private function __construct()
    {
    }

    public static function getInstance(): Self
    {
        if (Self::$livreUnique === null) {
            Self::$livreUnique = new Livre();
        }
        return Self::$livreUnique;
    }

    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }
}
