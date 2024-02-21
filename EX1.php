<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de vos coordonnées</title>
</head>
<body>
    <h1>Confirmation de vos coordonnées</h1>

    <?php
    // Récupération des données du formulaire
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $adresse = $_POST['adresse'] ?? '';
    $ville = $_POST['ville'] ?? '';
    $code_postal = $_POST['code_postal'] ?? '';

    // Affichage des données dans un tableau HTML
    echo "<table border='1'>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code Postal</th>
            </tr>
            <tr>
                <td>$nom</td>
                <td>$prenom</td>
                <td>$adresse</td>
                <td>$ville</td>
                <td>$code_postal</td>
            </tr>
          </table>";
    ?>
</body>
</html>

