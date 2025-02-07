<?php

function metEnMaj(string $mot): string{
    return strtoupper($mot);
}

function estPalindrome(string $mot): string{
    $motMin = strtolower($mot);
    if(strrev($motMin) === $motMin){
        return "Votre mot ". $mot . " est un palindrome\n";
    }
    return "Votre mot ". $mot . " n'est pas un palindrome\n";
}

function estPasNumerique(mixed $valeur): bool{
    return !is_numeric($valeur) ? true : false;
}

function affichageTabSimple2(array $tab): void{
    foreach($tab as $key => $val){
        if($key === "nom"){
            echo metEnMaj($val). " ";
        }else{
            echo $val . " ";
        } 
    }
    echo "\n";
}


