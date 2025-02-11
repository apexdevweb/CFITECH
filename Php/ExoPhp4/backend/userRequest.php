<?php
require("backend/db.php");
$req_user = $bdd->prepare("SELECT * FROM users LIMIT 13");
$req_user->execute();
?>

