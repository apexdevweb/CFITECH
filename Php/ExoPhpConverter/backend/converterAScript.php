<?php
if (isset($_POST["convert"])) {
    if (!empty($_POST["eur"])) {
        $deviceInfo = "USD";
        $euro = htmlspecialchars($_POST["eur"]);
        //on récupère le taux de convertion de la devise en question
        $convertion_taux = 1.04;
        //on fait la devise multiplier par le taux de convertion
        $resultatUSD = $euro * $convertion_taux;
        //on sauvegarde le résultat dans une superglobale $_SESSION[] pour pouvoir afficher le résultat ou l'on veux
        $_SESSION["convertResultat"] = $resultatUSD;
        $_SESSION["infoDevice"] = $deviceInfo;
    }
}
