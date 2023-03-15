<?php
require_once('classes/Livre.php');

$livre1 = Livre::getInstance();
$livre1->setTitre("Harry");
echo "Titre livre 1 : " . $livre1->getTitre() . "<br />";

$livre2 = Livre::getInstance();
$livre2->setTitre("lol");
echo "Titre livre 2 : " . $livre2->getTitre();
