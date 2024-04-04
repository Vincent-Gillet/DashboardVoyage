<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/asset/css/style.css" rel="stylesheet">
    <link href="/asset/css/ajouter.css" rel="stylesheet">
</head>

<body>

    <?php
    
    $url = $_SERVER['REQUEST_URI'];

    require_once "asset/php/class/classVoyage.php";
    require_once "asset/php/class/classDb.php";

    $voyage = new Voyage();

    if (strpos($url, 'id_voyage=') !== false) {
        $variable = $voyage->select($_GET['id_voyage']);
    }


    ?>

    <div id="backgroundAjouter">
        <?php
        // include "select.php"; 
        ?>
        <?php include "asset/php/header.php"; ?>
        <div id="dashboard">
            <?php include "asset/php/menudashboard.php"; ?>
            <div id="boxDestination">
                <div id="listeVoyages">
                    <?php
                    if (strpos($url, 'id_voyage=') !== false) {
                        $action = "asset/php/methodeClass/edit.php?id_voyage=" . $variable['id_voyage'];
                        // ?id_voyage=".<?php $variable['voyage']; 
                        $titre = "Modifier destination";
                    } else {
                        $action = "asset/php/methodeClass/add.php";
                        $titre = "Nouvelle destination";
                    } ?>
                    <h2><?php echo $titre; ?></h2>
                    <form name="" method="post" id="formAdd" action="<?php echo $action; ?>">
                        <div id="colonneAdd">
                            <div class="colonneAdd">
                                <div class="champConnexion">
                                    <label for="title">Destination</label>
                                    <input type="text" name="title" id="title" placeholder="Destination" value="<?php 
                                    if (strpos($url, 'id_voyage=') !== false) {
                                        echo $variable['title'];
                                    }
                                    ?>">
                                </div>
                                <div class="champConnexion">
                                    <label for="categorie">Catégorie</label>
                                    <select name="categorie" id="categorie">
                                        <option value="">Catégorie</option>
                                        <?php
                                        // require_once "asset/php/class/classVoyage.php";
                                        // $categories = $_GET['id_categorie'];

                                        // foreach ($categories as $categorie) {
                                        //     echo "
                                        //         <option value=" . $categorie['id'] . ">" . $categorie['name'] . "</option>
                                        //     ";
                                        // }
                                        ?>
                                        <option value="1" <?php 
                                                            if (strpos($url, 'id_voyage=') !== false) {
                                                                if ($variable['id_categorie'] == 1) {
                                                                        echo "selected";
                                                                }
                                                            } 
                                                              ?>>Mer</option>
                                        <option value="2" <?php 
                                                            if (strpos($url, 'id_voyage=') !== false) {
                                                                if ($variable['id_categorie'] == 2) {
                                                                        echo "selected";
                                                                }
                                                            } 
                                                            ?>>Montagne</option>
                                        <option value="3" <?php 
                                                            if (strpos($url, 'id_voyage=') !== false) {
                                                                if ($variable['id_categorie'] == 3) {
                                                                        echo "selected";
                                                                }
                                                            } 
                                                            ?>>Campagne</option>
                                    </select>
                                </div>
                                <div class="champConnexion">
                                    <label for="formule">Formule</label>
                                    <select name="formule" id="formule">
                                        <option value="">Formule</option>
                                        <option value="1" <?php 
                                                            if (strpos($url, 'id_voyage=') !== false) {
                                                                if ($variable['id_formule'] == 1) {
                                                                        echo "selected";
                                                                }
                                                            } 
                                                            ?>>classique</option>
                                        <option value="2" <?php 
                                                            if (strpos($url, 'id_voyage=') !== false) {
                                                                if ($variable['id_formule'] == 2) {
                                                                        echo "selected";
                                                                }
                                                            } 
                                                            ?>>2 en 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="colonneAdd">
                                <div class="champConnexion">
                                    <div class="champConnexion">
                                        <label for="dateDebut">Date début</label>
                                        <input type="date" name="dateDebut" id="dateDebut" placeholder="Date début" value="<?php echo $variable['date_debut']; ?>">
                                    </div>
                                    <div class="champConnexion">
                                        <label for="dateFin">Date fin</label>
                                        <input type="date" name="dateFin" id="dateFin" placeholder="Date fin" value="<?php echo $variable['date_fin']; ?>">
                                    </div>
                                    <div class="champConnexion">
                                        <label for="prix">Prix</label>
                                        <input type="number" name="prix" id="prix" placeholder="Prix" value="<?php echo $variable['price']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="champConnexion">
                            <label for="image">Image</label>
                            <input type="text" name="image" id="image" placeholder="url image" value="<?php 
                                if (strpos($url, 'id_voyage=') !== false) {
                                    echo $variable['image_url'];
                                }
                                ?>">
                        </div>
                        <div id="champDescription">
                            <label for="description">Description</label>
                            <textarea name="descriptionVoyage" id="descriptionVoyage" placeholder="Description" rows="7" cols="50"><?php 
                                if (strpos($url, 'id_voyage=') !== false) {
                                    echo $variable['descriptionVoyage'];
                                }                                 
                             ?></textarea>
                        </div>
                        <input type="submit" name="submit" id="submit" value="Enregistrer">
                    </form>
                    <?php
                    // include_once "ajouter.php" 
                    ?>
                </div>

            </div>







        </div>
        <div id="backgroundTransi"></div>
        <div id="backgroundEnd"></div>
    </div>



    <script src="/asset/js/script.js"></script>
</body>

</html>