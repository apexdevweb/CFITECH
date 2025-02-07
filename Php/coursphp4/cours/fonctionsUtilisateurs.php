<?php
    // hello();
    // function hello(){
    //     echo "Hello World";
    // }
    
    //exo1
    // hello("Zakaria");
    // hello("Clovis");
    // hello("Julien");
    // hello("Olga");
    // hello("Say");

    //exo2
    // $cpt = 0;
    // $prenoms = ["Zakaria","Clovis","Julien","Olga","Say"];
    // while ($cpt < sizeof($prenoms)){
    //     hello($prenoms[$cpt]);
    //     $cpt++;
    // }

    // function hello($prenom){
    //     echo "Hello ".$prenom . " !!!<br>";
    // }

    //exo2 avec return
    // $cpt = 0;
    // $prenoms = ["Zakaria","Clovis","Julien","Olga","Say"];
    // while ($cpt < sizeof($prenoms)){
    //     echo hello($prenoms[$cpt]);
    //     $cpt++;
    // }
    // function hello($prenom){
    //     return "Hello ".$prenom . " !!!<br>";
    // }
    //attention prénom n'existe que dans la fonction
    // echo $prenom;
    
    // function helloStyleJs($prenom){
    //     $x = "Hello ".$prenom . " !!!<br>";
    //     return $x;
    // }

    // function pi2(){
    //     return 3.14;
    // }

    
    // function hello($prenom){
    //     return "Hello ".$prenom . " !!!<br>";
    // }
    // $helloPrenom = hello("Julien");
    // echo $helloPrenom;

    //equivalent
    // echo hello("James");

    // function hello($prenom = null){
    //     if($prenom != null){
    //         return "Hello ".$prenom . " !!!<br>";
    //     }
    //     return "Hello World !!!<br>";      
    // }
    // echo hello("Julien");
    // echo hello();

    //exo3
    // $prenom = readline("Veuillez introduire votre prénom : ");
    // echo hello($prenom);
    // function hello($prenom = null){
    //     if($prenom != null){
    //         return "Hello ".$prenom . " !!!\n";
    //     }
    //     return "Hello World !!!\n";      
    // }

    //exo4 avec echo
    // function bienvenu($nom,$prenom,$age,$email){
    //     echo "Bienvenue " .$nom. " " .$prenom. " !\n";
    //     echo "Vous avez " .$age. " ans !\n";
    //     echo "Voici votre mail : " .$email. " !\n";
    // }
    // $prenom = readline("Veulliez entrer votre prénom : ");
    // $nom = readline("Veuillez entrer votre nom : ");
    // $age = readline("Veuillez entrer votre age : ");
    // $email = readline("Veuillez entrer votre email : ");
    // bienvenu($nom,$prenom,$age,$email);

    //exo4 avec return
    // function bienvenu2($nom,$prenom,$age,$email){
    //     return "Bienvenue " .$nom. " " .$prenom. " !\nVous avez " .$age. " ans !\nVoici votre mail : " .$email. " !\n";
    // }
    // $prenom = readline("Veulliez entrer votre prénom : ");
    // $nom = readline("Veuillez entrer votre nom : ");
    // $age = readline("Veuillez entrer votre age : ");
    // $email = readline("Veuillez entrer votre email : ");
    // echo bienvenu2($nom,$prenom,$age,$email);

    //exo5
    // $votreAge = readline("Veuillez introduire votre age : ");
    // echo adulte($votreAge);
    // function adulte($age){
    //     if($age >= 18){
    //         return "Vous êtes majeur";
    //     }
    //     return "Vous êtes mineur";
    // }

    //exo5 tout directement dans la fonction
    // echo adulte2();
    // function adulte2(){
    //     $age = readline("Veuillez introduire votre age : ");
    //     if($age >= 18){
    //         return "Vous êtes majeur";
    //     }
    //     return "Vous êtes mineur";
    // }
    
    //exo6
    // $nb1 = (int)readline("Veuillez introduire un premier nombre ");
    // $nb2 = (int)readline("Veuillez introduire un deuxième nombre ");
    // echo addition($nb1,$nb2);

    // function addition($a,$b){
    //     return $a + $b;
    // }

    //exo7
    // $nb1 = (int)readline("Veuillez introduire un premier nombre ");
    // $nb2 = (int)readline("Veuillez introduire un deuxième nombre ");
    // echo soustraction($nb1,$nb2);

    // function soustraction($a,$b){
    //     return $a - $b;
    // }

    //exo8
    // $nb1 = (int)readline("Veuillez introduire un premier nombre ");
    // $nb2 = (int)readline("Veuillez introduire un deuxième nombre ");
    // echo multiplication($nb1,$nb2);

    // function multiplication($a,$b){
    //     return $a * $b;
    // }

    //exo9
    // $nb1 = (int)readline("Veuillez introduire un premier nombre ");
    // $nb2 = (int)readline("Veuillez introduire un deuxième nombre ");
    // while($nb2 == 0){
    //     echo "Erreur vous avez tenté une division par 0 !!!\n";
    //     $nb1 = (int)readline("Veuillez réintroduire un premier nombre ");
    //     $nb2 = (int)readline("Veuillez réintroduire un deuxième nombre ");
    // }
    // echo division($nb1,$nb2);

    // function division($a,$b){
    //     return $a/$b;
    // }
    
    //exo9 avec la verif dans la fonction
    // echo division();
    // function division(){
    //     $nb1 = (int)readline("Veuillez introduire un premier nombre ");
    //     $nb2 = (int)readline("Veuillez introduire un deuxième nombre ");
    //     while($nb2 == 0){
    //         echo "Erreur vous avez tenté une division par 0 !!!\n";
    //         $nb1 = (int)readline("Veuillez réintroduire un premier nombre ");
    //         $nb2 = (int)readline("Veuillez réintroduire un deuxième nombre ");
    //     }
    //     return $nb1/$nb2;
    // }
    
    
    
    // $nbr1 = readline("Veuillez introduire un premier nombre : ");
    // $nbr2 = readline("Veuillez introduire un deuxième nombre : ");
    // echo "La moyenne de " .$nbr1 . " et " . $nbr2 . " donne ".  moyenne2nombre($nbr1,$nbr2);

    // function addition($nb1,$nb2){
    //     return $nb1+ $nb2 ;
    // }
    // function moyenne2nombre ($nombre1,$nombre2){
    //     return addition($nombre1,$nombre2)/2;
    // }

    // $chiffre = 0;
    // while($chiffre <= 10){
    //     echo $chiffre . "<br>";
    //     $chiffre = $chiffre + 1;
    // }

    // $notes = [18,13,5,9,10];
    //  echo "Affichage d'un tableau avec la boucle for<br>";
    // for($i=0; $i < sizeof($notes); $i++){
    //     echo $notes[$i] . " ";
    // }

    // echo "<br>Affichage d'un tableau avec la boucle while<br>";
    // $i = 0;
    // while ($i < sizeof($notes)){
    //     echo $notes[$i] . " ";
    //     $i++;
    // }
    
    // echo "<br>Affichage d'un tableau avec la boucle foreach<br>";
//     foreach ($notes as $note) {
//         echo $note . " ";
//     }

//     $somme = 0;
//     foreach ($notes as $note) {
//         $somme = $somme + $note;
//     }

// $word = readline ("Entrez un mot(entrez stop pour arrêter ) : ");
//     while($word !== "stop"){
//         echo "voici le mot : " . $word . " \n";

//         $word = readline("Entrez un mot (entrez stop pour arrêter) : ");
//     }

// $user1 = [
//     "prenom" => "Will",
//     "nom" => "Smith",
//     "genre" => "M",
//     "age" => 53,
//     "vacc" => true 
// ];

// $user2 = [
//     "prenom" => "Lara",
//     "nom" => "Croft",
//     "genre" => "F",
//     "age" => 17,
//     "vacc" => false 
// ];

// $user3 = [
//     "prenom" => "Marion",
//     "nom" => "Desmdt",
//     "genre" => "F",
//     "age" => 34,
//     "vacc" => true 
// ];

// //ici après avoir créer mes 3 utilisateurs, j'en selectionne un
// $user = $user1;

// //ensuite j'applique la condition majeur et vacciné
//     if ( $user["vacc"] == true && $user["age"] >= 18){
//         echo ("vous êtes majeur et vacciné");
//     }else{
//         echo ("vous n'êtes pas pas majeur ou vacciné");
//     }
    
// function addition(float $nb1, float $nb2): float{
//     return $nb1 + $nb2;
// }

// echo addition(6,5);

// //version longue
// function estVaccine(bool $immunise): bool{
//     if($immunise === true){
//         return true;
//     }else{
//         return false;
//     } 
// }

// //version moins longue
// function estVaccine2(bool $immunise): bool{
//     if($immunise === true){
//         return true;
//     }
//     return false;
// }

// //version courte
// function estVaccine3(bool $estImmunise): bool{
//     if($estImmunise){
//         return true;
//     }
//     return false;
// }

// //version avec ternaire
// function estVaccine4(bool $estImmunise): bool{
//         return $estImmunise ? true : false;
// }

// //version ultime
// function estVaccine5(bool $estImmunise): bool{
//     return $estImmunise;
// }

// //exemple ternaire avec age
// function estMajeur(int $age): bool{
//     return $age >= 18 ? true : false;
// }

// //exemple ternaire qui retourne un string
// function verificationAGE(int $age): string{
//     return $age >= 18 ? "Vous êtes majeur" : "Vous êtes mineur";
// }

// //version ultime, on retourne la comparaison 
// function estMajeur2(int $age): bool{
//     return $age >= 18;
// }


//exo10
// Créez moi une première fonction « estFemme » qui vérifie si vous êtes un homme ou une femme qui retourne un booléen. 
function estFemme(string $genre): bool{
    if($genre === "F"){
        return true;
    }
    return false;
    //version ultime
    //return $genre === "F";
}

// Créez une deuxième fonction  « estAdulte » qui vérifié si vous êtes majeur ou mineur et qui retourne un booléen. 
function estAdulte(int $age): bool{
    if($age >= 18){
        return true;
    }
    return false;
    //version ternaire
    //return $age >= 18 ? true : false;
}

// Créez tableau de tableau indexé/associatif de 4 utilisateurs, avec comme clé (prénom, genre et âge). Je veux une femme et un homme mineur et je veux une femme et un homme majeur.
$users = [
    [
        "prenom" => "Victoria",
        "genre" => "F",
        "age" => 18
    ],
    [
        "prenom" => "Anna",
        "genre" => "F",
        "age" => 15
    ],
    [
        "prenom" => "Valentin",
        "genre" => "M",
        "age" => 25
    ],
    [
        "prenom" => "Adrian",
        "genre" => "M",
        "age" => 13
    ]
];

function exo10(array $tab): void{
    echo $tab["prenom"];
    if(estFemme($tab["genre"])){
         echo " est une femme ";
    }else{
        echo " est un homme ";
    }
    if(estAdulte($tab["age"])){
        echo "majeur(e) ";
    }else{
        echo "mineur(e) ";
    }
    echo " agé(e) de ". $tab["age"] . " ans<br>";
}
//version Ternaire
// function exo10Ternaire(array $tab): void{
//     echo $tab["prenom"]. estFemme($tab["genre"]) ? " est une femme " : " est un homme ";
//     echo estAdulte($tab["age"]) ? "majeur(e) " : "mineur(e) ". "agé(e) de ". $tab["age"] . " ans<br>";
// }

// foreach($users as $user){
//     exo10($user);
// }

//exo11
function exo11(array $tab): void{
    echo "Bonjour ";
    if(estFemme($tab["genre"]) && estAdulte($tab["age"])){
        echo "Madame " .  $tab["prenom"] . ", vous êtes une adulte agée de ";
    }else if (estFemme($tab["genre"]) && estAdulte($tab["age"]) == false){
        echo "Mademoiselle " .  $tab["prenom"] . ", vous êtes une mineure agée de ";
    }else if(estFemme($tab["genre"]) == false && estAdulte($tab["age"])){
        echo "Monsieur " .  $tab["prenom"] . ", vous êtes un adulte agé de ";
    }else if(estFemme($tab["genre"]) == false && estAdulte($tab["age"]) == false){
        echo $tab["prenom"] . ", vous êtes un mineur agé de ";
    }
    echo $tab["age"] . " ans.<br>" ;
}

foreach($users as $user){
    exo11($user);
}


?>