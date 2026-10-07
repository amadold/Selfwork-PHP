<?php
$user1 = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
];

$user2 = [
    ['name' => 'Maria', 'surname' => 'Cariola', 'gender' => 'F'],
];

$user3 = [
    ['name' => 'Marco', 'surname' => 'Cariola', 'gender' => 'M'],
];

$prompt = readline('gender:');

if ($prompt === 'F') {
    echo "Buongiorno Sig.ra {$user2[0]['name']} {$user2[0]['surname']} ({$user2[0]['gender']})";
} elseif ($prompt === 'NB') {
    echo "Buongiorno {$user1[0]['name']} {$user1[0]['surname']} ({$user1[0]['gender']})";
} elseif ($prompt === 'M') {
    echo "Buongiorno Sig. {$user3[0]['name']} {$user3[0]['surname']} ({$user3[0]['gender']})";
} else {
    echo "Must choose between: F(female), M(Male) or NB(Non-Binary)";
}
