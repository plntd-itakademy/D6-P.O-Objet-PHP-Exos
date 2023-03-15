<?php
require_once 'classes/Banque.php';

$banque = Banque::getInstance('0482819933', 1000);
$banque->retirerArgent(1000);
$banque->deposerArgent(500);
echo $banque->getSolde();
