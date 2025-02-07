<?php

// une fonction « tailleTab » qui reçoit un tableau en paramètre et qui renvoi la taille du tableau.
function tailleTab(array $tab): int{
    return sizeof($tab);
}

// une fonction « affichageTabSimple » qui reçoit un tableau en paramètre et qui permet d’afficher ce tableau.
function affichageTabSimple(array $tab): void{
    foreach($tab as $val){
        echo $val . " ";
    }
    echo "\n";
}

// « fonctionsTab.php » créez une fonction « estLeMeme » qui reçoit deux tableaux en paramètre et qui retourne un booléen qui dit s’ils ont les mêmes valeurs. 

function estLeMeme(array $tab1, array $tab2): bool{
    $resultat = true;
    $cpt = 0;
    while ($cpt < sizeof($tab1) && $resultat){
        if ($tab1[$cpt] != $tab2[$cpt]){
            $resultat = false;
        }
        $cpt++;
    }
    return $resultat;
}

