<?php 

function afficherHommeGenre(array $lesPersonnes): void{
    foreach($lesPersonnes as $personne){
        if($personne["gender"] == "M"){
            echo "Le prénom est ". $personne["firstname"] . " et son genre est ". $personne["gender"] . "<br>"; 
        }
    }
}

function afficherFemmeNoteMax(array $users): void{
    foreach($users as $user){
            if($user["gender"] == "F"){
                $max = max($user["notes"]);
                echo "Le prénom est ". $user["firstname"] . " et sa note max est de ". $max . "<br>"; 
            }
        }
}

function afficherExo10(array $users): void{
    foreach($users as $user){
        $notes_inverse = array_reverse($user['notes']);
        echo "Prénom : ". $user['firstname']. ", notes inversé : ["; 
        foreach($notes_inverse as $note){
            echo $note. " ";
        }
        echo "]<br>";
    }
}

$tab1 = [89.5,75.5,49.5];
$tab2 = [96.0,75.0,60.0];
$tab3 = [89.5,75.5,49.5];
