<?php

$month=[
    'janvier',
    'fevrier',
    'mars',
    'avril',
    'mai',
    'juin',
    'juillet',
    'aout',
    'septembre',
    'octobre',
    'novembre',
    'decembre'
];

echo $month[2];

echo $month[4];

$tab = [59 => "Nord", 62 => "Nord pas de calais", 02 => "Aisne", 60 => "Oise", 80 => "Somme"];

echo "<br><br>";

echo $tab[59];

echo "<br><br>";

$tab[51] = "Marne";

echo "<br><br>";

foreach($month as $value) {
    echo $value . "<br>";
}

echo "<br><br>";

foreach($tab as $values) {
    echo $values . "<br>";
}

echo "<br><br>";

foreach ($tab2 as $key => $value) {
    echo "Le département $value a le numéro $key <br>";
}