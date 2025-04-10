<?php 
    try{
        $bdd = new PDO('mysql:dbname=cfitech_mobile;host=localhost', "root",""); 
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e){
        die('Erreur de connexion : '. $e->getMessage());
    }

?>
