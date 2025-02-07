<?php
//exo1
// $user1 = "Julien";
// $user2 = "Timothy";
// $user3 = "Franck";
// $user4 = "Saif";
// $user5 = "Olga";
// $user6 = "Aicha";
// $user7 = "Mohamed-Ali";
// $user8 = "Maxime";
// $user9 = "Carina";
// $user10 = "Hélène";

// echo $user1."<br>";
// echo $user2."<br>";
// echo $user3."<br>";
// echo $user4."<br>";
// echo $user5."<br>";
// echo $user6."<br>";
// echo $user7."<br>";
// echo $user8."<br>";
// echo $user9."<br>";
// echo $user10."<br>";

//exo2
// $users = ["Julien","Timothy","Franck","Saif","Olga","Aicha","Mohamed-Ali","Maxime","Carina","Hélène"];

// for ($i=0; $i < sizeof($users); $i++) { 
//     if($i < sizeof($users)-1){
//         echo $users[$i].",";
//     }else{
//         echo $users[$i];
//     }  
// }

//exo3
// $nombre = readline("Entrez un nombre : ");
// if(is_numeric($nombre)){
//     if($nombre % 2 === 0 ){
//         echo "Votre nombre ". $nombre . " est pair";
//     }else{
//         echo "Votre nombre ". $nombre . " est impair";
//     }
// }else{
//     echo "Vous n'avez pas introduis un nombre";
// }

//exo4
// $mot = readline("Introduisez un mot (ecrivez quitter pour sortir) : ");
// $mot = strtolower($mot);
// $tab = [];
// while ($mot != "quitter"){
//     //avec la fonction array_push pour ajouter les élèments dans un tableau
//     //array_push($tab, $mot);
//     $tab[] = $mot;
//     $mot = readline("Introduisez un mot (ecrivez quitter pour sortir) : ");
//     $mot = strtolower($mot);
// }

// //version pour afficher avec la boucle for
// for($i=0; $i < sizeof($tab); $i++){
//     echo $tab[$i] . "\n";
// }

// //version foreach
// foreach($tab as $valeur){
//     echo $valeur . "\n";
// }

// //version while
// $cpt = 0;
// while ($cpt < sizeof($tab)){
//     echo $tab[$cpt] . "\n";
//     $cpt++;
// }

//exo5 version sans tableau
// $mot = readline("Introduisez un mot (ecrivez fin pour sortir) : ");
// $mot = strtolower($mot);
// $cpt = 0;
// while ($mot != "fin"){
//     $cpt++;
//     $mot = readline("Introduisez un mot (ecrivez fin pour sortir) : ");
//     $mot = strtolower($mot);
// }
// echo "Vous avez introduis ". $cpt . " mots";

//exo5 version avec tableau
// $mot = readline("Introduisez un mot (ecrivez quitter pour sortir) : ");
// $mot = strtolower($mot);
// $tab = [];
// while ($mot != "quitter"){
//     //avec la fonction array_push pour ajouter les élèments dans un tableau
//     //array_push($tab, $mot);
//     $tab[] = $mot;
//     $mot = readline("Introduisez un mot (ecrivez quitter pour sortir) : ");
//     $mot = strtolower($mot);
// }
// echo "Vous avez introduis ". sizeof($tab) . " mots";

//exo6
// $montant = (int)readline("Entrez un montant : ");
// if($montant < 100 ){
//     echo "Vous n'avez pas assez d'argent";
// }else if($montant > 200){
//     echo "Vous avez dépassé le montant";
// }else{
//     echo "Le montant est correcte";
// }

//exo7 avec switch
// $salutation=  readline("Entrez une nombre 1= Bonjour, 2= Bonsoir, 3= Bien joué,4= bonne nuit, 5= à tantôt, 6=arrête un peu, 7=10 + 10 = 20  cls");
// switch($salutation){
//     case 1:
//     echo "bonjour !";
//     break;
//     case 2:
//     echo "bonsoir !";
//     break;
//     case 3:
//     echo "Bien joué!";
//     break;
//     case 4:
//     echo "bonne nuit !";
//     break;
//     case 5:
//     echo "à tantôt !";
//     break;
//     case 6:
//         echo "arrête un peu !";
//         break;
//         case 7:
//             echo "10 + 10 = 20 !";
//             break;
//     default:
//     echo "La terre est carrée";
//     }

    //exo7 en utilisant un tableau
// $tab = ["","bonjour","aurevoir","bien joué","bonne nuit","a tantôt","arrête un peu","10 + 10 = 20"];
// $cmd = readline("Entrer un chiffre :");
// if($cmd < 1 or $cmd >7){
//     echo "La terre est carré";
// }else{
//     echo $tab[$cmd];
// }

// $users = [
//     [
//         "firstname" => "Julien",
//         "gender" => "M",
//         "notes" => [84,56,41,19,87]
//     ],
//     [
//         "firstname" => "Kevin",
//         "gender" => "M",
//         "notes" => [78,55,71,25,64]
//     ],
//     [
//         "firstname" => "Eric",
//         "gender" => "M",
//         "notes" => [98,65,23,45,88]
//     ],
//     [
//         "firstname" => "Astrid",
//         "gender" => "F",
//         "notes" => [54,59,68,48,67]
//     ],
//     [
//         "firstname" => "Sarah",
//         "gender" => "F",
//         "notes" => [96,94,88,92,75]
//     ]
//     ];
    
    //exo8
    // foreach($users as $user){
    //     if($user["gender"] == "M"){
    //         echo "Le prénom est ". $user["firstname"] . " et son genre est ". $user["gender"] . "<br>"; 
    //     }
    // }

    //exo9
    // foreach($users as $user){
    //     if($user["gender"] == "F"){
    //         $max = max($user["notes"]);
    //         echo "Le prénom est ". $user["firstname"] . " et sa note max est de ". $max . "<br>"; 
    //     }
    // }

    //exo10
    // foreach($users as $user){
    //     $notes_inverse = array_reverse($user['notes']);
    //     echo "Prénom : ". $user['firstname']. ", notes inversé : ["; 
    //     foreach($notes_inverse as $note){
    //         echo $note. " ";
    //     }
    //     echo "]<br>";
    // }

    //exo11
    // $moy = 0;
    // for($i=0;$i < sizeof($users); $i++){
        // $moy = array_sum($users[$i]['notes']) / sizeof($users[$i]['notes']);
    //     echo $users[$i]['firstname'] . " " . $moy . "\n";
    // }

    //exo12
    // for($n=0; $n < sizeof($users);$n++){
    //     foreach($users[$n] as $cle => $valeur){
    //         if ($cle == 'notes'){
    //             echo $cle . ' : [';
    //             foreach($valeur as $note){
    //                 echo $note . "/100 ";
    //             }
    //             echo "]<br>";
    //         }else{
    //             echo $cle . " : ". $valeur. "<br>";
    //         }
    //     }
    //     echo "<br>";
    // }

    //exo12
//     foreach ($users as $user) {
//         foreach ($user as $name => $value) {
//           if(is_array($value)){
//             echo $name . " : [";
//               foreach ($value as $nombres) {
//                   echo $nombres."/100 ";
//               }
//               echo "]\n";
//           }else{
//               echo $name . " : " . $value."\n";
//           }
//         }
//         echo "\n";
//    }

// Créer un programme qui demande d’écrire des chiffres que vous mettrez dans un tableau pour arrêter le programme il faudra qu’il reçoit 0 (je veux que quand on écrit autre chose qu’un chiffre, ca ne le rajoute pas) , ensuite je veux que vous me trier ce tableau par ordre décroissant et m’affichez complètement. Puis que vous m’affichez aussi tout les chiffres multiples de 2 avec un message c’est un multiple de 2, les multiples de 3 avec un message c’est un multiple de 3, multiple de 5 et le message qui va avec.

//exo13
// $nombre = readline("Veuillez introduire un nombre (\"0\" pour arrêter) : "); 
// $tab = [];
// while ($nombre != 0 && is_numeric($nombre)){
//     $tab[] = $nombre;
//     //équivalent
//     //array_push($tab,$nombre);
//     $nombre = readline("Veuillez introduire un nombre (\"0\" pour arrêter) : ");  
// }
// if(!is_numeric($nombre)){
//     echo "Vous n'avez pas introduis un nombre !!! : ". $nombre. "\n";
// }
// rsort($tab);
// echo "Voici vos nombres trié de manière décroissante : [ ";
// foreach($tab as $nb){
//     echo $nb . " ";
// }
// echo "]\n";
// echo "Voici la liste des multiples\n";
// foreach($tab as $number){
//     if($number % 2 == 0){
//         echo $number . " est un multiple de 2\n";
//     }
//     if($number % 3 == 0){
//         echo $number . " est un multiple de 3\n";
//     }    
//     if($number % 5 == 0){
//         echo $number . " est un multiple de 5\n";
//     }
// }




// $nb1 = 10;
// $nb2 = 5;
// echo addition($nb1,$nb2);


// function addition(int $nb1, int $nb2): int{
//     $nb1 = 60;
//     return $nb1 +$nb2;
// }

// 1)	Je vais vous demandez de créer 10 utilisateurs qui recevront comme valeur nos prénoms. (Exemple $user1 = Julien, $user2 = Robert, $user3= Carine, etc…). Affichez-moi ensuite ces utilisateurs, l’un en dessous de l’autre (en php ou html).

function initialisation(): array{
    $user1 = "Julien";
    $user2 = "Timothy";
    $user3 = "Franck";
    $user4 = "Saif";
    $user5 = "Olga";
    $user6 = "Aicha";
    $user7 = "Mohamed-Ali";
    $user8 = "Maxime";
    $user9 = "Carina";
    $user10 = "Hélène";
    return array($user1,$user2,$user3,$user4,$user5,$user6,$user7,$user8,$user9,$user10);
}

function afficher(array $tableau): void{
    foreach($tableau as $valeur){
        echo $valeur . "\n";
    }
}


// $tab = initialisation();
// afficher($tab);
//version final sans passer par des variables
// afficher(initialisation());

//on peut utiliser la fonction afficher pour tous type de tableau a afficher
// $notes = [12,5,12.5,20,18.5];
// afficher($notes);
// $villes = ["Bruxelles","Paris","Liege","Anvers"];
// afficher($villes);

// 3)	Créez-moi un programme qui permet de vérifier si un nombre introduis au clavier est pair ou impair. Si on introduit autres choses qu’un nombre il doit nous renvoyer un message « vous n’avez pas introduit un nombre ».

function estPair(int $nombre): bool{
    if($nombre % 2 === 0 ){
        return true;
    }
    return false;
}

function estNumerique(mixed $valeur): bool{
    if(is_numeric($valeur)){
        return true;
    }
    return false;
}

//version simple
// $nbr = readline("Veuillez introduire un nombre : ");
// if(estNumerique($nbr)){
//     if(estPair($nbr)){
//         echo "Votre nombre ". $nbr . " est pair";
//     }else{
//         echo "Votre nombre ". $nbr . " est impair";
//     }
// }else{
//     echo "Vous n'avez pas introduis un nombre";
// }

//version avec 3eme fonction 
// $nbr = readline("Veuillez introduire un nombre : ");
// affichage($nbr,estNumerique($nbr),estPair($nbr));

// function affichage(mixed $val, bool $num, bool $pair): void{
//     if($num){
//         if($pair){
//             echo "Votre nombre ". $val . " est pair";
//         }else{
//             echo "Votre nombre ". $val . " est impair";
//         }
//     }else{
//         echo "Vous n'avez pas introduis un nombre";
//     }
// }



$users = [
    [
        "firstname" => "Julien",
        "gender" => "M",
        "notes" => [84,56,41,19,87]
    ],
    [
        "firstname" => "Kevin",
        "gender" => "M",
        "notes" => [78,55,71,25,64]
    ],
    [
        "firstname" => "Eric",
        "gender" => "M",
        "notes" => [98,65,23,45,88]
    ],
    [
        "firstname" => "Astrid",
        "gender" => "F",
        "notes" => [54,59,68,48,67]
    ],
    [
        "firstname" => "Sarah",
        "gender" => "F",
        "notes" => [96,94,88,92,75]
    ]
    ];
    
    // require "fct.php";
    // afficherHommeGenre($users);
    // afficherFemmeNoteMax($users);
    // afficherExo10($users);
    $ok = false;
    if($ok){
        $nb = 10;
    }
    echo $nb;

 




?>
