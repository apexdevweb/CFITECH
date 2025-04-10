<?php
require("connection/connexion.php");
try {
    $view_smart_req = $bdd->prepare("SELECT * FROM `smartphones`");
    $view_smart_req->execute();
} catch (PDOException $e) {
    die('Erreur de selection dans la Bdd : '. $e->getMessage());
}
