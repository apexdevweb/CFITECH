<?php
    $heure = (int)readline('Entrez une heure : ');
    // if(($heure > 8 AND $heure <= 12) || ($heure >= 14 && $heure < 18)){
    //     echo "Le magasin sera ouvert à $heure heures";
    // }else{
    //     echo "Le magasin sera fermé à " . $heure ." heures";
    // }

    //exo1 en mode casse tête
    // if(($heure <= 8 OR $heure > 12 ) AND ($heure < 14 || $heure >= 18)){
    //     echo "Le magasin sera fermé à " . $heure ." heures";
    // }else{
    //     echo "Le magasin sera ouvert à $heure heures";
    // }

    //exo1 en mode chill
    // if(!(($heure > 8 AND $heure <= 12) || ($heure >= 14 && $heure < 18))){
    //     echo "Le magasin sera fermé à " . $heure ." heures";
    // }else{
    //     echo "Le magasin sera ouvert à $heure heures";
    // }

    $user1 = [
        'firstname' => 'Will',
        'lastname' => 'Smith',
        'gender' => 'M',
        'age' => 53,
        'vaccinated' => true
    ];
    $user2 = [
        'firstname' => 'Lara',
        'lastname' => 'Croft',
        'gender' => 'F',
        'age' => 17,
        'vaccinated' => false
    ];
    $user3 = [
        'firstname' => 'Marion',
        'lastname' => 'Cotillard',
        'gender' => 'F',
        'age' => 46,
        'vaccinated' => true
    ];
    $user = $user3;
    if ($user['age'] >= 18 && $user['vaccinated'] == true){
        echo "Bienvenue dans le club ". $user['firstname'] . " " . $user['lastname'] . ".<br>";
        if($user['gender'] == 'F'){
            echo "Prenez un bracelet rose";
        }else{
            echo "Prenez un bracelet bleu";
        }
    }else{
        echo "Désolé " .  $user['firstname'] . " " . $user['lastname'] . ", vous n'êtes ni majeur ni vacciné";
    }


        
        
?>
