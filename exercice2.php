<?php

$notes = array(
    'Etudiant1' => 12.5,
    'Etudiant2' => 2,
    'Etudiant3' => 15.2,
    'Etudiant4' => 7,
    'Etudiant5' => 9,
    'Etudiant6' => 11,
    'Etudiant7' => 14,
);


echo "Étudiants: ";
foreach ($notes as $etudiant => $note) {
    echo"<br>". $etudiant ."=". $note ;
};


?>
<?php

$notes = array(
    'Etudiant1' => 12.5,
    'Etudiant2' => 3,
    'Etudiant3' => 15.2,
    'Etudiant4' => 8,
    'Etudiant5' => 9,
    'Etudiant6' => 11,
    'Etudiant7' => 14,
);

echo "<br> Avant la fonction bonus:" ;
foreach ($notes as $etudiant => $note) {
    echo "<br>". $etudiant . "=" .$note;
}

function bonus(&$notes)
{
    foreach ($notes as $etudiant => $note) {
        if ($note < 8) {
            $notes[$etudiant]++;
        }
    }
}
bonus($notes);
echo "<br> apres la fonction bonus:";
foreach ($notes as $etudiant => $note) {
    echo "<br>". $etudiant . "=" .$note;
}
echo PHP_EOL;

?>

