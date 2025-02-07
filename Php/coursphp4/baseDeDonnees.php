<?php
    $nav = "bd";
    $title = "bd";
    require "header.php";
    if(!is_connected()){
        header("Location: login.php");
    }


?>
<h1>Section Base de données</h1>
<?php 
    try{
        $pdo = new PDO('mysql:dbname=coursql4;host=localhost', "root",""); 
        //On définit le mode d'erreur de PDO sur Exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion réussie';
        $resultat = $pdo->query('SELECT * FROM users');
        var_dump($resultat->fetchAll());
    }catch (PDOException $e){
        die('Erreur : '. $e->getMessage());
    }

?>
<?php 
    require "footer.php";
    ?>