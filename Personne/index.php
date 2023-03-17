<?php
include_once 'classes/Personne.php';

// Exemple de création d'utilisateurs en programmation procédurale (et non orientée objet)

// Je stock les informations de 2 utilisateurs dans 2 tableaux
$user1 = [
    'lastname' => 'Dupond',
    'firstname' => 'Jean',
    'email' => 'mail@mail.com'
];

$user2 = [
    'lastname' => 'Lepl',
    'firstname' => 'Marie',
    'email' => 'mail@mail.com'
];

// Puis je les affiche 
echo 'Personne 1 : ' . $user1['lastname'] . ' ' . $user1['firstname'] . ' ' . $user1['email'] . '<br />';
echo 'Personne 2 : ' . $user2['lastname'] . ' ' . $user2['firstname'] . ' ' . $user2['email'];

// La programmation procédurale est de manière générale moins commode que la programmation orientée objet