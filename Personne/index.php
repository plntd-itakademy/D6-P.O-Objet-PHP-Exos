<?php
include_once 'classes/Personne.php';

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

echo 'Personne 1 : ' . $user1['lastname'] . ' ' . $user1['firstname'] . ' ' . $user1['email'] . '<br />';
echo 'Personne 2 : ' . $user2['lastname'] . ' ' . $user2['firstname'] . ' ' . $user2['email'];
