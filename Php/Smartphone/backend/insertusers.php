<?php
require_once("connection/connexion.php");
if (isset($_POST['register'])) {
    if (!empty($_POST['usr_pseudo']) && !empty($_POST['usr_age'])) {

        $users_name = htmlspecialchars($_POST['usr_pseudo']);
        $users_age = htmlspecialchars($_POST['usr_age']);

        try {
            $insert_users = $bdd->prepare("INSERT INTO users (`prenom`, `age`) VALUES (?,?)");
            $insert_users->execute([$users_name, $users_age]);
        } catch (PDOException $e) {
            die('Erreur d\'insertion : ' . $e->getMessage());
        }
    }
}
