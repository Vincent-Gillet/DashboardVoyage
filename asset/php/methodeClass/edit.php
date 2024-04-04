<?php

require_once "../class/classVoyage.php";


$id_voyage = intval($_GET['id_voyage']);
$id_categorie = intval($_POST['categorie']);
$id_formule = intval($_POST['formule']);
$title = $_POST['title'];
$date_debut = $_POST['dateDebut'];
$date_fin = $_POST['dateFin'];
$price = intval($_POST['prix']);
$image_url = $_POST['image'];
$descriptionVoyage = $_POST['descriptionVoyage'];
// var_dump($id_categorie);
// var_dump($id_formule);
// var_dump($title);
// var_dump($date_debut);
// var_dump($date_fin);
// var_dump($price);
// var_dump($image_url);
// var_dump($descriptionVoyage);

$voyage = new Voyage();



$voyage->edit($id_voyage, $id_categorie, $id_formule, $title, $date_debut, $date_fin, $price, $image_url, $descriptionVoyage);

var_dump($voyage);

// $id_voyage = $_GET['id_voyage'];

// $voyage = new Voyage();

// $voyage->edit($id_voyage);



header("Location: /listeVoyage.php");
exit;
