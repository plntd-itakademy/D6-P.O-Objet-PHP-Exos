<?php
require_once 'classes/Animal.php';

$animals = [
    new Animal(),
    new Animal(),
    new Animal(),
    new Animal()
];

$animals[0]->setNom('Girafe');
$animals[1]->setNom('Singe');

echo '<pre>';
echo $animals[0];
echo '</pre>';
