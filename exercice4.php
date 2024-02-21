<?php

$prix_unitaire = array(
    "Article1" => 120,
    "Article2" => 157,
    "Article3" => 520,
    "Article4" => 900,
    "Article5" => 450,
    "Article6" => 802,
    "Article7" => 1500
);

$quantite_panier = array(
    "Article1" => 3,
    "Article2" => 5,
    "Article3" => 2,
    "Article4" => 0,
    "Article5" => 0,
    "Article6" => 2,
    "Article7" => 0
);
$total_panier = calculerTotalPanier($prix_unitaire, $quantite_panier);

afficherTableau("Prix unitaire", $prix_unitaire);
afficherTableau("Quantité dans le panier", $quantite_panier);
echo "<br>Total du panier : $total_panier";

function calculerTotalPanier($prix_unitaire, $quantite_panier) {
    $total = 0;
    foreach ($prix_unitaire as $article => $prix) {
        $quantite = $quantite_panier[$article];
        $total += $prix * $quantite;
    }
    return $total;
}

// Fonction pour afficher un tableau associatif
function afficherTableau($titre, $tableau) {
    echo "<h3>$titre</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Article</th><th>Valeur</th></tr>";
    foreach ($tableau as $article => $valeur) {
        echo "<tr><td>$article</td><td>$valeur</td></tr>";
    }
    echo "</table>";
    echo "<br>";
}
// Calcul du total du panier
$total_panier = Total_panier($prix_unitaire, $quantite_panier);



?>

<?php

// Tableau des prix unitaires
$prix_unitaire = array(
    "Article1" => 120,
    "Article2" => 157,
    "Article3" => 520,
    "Article4" => 900,
    "Article5" => 450,
    "Article6" => 802,
    "Article7" => 1500
);

// Tableau des quantités dans le panier
$quantite_panier = array(
    "Article1" => 3,
    "Article2" => 5,
    "Article3" => 2,
    "Article4" => 0,
    "Article5" => 0,
    "Article6" => 2,
    "Article7" => 0
);

// Fonction pour calculer le total du panier
function Total_panier($prix_unitaire, $quantite_panier) {
    $total = 0;
    foreach ($prix_unitaire as $article => $prix) {
        if (isset($quantite_panier[$article])) {
            $total += $prix * $quantite_panier[$article];
        }
    }
    return $total;
}


// Affichage du tableau HTML
echo "<table border='1'>
        <tr>
            <th>Articles</th>
            <th>Prix unitaires</th>
            <th>Quantités</th>
        </tr>";

foreach ($prix_unitaire as $article => $prix) {
    if (isset($quantite_panier[$article]) && $quantite_panier[$article] > 0) {
        echo "<tr>
                <td>$article</td>
                <td>$prix</td>
                <td>{$quantite_panier[$article]}</td>
              </tr>";
    }
}

echo "</table>";

?>