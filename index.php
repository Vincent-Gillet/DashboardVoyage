<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/asset/css/style.css" rel="stylesheet">
    <link href="/asset/css/connexion.css" rel="stylesheet">
</head>

<body>

    <!-- <script>
        // JavaScript pour empêcher la soumission automatique du formulaire
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("formulaireConnexion").addEventListener("submit", function(event) {
                // Empêcher la soumission du formulaire
                event.preventDefault();
                // Vous pouvez ajouter ici des vérifications supplémentaires si nécessaire
                // Par exemple, vérifier que les champs sont remplis correctement avant de soumettre le formulaire
                // Ensuite, soumettre le formulaire manuellement si les conditions sont remplies
                // this.submit();
            });
        });
    </script> -->


    <?php
        include('asset/php/class/classDb.php');
        include('asset/php/class/classVoyage.php');
    ?>


    <div id="backgroundConnexion">
        <?php include "asset/php/header.php"; ?>
        <div id="divConnexion">
            <div id="boxDestination">
                <h2>Connexion</h2>
                <form nom="inscription" method="POST" action="asset/php/class/classDb.php" id="formulaireConnexion">
                    <div class="champConnexion">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" id="nom" placeholder="Nom">
                    </div>
                    <div class="champConnexion">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
                    </div>
                    <input type="submit" name="submit" id="submit" value="Se connecter">
                    <p style="color:#A0AEC0;">Vous n’avez pas de compte ? <span style="font-weight: bold;color:#16526F;">S’inscrire</span></p>

                </form>

            </div>
        </div>


    </div>




    <script src="/asset/js/script.js"></script>
</body>

</html>