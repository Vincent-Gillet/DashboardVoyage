<?php

require_once "../class/classVoyage.php";
require_once "../class/classDb.php";



$voyage = new Voyage();


$voyage->select($id_voyage, $id_categorie, $id_formule, $title, $date_debut, $date_fin, $price, $image_url, $description);


header("Location: ../ajouter.php?id_voyage=" . $id_voyage);
exit;
