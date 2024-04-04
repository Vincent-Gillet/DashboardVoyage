<?php

require_once "classDb.php";

class Categorie
{

    public $id_categorie;
    public $nom;



    public function selectCategorie($id_categorie)

    {
        try {
            $db = new Db;
            $resultSelectCategorie = $db->login()->query("SELECT  *  FROM `voyage` WHERE id_categorie = $id_categorie");
            return $resultSelectCategorie->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }
    // {

    //     $db = new Db;
    //     $db->login();
    //     $select = $db->login();

    //     $select->query("SELECT id_categorie, nom FROM categorie");

    //     $db->logout();
    // }

}


// require_once "fichier/class"
// include_once "fichier/class"