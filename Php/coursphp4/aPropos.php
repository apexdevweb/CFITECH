<?php
require("baseDeDonnees.php");
    session_start();
    session_unset();
    $nav = "apropos";
    require "header.php";
?>
<h1>A propos de nous</h1>
<h3>Qui sommes nous vraiment ?</h3>
<p>Nous sommes un organisme de solidarité suisse.</p>

<?php
    require "footer.php";
?>