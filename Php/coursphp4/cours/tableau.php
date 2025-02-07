<?php
    // $notes = [18,13,5,9,10];
    // // //affiche la troisième note
    // echo $notes[2];

    // //autre manière de créer un tableau avec le mot clé array()
    // $notes = array(18,13,5,9,10);

    //exo1
    // $notes = [18,13,5,9,10];
    // $sommes = $notes[0] + $notes[1] + $notes[2] + $notes[3] + $notes[4];
    // $moyenne = $sommes/5;
    // echo "Voici la moyenne : ". $moyenne ."\nC'est la somme : ". $sommes;

    //exo2
    // $animal =["chien","chat","éléphant","tortue"];
    // echo "Le deuxième animal est : ". $animal[1]. "\nLe quatrième animal est : ". $animal[3];

    //exo3
    // $semaine = ['lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche'];
    // echo "Aujourd'hui, nous sommes ".$semaine[0] . "<br>Hier nous étions ". $semaine[6]. "<br>Demain nous serons ". $semaine[1];

    $tab = ["Jack", "Bauer", [18,13,5,9,10]];
    //recup la 4ème note de Jack Bauer
    // echo $tab[2][3];

    $users2 =[
        'firstname' => 'Frank',
        'lastname' => 'Billy',
        'gender' => 'M',
        'dateOfBirth' => "15/03/1995",
        'notes' => [18,13,5,10,9],
        'city'=> 'London',
        'JourSemain' => ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"]
    ];
    // $somme = $users2['notes'][0]+ $users2['notes'][1]+$users2['notes'][2]+$users2['notes'][3]+$users2['notes'][4];
    // echo $somme;
    // $moyenne = ($users2['notes'][0]+ $users2['notes'][1]+$users2['notes'][2]+$users2['notes'][3]+$users2['notes'][4])/5;
    // echo $moyenne;
    print_r($users2);
?>