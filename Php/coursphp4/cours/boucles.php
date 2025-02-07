<?php
    // $nombre=(int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");
    // while($nombre !== 0){
    //     echo "Voici votre nombre : ". $nombre . "\n";
    //     $nombre=(int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");
    // }

    // $nombre=(int)readline("Entrez un nombre entre 0 et 10 pour gagner un lot : ");
    // $numeroGagnant = rand(0,10);
    // while($nombre !== $numeroGagnant){
    //     echo "Mauvais numéro, vous n'avez pas gagné !". "\n";
    //     $nombre=(int)readline("Retentez votre chance, entrez un nombre à nouveau : "); 
    // }
    // echo "Bravo !!! \nVous avez enfin trouvé le numéro gagnant ! \nC'était le numéro " . $numeroGagnant;

    //exo1
    // $mot = readline("Entrez un mot au clavier (entrez \"stop\" pour arrêter) : ");
    // while ($mot !== "stop"){
    //     echo "Voici votre mot : ".$mot . "\n";
    //     $mot = readline("Entrez un mot au clavier (entrez \"stop\" pour arrêter : ");
    // }
    // echo "Vous avez quitté le programme !!!";

    // for($i=0; $i < 10;$i++){
    //     echo $i . "<br>";
    // }

    // $cpt = 0;
    // while($cpt < 10){
    //     echo $cpt . "<br>";
    //     $cpt++;
    // }

    // $notes = [18,13,5,9,10,5,4,5,56,2,2,5,5,5,5,8,5,6,5,6,5,6,5,6,45,6,45,5,5,6,5,5,4,5,4,5,4,5,4,2,5,51,5,65,6,5,4,2,85,2,85,2,85,1];
    // // echo $notes[0] . " " .$notes[1] . " ".$notes[2] . " ".$notes[3] . " ".$notes[4] . " ";
    // for($i=0; $i < sizeof($notes); $i++){
    //     echo $notes[$i] . " ";
    // }

    //exo1
    // $joursDeSemaine = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"];
    // for($i = 0; $i < sizeof($joursDeSemaine); $i++){
    //     echo $joursDeSemaine[$i]. "<br>";
    // }

    //exo2
    // $mois = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
    // for($i=1; $i < sizeof($mois); $i+=2){
    //     echo $mois[$i]. " ";
    // }
    // //exo2 moins simple
    // for($i=0; $i < sizeof($mois); $i++){
    //     if($i % 2 == 1){
    //         echo $mois[$i]. " ";
    //     }
    // }

    //exo3
    // $nombre = [11,18,99,17,65220,6485,78,97,48,2,112];
    // for($i = 0; $i < sizeof($nombre);$i++){
    //     $note = $nombre[$i];
    //     if($note % 2 === 0){
    //         echo $note . " est pair<br>";
    //     }
    // }

    // $notes = [18,13,5,9,10];
    

    // echo "Affichage d'un tableau avec la boucle for<br>";
    // for($i=0; $i < sizeof($notes); $i++){
    //     echo $notes[$i] . " ";
    // }

    // echo "<br>Affichage d'un tableau avec la boucle while<br>";
    // $cpt = 0;
    // while ($cpt < sizeof($notes)){
    //     echo $notes[$cpt] . " ";
    //     $cpt++;
    // }
    
    // echo "<br>Affichage d'un tableau avec la boucle foreach<br>";
    // foreach ($notes as $note) {
    //     echo $note . " ";
    // }

    // $user1 =[
    //     'firstname' => 'Lara',
    //     'lastname' => 'Croft',
    //     'gender' => 'F',
    //     'dateOfBirth' => "15/03/1995",
    //     'city'=> 'London',
    // ];

    // foreach($user1 as $cle => $valeur){
    //     echo $cle . " : " . $valeur . "\n";
    // }

    // $user2 = [
    //     'firstname' => 'Lara',
    //     'lastname' => 'Croft',
    //     'gender' => 'F',
    //     'dateOfBirth' => "23/10/1995",
    //     'notes' => [18,13,5,10,9],
    //     'city'=> 'London'
    // ];

    // foreach($user2 as $cle => $valeur){
    //     if ($cle == 'notes'){
    //         echo $cle . " : [";
    //         foreach($valeur as $note){
    //             echo $note . "/20 ";
    //         }
    //         echo "]<br>";
    //     }else{
    //         echo $cle . " : " . $valeur . "<br>";
    //     }
    // }

    //exo1
    // $mois = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
    // foreach($mois as $valeur){
    //     if ($valeur == "Décembre"){
    //         echo $valeur;
    //     }else{
    //         echo $valeur.  " - ";
    //     }
    // }

    //exo1 version 2
    // echo $mois[0];   
    // for($i = 1; $i < sizeof($mois);$i++){
    //     echo " - ". $mois[$i];
    // }

    //exo1 version plus complexe mais plus complète
    // for($i = 0; $i < sizeof($mois); $i++){
    //     echo $mois[$i];
    //     if($i !== sizeof($mois)-1){
    //         echo " - "; 
    //     }
    // }

    //différence entre rand sans paramètres et avec
    // $val1 = rand();
    // echo "Voici le rand sans paramètre : " . $val1 . "<br>";
    // $val2 = rand(0,1000);
    // echo "Voici le rand avec paramètre de 0 à 1000 : " . $val2 . "<br>";
            
    //exo2 version foreach
    // $note = [18,13,5,9,10];
    // foreach($note as $valeurs){
    //     if($valeurs >10){
    //         echo "Tu as réussi avec la note de ".$valeurs."/20\n";
    //     }elseif($valeurs ==10){
    //         echo "Tu as eu tout pile la moitié ".$valeurs."/20\n";
    //     }else{
    //         echo "Tu as raté avec la note de ".$valeurs."/20\n";
    //     }
    // }

    //version for
    // $notes = [18,13,5,9,10];
    // for($n=0; $n < sizeof($notes); $n++) {
    //     if($notes[$n] >= 11){
    //         echo "Tu as réussi avec la note de ".$notes[$n]."/20."."<br>";
    //     }else if($notes[$n] === 10){
    //         echo "Tu as eu tout pile la moitié ".$notes[$n]."/20."."<br>";
    //     }else{
    //         echo "Tu as raté avec la note de ".$notes[$n]."/20."."<br>";
    //     }
    // }

    //exo3
    // Déclaration des variables 
    // Déclaration du tableau vide
    // $tab=[];
    // Déclaration de la variable mot de type String vide
    // $mot="";

    //Définition de la condition de la boucle
    // la valeur de la variable de type String mot doit être différent du String "stop"
    //Début de la boucle
    // while ($mot !== "stop")
    // {
    //     //Demande à l'utilisateur d'intrduire un mot
    //     $mot=readline("Entrez un mot (entrez stop pour arrêter) : ");
    //     //Insère une nouvelle valeur à mon tableau 
    //     if ($mot != "stop" ){
    //         $tab[]= $mot ;
    //     }
    // }
    // FIn de la boucle

    // $cpt = 0;
    //Mon tableau contient tout les mots que l'utilisateur a introduit
    //Par contre rien ne s'affiche ! 
    //Pour afficher le contenu du tableau je créé une nouvelle boucle 
    // Parcours le tableau et stock chaque entrée (valeur d'un tableau) dans une nouvelle variable temporaire appelé $valeur
    //Début de la boucle
    // foreach ($tab as $valeur) 
    // {
    //     //A chaque entrée de mon tableau, affiche moi sa valeur sauf si c'est stop
    //     if($cpt != sizeof($tab)-1){
    //         echo $valeur . ", "; 
    //     }else{
    //         echo $valeur;
    //     }
    //     $cpt++;
    // }
    //Fin de la boucle
    
    
    //exo4
    $classe = [
        [
            'firstname' => "Julien",
            'lastname' => "Dunia",
            'notes' => [8, 15, 12]
        ],
        [
            'firstname' => "Hakima",
            'lastname' => "Darmouch",
            'notes' => [18, 5, 10]
        ],
        [
            'firstname' => "Christian",
            'lastname' => "Bale",
            'notes' => [7, 19, 5]
        ]
    ];
    
    foreach($classe as $tableauclasse){
        foreach($tableauclasse as $nomi => $valeur){
            if(is_array($valeur)){
                echo $nomi . " : ";
                $somme = 0;
                foreach($valeur as $pointpp){
                    $somme += $pointpp; //equivalent $somme = $somme + $pointpp
                }
                echo 'Moyenne ' . ($somme/sizeof($valeur)) . "\n";
            }
            else{
                echo $nomi . ' : ' . $valeur . "\n";
            }
        }
        echo "\n";
    }
?>