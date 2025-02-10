<?php
require("backend/db.php");
$req_artcl = $bdd->prepare("SELECT * FROM articles LIMIT 3");
$req_artcl->execute();
?>