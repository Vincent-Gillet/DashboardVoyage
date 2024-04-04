<?php

    $templateVoyage = '

    <HR>
    <div class="listeVoyage">
        <p>' . $resultTriVoyage['title'] . '</p>
        <p>' . $resultTriVoyage['id_categorie'] . '</p>
        <p>' . $resultTriVoyage['price'] . ' €</p>
        <div class="buttonVoyage">
            <a href="ajouter.php?id_voyage=' . $resultTriVoyage["id_voyage"] . '">Modifier</a>
            <a href="asset/php/methodeClass/delete.php?id_voyage=' . $resultTriVoyage["id_voyage"] . '">Supprimer</a>
        </div>
    </div>

    ';
