<?php

//Tableau

// Premier utilisateur
$userName1 = 'Mickaël Andrieu';
$userEmail1 = 'mickael.andrieu@exemple.com';
$userPassword1 = 'S3cr3t';
$userAge1 = 34;

// Deuxième utilisatrice
$userName2 = 'Laurène Castor';
$userEmail2 = 'laurene.castor@exemple.com';
$userPassword2 = 'P4ssW0rD';
$userAge2 = 28;

// ... et ainsi de suite pour les autres utilisateurs.

$user1 = ['Mickaël Andrieu', 'email', 'S3cr3t', 34];

echo $user1[0]; // "Mickaël Andrieu"
echo $user1[1]; // "email"
echo $user1[3]; // 34

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

$users = [$mickael, $mathieu, $laurene];

echo $users[1][1]; // "mathieu.nebra@exemple.com"

// Boucle

$lines = 1;

while ($lines <= 100) {
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $lines++; // $lines = $lines + 1
}

$lines = 1;

while ($lines <= 100)
{
    echo 'Ceci est la ligne n°' . $lines . '<br />';
    $lines++;
}

$lines = 3; // nombre d'utilisateurs dans le tableau
$counter = 0;

while ($counter < $lines) {
    echo $users[$counter][0] . ' ' . $users[$counter][1] . '<br />';
    $counter++; // Ne surtout pas oublier la condition de sortie !
}

for ($lines = 0; $lines <= 2; $lines++)
{
    echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br />';
}