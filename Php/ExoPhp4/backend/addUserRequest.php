<?php
require("backend/db.php");

if (isset($_POST["validate"])) {
  if (!empty($_POST["frstName"] && $_POST["lstName"] && $_POST["genre"] && $_POST["ville"] &&
  $_POST["poids"] && $_POST["date_naissance"])) {
    
    $user_fname = htmlspecialchars(strip_tags($_POST["frstName"]));
    $user_lname = htmlspecialchars(strip_tags($_POST["lstName"]));
    $user_genre = $_POST["genre"];
    $user_location = $_POST["ville"];
    $user_weight = htmlspecialchars(strip_tags($_POST["poids"]));
    $user_birthday = $_POST["dateNaissance"];

    $req_verif = $bdd->prepare("SELECT firstname FROM users");
    $req_verif->execute();

    if ($req_verif->rowCount() > 0) {
        echo "<h2>"."L'utilisateur existe déjà !"."</h2>";
    } else {
      try{
       $req_insert = $bdd->prepare("INSERT INTO `users`(`firstname`, `lastname`, `gender`, `date_of_birth`, `city`, `weight_kg`) VALUES (?,?,?,?,?,?)");
       $req_insert->execute(array($user_fname,$user_lname,$user_genre,$user_birthday,$user_location,$user_weight));
      }catch (PDOException $e){
        die("Erreur : " . $e->getMessage());
    }
      }
  }

} else {
   echo "<h2>"."ERROR"."</h2>";
}
