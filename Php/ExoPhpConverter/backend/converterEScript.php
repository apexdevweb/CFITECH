<?php
if (isset($_POST["convert"])) {
    if (!empty($_POST["eur"])) {
        $deviceInfo = "Dirham";
        $euro = htmlspecialchars($_POST["eur"]);
        //on récupère le taux de convertion de la devise en question
        $convertion_taux = 3.82;
        //on fait la devise multiplier par le taux de convertion
        $resultatDRHM = $euro * $convertion_taux;
        //on sauvegarde le résultat dans une superglobale $_SESSION[] pour pouvoir afficher le résultat ou l'on veux
        $_SESSION["convertResultat"] = $resultatDRHM;
        $_SESSION["infoDevice"] = $deviceInfo;
    }
}
