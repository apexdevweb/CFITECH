<?php

// 5)	Dans « main.php », demandez à l’utilisateur d’introduire un mot, utilisez les fonctions pour vérifier que ce n’est pas un numérique. S’il est numérique il faut envoyer un message d’erreur, en disant qu’il faut introduire un mot. Dans le cas ou ce n’est pas un numérique, vérifiez s’il est palindrome ou pas. 
require "fonctions/fonctionsString.php";
require "fonctions/fonctionsTab.php";
// $mot = readline("Veuillez introduire un mot : ");
// if (estPasNumerique($mot)){
//     echo estPalindrome($mot);
// }else{
//     echo "Vous n'avez pas introduis un mot !!!\n";
// }

// 8)	Dans « main.php », créez 2 utilisateurs dans un tableau de tableaux indexé avec comme indexe prenom et nom. Le premier utilisateur c’est Julien Dunia et le deuxième c’est votre prénom et nom de famille.
$users = [
    [
        "prenom" => "Julien",
        "nom" => "Dunia"
    ],
    [
        "prenom" => "Kevin",
        "nom" => "DeBruyne"
    ]
    ];

    // « main.php », à l’aide d’une boucle et en utilisant les fonctions essayer de m’afficher les prénoms normalement et les noms en majuscule. 
// foreach($users as $user){
//     affichageTabSimple($user);
// }

// foreach($users as $user){
//     affichageTabSimple2($user);
// }

$tab1 = [89.5, 75.5, 49.5];
$tab2 = [96.0, 75.0, 60.0];
$tab3 = [89.5, 75.5, 49.5];
$tab4 = [48.5, 99.0];
$tabs = [$tab1,$tab2,$tab3,$tab4];
for($i=0; $i < sizeof($tabs); $i++){
        echo "Taille du tableau ". $i+1 . " est de " .tailleTab($tabs[$i]) . "\n";
    }
for($i=0; $i < sizeof($tabs); $i++){
    affichageTabSimple($tabs[$i]);
}

// 14)	Dans « main.php », comparer le premier tableau avec le 2ème en utilisant la fonction. Il doit vous donner un message si c’est le même ou pas. 
// 15)	Dans « main.php », comparer le premier tableau avec le 3ème en utilisant la fonction. Il doit vous donnez un message si c’est le même ou pas.
if(estLeMeme($tab1,$tab2)){
    echo "Vos tableaux sont identiques \n";
}else{
    echo "Vos tableaux ne sont pas identiques \n";
}

if(estLeMeme($tab1,$tab3)){
    echo "Vos tableaux sont identiques \n";
}else{
    echo "Vos tableaux ne sont pas identiques \n";
}