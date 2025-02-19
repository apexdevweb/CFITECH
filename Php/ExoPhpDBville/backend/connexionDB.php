<?php
//on crée la class
class Connectdb
{
    //ajout des composants nécéssaire à la connection : 
    //nom de l'hote, nom de la db, nom d'utilisateur, le mot de pass, et on définie une variable connexion au préalable
    //afin de pouvoir la réutilisé pour le →$this->connexion← 
    private $host = "localhost";
    private $dbname = "cityproject";
    private $username = "root";
    private $password = "";
    private $connexion;
    //on défini un constructor avec un try à l'intérieur pour pouvoir géré les erreurs de connexion
    public function __construct()
    {
        try {
            $this->connexion = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8", $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die("Connexion ERROR" . $e->getMessage());
        }
    }
    // on défini un getters pour la récuperation de la connection
    public function getConnection()
    {
        return $this->connexion;
    }
}
//on instancie la connection
$dtb = new Connectdb();
//on récupère la connection
$bdd = $dtb->getConnection();
