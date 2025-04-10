<?php
require("backend/affichageSmartphone.php");
$nav = "index";
$title = "Bienvenue sur mon site de Smartphone";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php
include("includes/head.php");
?>
</head>
<body>
<?php
include("includes/header.php");
?>
<main>
<h1><?=$title?></h1>
<div class="sub__main--container">
<?php 
foreach ($view_smart_req as $smrt) {
?>
<article>
    <hgroup>
        <h3><?=$smrt["nom"]?></h3>
        <h4><?=$smrt["marque"]?></h4>
    </hgroup>
    <blockquote>
        <cite><?=$smrt["date_sortie"]?></cite>
    </blockquote>
</article>
<?php 
}
?>
</div>
</main>
<footer>
<?php
include("includes/footer.php");
?>
</footer>
    
</body>
</html>