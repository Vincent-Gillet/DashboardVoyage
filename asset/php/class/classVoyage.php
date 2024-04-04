<?php

require_once "classDb.php";

class Voyage
{
    private $id_voyage;
    private $id_categorie;
    private $id_formule;
    private $title;
    private $date_debut;
    private $date_fin;
    private $price;
    private $image_url;
    private $descriptionVoyage;
    public $db;
    public $result;





    public function add($id_categorie, $id_formule, $title, $date_debut, $date_fin, $price, $image_url, $descriptionVoyage)
    {

        $db = new Db;
        $add = $db->login();



        $add->query("INSERT INTO `voyage` SET id_categorie = '$id_categorie', id_formule = '$id_formule', title = '$title', date_debut = '$date_debut', date_fin = '$date_fin', price = '$price', image_url = '$image_url', descriptionVoyage = '$descriptionVoyage'");

        $db->logout();
    }

    public function delete($id_voyage)
    {
        $db = new Db;
        $db->login();
        $delete = $db->login();

        $delete->query("DELETE FROM voyage WHERE id_voyage=$id_voyage");

        $db->logout();
    }




    public function select($id_voyage)
    {
        try {
            $db = new Db('mysql:host=localhost;dbname=jcp_vacances', 'root', 'root');
            $select = $db->login()->prepare("SELECT * FROM voyage WHERE id_voyage = :id_voyage");
            $select->bindValue(':id_voyage', $id_voyage, PDO::PARAM_INT);
            $select->execute();
            $resultSelect = $select->fetch(PDO::FETCH_ASSOC);

            return $resultSelect;
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }






    public function edit($id_voyage, $id_categorie, $id_formule, $title, $date_debut, $date_fin, $price, $image_url, $descriptionVoyage)
    {
        $db = new Db;
        $db->login();
        $edit = $db->login();

        $edit->query("UPDATE `voyage` SET id_categorie = '$id_categorie', id_formule = '$id_formule', title = '$title', date_debut = '$date_debut', date_fin = '$date_fin', price = '$price', image_url = '$image_url', descriptionVoyage = '$descriptionVoyage' Where id_voyage=$id_voyage");


        $db->logout();
    }




    public function tri($id_categorie)
    {

        try {
            $db = new Db;
            $tri = $db->login()->query("SELECT  *  FROM `voyage` WHERE id_categorie = $id_categorie");
            return $tri->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }


    // try {
    //     $db = new Db('mysql:host=localhost;dbname=jcp_vacances', 'root', 'root');
    //     $tri = $db->login()->prepare("SELECT * FROM voyage");
    //     $tri->execute();
    //     $resultTri = $tri->fetch(PDO::FETCH_ASSOC);
    //     exit(json_encode($resultTri));

    //     return $resultTri;
    // } catch (PDOException $e) {
    //     echo "Erreur : " . $e->getMessage();
    //     return false;
    // }
    // }



}
