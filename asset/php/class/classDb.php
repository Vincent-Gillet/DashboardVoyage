<?php
session_start();

class Db
{

    private $host;
    private $dbname;
    private $username;
    private $passworddb;
    public $connection;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->dbname = 'jcp_vacances';
        $this->username = 'root';
        $this->passworddb = 'root';
    }

    public function login()
    {
        $this->connection = null;

        try {
            $this->connection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->username, $this->passworddb);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Vous êtes connecté";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }

        return $this->connection;
    }

    public function logout()
    {
        $this->connection = null;
        // echo "Vous êtes déconnecté";
        session_destroy();
    }


    // $db = new Db;

    // $db->login();
    // // $db->connnect();
    // // $db->prepare();


    public function verifyUser($nom, $mdp)
    {
        try {
            $recupUser = $this->connection->prepare("SELECT * FROM user WHERE nom = :nom AND mdp = :mdp");
            $recupUser->bindParam(':nom', $nom);
            $recupUser->bindParam(':mdp', $mdp);
            $recupUser->execute();
            $result = $recupUser->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }
}


if (isset($_POST['nom']) && isset($_POST['mdp'])) {

    $nom = $_POST['nom'];
    $mdp = $_POST['mdp'];

    // Connexion à la base de données
    $db = new Db();
    $connection = $db->login();

    // Vérification de l'utilisateur
    if ($db->verifyUser($nom, $mdp)) {
        echo "Authentification réussie!";
        $_SESSION['nom'] = $nom;
        header("Location: http://localhost:8888/listeVoyage.php");
        exit;
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect!";
        header("Location: http://localhost:8888/index.php");
        exit;
    }
}
