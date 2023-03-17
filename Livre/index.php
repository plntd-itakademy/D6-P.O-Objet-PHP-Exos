<?php
require_once('classes/Livre.php');

// Test du singleton

// On crée une instance d'un livre, dans ce cas là c'est un nouveau livre qui est reçu car il n'y en a aucun qui a été instancié auparavant
$livre1 = Livre::getInstance();
$livre1->setTitre("Harry");
echo "Titre livre 1 : " . $livre1->getTitre() . "<br />";

// Ici, lorsqu'on appelle la méthode "getInstance()", on obtient l'objet qui a été créé juste avant au lieu d'en recréer un.
$livre2 = Livre::getInstance();
// Le titre de l'objet devient "Salut" (avant il correspondait à "Harry")
$livre2->setTitre("Salut");
echo "Titre livre 2 : " . $livre2->getTitre();
