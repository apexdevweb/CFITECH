<?php
    // $tabIndexe = [
    //     'firstname' => 'Lara',
    //     'lastname' => 'Croft',
    //     'sexe' => 'F',
    //     'dateOfBirth' => "24/10/1995",
    //     'city'=> 'London'
    // ];
    // var_dump($tabIndexe);
    
    //exo1
    // $notes = [18,13,5,10,9];
    // echo "Votre tableau est : [ ";
    // foreach($notes as $note){
    //     echo $note . " ";
    // }
    // echo " ]<br>";
    // $max = max($notes);
    // echo "Voici la valeur max : ".$max;

    //exo2
    // $mot = readLine("Entrer votre mot : ");
    // $motInverse =  strrev($mot);
    // echo $mot;
    // if($mot == $motInverse){
    //     echo " est un palindrome";
    // } else {
    //     echo " n'est pas un palindrome"; 
    // }

    //exo3
    // $mot = readline("Veuillez entrez un mot : ");
    // $mot = strtolower($mot);

    // $mot2 = strrev($mot);
    // if($mot2 === $mot){
    //     echo "Votre mot '".$mot."' est un palindrome";
    // }else{
    //     echo "Votre mot '".$mot."' n'est pas un palindrome";
    // }

    //exo4
    // $note = [18,13,5,9,10];
    // $sum = array_sum($note);
    // $moy = $sum/sizeof($note);
    // echo $moy;

    //exo5
    $notes = [18, 13, 5, 9, 10];
    $tabReverse = array_reverse($notes);
    echo "Voici votre tableau : [ ";
    foreach($notes as $note){
            echo $note . " ";
    }
    echo " ]<br>";
    echo "Voici votre tableau inversé : [ ";
    foreach($tabReverse as $note){
        echo $note . " ";
    }
    echo " ]<br>";

    //exo5 avec virgule
    $notes = [18, 13, 5, 9, 10];
    $tabReverse = array_reverse($notes); 
    $cpt = 0;
    echo "Version avec virgule <br>";
    echo "Voici votre tableau : [ ";
    foreach($notes as $note){
        if($cpt != sizeof($notes)-1){
            echo $note . ", "; 
        }else{
            echo $note;
        }
        $cpt++;
    }
    echo " ]<br>";
    $cpt=0;
    echo "Voici votre tableau inversé : [ ";
    while ($cpt < sizeof($tabReverse)){
        if($cpt != sizeof($tabReverse)-1){
            echo $tabReverse[$cpt] . ", "; 
        }else{
            echo $tabReverse[$cpt];
        }
        $cpt++;
    }
    echo " ]<br>";

    //exo6
    $notes = [18, 13, 5, 10, 9];
    sort($notes);
    echo "Voici le tableau trié de manière croissante : [ ";
    foreach ($notes as $note) {
        echo $note . " ";
    }
    echo "]<br>";

    
    //exo7
    $notes = [18, 13, 5, 10, 9];
    rsort($notes);
    echo "Voici le tableau trié de manière décroissante : [ ";
    foreach ($notes as $note) {
        echo $note . " ";
    }
    echo "]<br>";
?>