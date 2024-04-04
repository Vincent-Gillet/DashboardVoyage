<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/asset/css/style.css" rel="stylesheet">
</head>

<body>


    <div id="background">
        <?php include "asset/php/header.php"; ?>
        <div id="dashboard">
            <?php include "asset/php/menudashboard.php"; ?>
            <div id="boxDestination">
                <div>
                    <h4>Voyages</h4>
                    <div id="menuListeVoyage">
                        <h6>Lieux</h6>
                        <select name="" id="filterCategorie">
                            <option value="all">Catégorie</option>
                            <option value="1">Mer</option>
                            <option value="2">Montagne</option>
                            <option value="3">Campagne</option>
                        </select>
                        <select id="filterPrice">
                            <option value="">Prix</option>
                            <option value="croissant">Prix croissant</option>
                            <option value="decroissant">Prix décroissant</option>

                        </select>
                        <div id="vide"></div>
                    </div>

                </div>
                <div id="listeVoyages"> 
                    <!-- Génération Template Voyage -->
                </div>

            </div>

        </div>
        <div id="backgroundTransi"></div>
        <div id="backgroundEnd"></div>

    </div>


    <script src="/asset/js/script.js"></script>
</body>

</html>