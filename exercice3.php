<?php

// 1- Créer deux tableaux : notes et coef
$notes = array(
    'Algorithmique' => 12.5,
    'Programmation' => 15,
    'Reseaux' => 10,
    'Architecture' => 18.5,
    'Base de donnees' => 10,
    'Anglais' => 18,
    'Droits' => 15,
    'Mathematique' => 12
);

$coef = array(
    'Algorithmique' => 3,
    'Programmation' => 2,
    'Reseaux' => 2,
    'Architecture' => 2,
    'Base de donnees' => 3,
    'Anglais' => 3,
    'Droits' => 1,
    'Mathematique' => 1
);

// 2 - Ecrire une fonction moyenne qui a comme paramètres ces deux tableaux note et coef
function moyenne($notes, $coef)
{
    $sommeProduits = 0;
    $sommeCoefs = 0;

    foreach ($notes as $matiere => $note) {
        $sommeProduits += $note * $coef[$matiere];
        $sommeCoefs += $coef[$matiere];
    }

    if ($sommeCoefs > 0) {
        return $sommeProduits / $sommeCoefs;
    } else {
        return ;
    }
}

// 3 - 
echo "<table >";
echo "<tr><th>Matière</th><th>Coefficient</th><th>Notes</th></tr>";

foreach ($notes as $matiere => $note) {
    echo "<tr>";
    echo "<td>$matiere</td><td>{$coef[$matiere]}</td><td>$note</td>";
    echo "</tr>";
}

echo "</table>";

$moyenne = moyenne($notes, $coef);
echo "<p>Moyenne = $moyenne</p>";

?>
