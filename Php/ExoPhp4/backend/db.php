<?php 
    try{
        $bdd = new PDO('mysql:dbname=coursql4;host=localhost', "root",""); 
        //On définit le mode d'erreur de PDO sur Exception
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
    }catch (PDOException $e){
        die('Erreur : '. $e->getMessage());
    }

?>
