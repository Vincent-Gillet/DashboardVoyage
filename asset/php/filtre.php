<?php

// Récupération données de Voyage

require_once "class/classVoyage.php";
require_once "class/classDb.php";
require_once "class/classCategorie.php";



$id_categorie = intval($_GET['id_categorie']);
$title = $_GET['title'] ?? '';
$price = intval($_GET['price']) ?? '';
$nom = $_GET['nom'] ?? '';


$voyages = new Voyage();
$categorie = new Categorie();


$voyages_filtered = $voyages->tri($id_categorie, $title, $price);
$categorie_voyage = $categorie->selectCategorie($id_categorie, $nom);


// Initialisation template (character.php)

$templateVoyage = "";

// Récupération données filtres

if ($_GET['id_categorie']) {
    $categorieFilter = $_GET['id_categorie'];
} else {
    $categorieFilter = '';
}

if ($_GET['price']) {
    $priceFilter = $_GET['price'];
} else {
    $priceFilter = '';
}




// Comparaison 

$priceFilters = $_GET['price'] ?? '';
// $filterCategorie = $_GET['id_categorie'] ?? '';

function comparePrice($a, $b)
{
    return strcmp($a['price'], $b['price']);
}

if (is_array($voyages_filtered)) {
    if (
        $priceFilter === 'croissant'
    ) {
        usort($voyages_filtered, 'comparePrice');
    } elseif (
        $priceFilters === 'decroissant'
    ) {
        usort($voyages_filtered, 'comparePrice');
        $voyages_filtered = array_reverse($voyages_filtered);
    }
} else {
    echo "Erreur : \$voyages n'est pas un tableau.";
}



// Boucle génération Cartes Personnage


if ($voyages_filtered !== null) {
    foreach ($voyages_filtered as $resultTriVoyage) {
        if (
            $resultTriVoyage !== null &&
            ($resultTriVoyage['id_categorie'] == $categorieFilter || $categorieFilter === 'all')
        ) {
            // récupération valeurs fichier json
            $title = $resultTriVoyage['title'];
            $id_categorie = $resultTriVoyage['id_categorie'];
            $price = $resultTriVoyage['price'];

            include "templateVoyage.php";


            echo $templateVoyage;
        } else {
            echo "Erreur : qsdfqsd.";
        }
    }
} else {
    echo "Erreur : \$voyages n'est pas un tableau.";
}
