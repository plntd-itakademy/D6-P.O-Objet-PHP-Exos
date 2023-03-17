<?php

class Livre
{
    private static $livreUnique = null;
    private $titre;

    // On met la méthode __construct en private car c'est la méthode "getInstance()" qui va l'appeler
    private function __construct()
    {
    }

    // Utilisation d'un pattern singleton, c'est pourquoi on utilise la méthode static "getInstance()" afin d'appeler la méthode __construct
    public static function getInstance(): Self
    {
        // Si la variable $livreUnique est égale à null, cela veut dire que la class "Livre" n'a jamais encore été instanciée
        if (Self::$livreUnique === null) {
            // Dans ce cas là, on instancie un nouveau Livre
            Self::$livreUnique = new Livre();
        }
        // Sinon, on n'en crée pas un nouveau et on utilise l'objet qui été déjà stocké
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
