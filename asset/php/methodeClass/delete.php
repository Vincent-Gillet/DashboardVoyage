<?php

require_once "../class/classVoyage.php";

$id_voyage = $_GET['id_voyage'];

$voyage = new Voyage();

$voyage->delete($id_voyage);

header("Location: /listeVoyage.php");
exit;
