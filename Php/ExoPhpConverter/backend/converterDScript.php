<?php
if (isset($_POST["convert"])) {
    if (!empty($_POST["eur"])) {
        $deviceInfo = "Francs-RDC";
        $euro = htmlspecialchars($_POST["eur"]);
        //on récupère le taux de convertion de la devise en question
        $convertion_taux = 2962.91000;
        //on fait la devise multiplier par le taux de convertion
        $resultatFRDC = $euro * $convertion_taux;
        //on sauvegarde le résultat dans une superglobale $_SESSION[] pour pouvoir afficher le résultat ou l'on veux
        $_SESSION["convertResultat"] = $resultatFRDC;
        $_SESSION["infoDevice"] = $deviceInfo;
    }
}
