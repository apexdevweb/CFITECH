<?php
// $note = readline('Entrez une note : ');
// if ($note > 10) {
//     echo "Bien joué vous avez réussi !";
// } else if($note == 0) {
//     echo "Tu es nul";
// }else{
//     echo "C'est dommage, vous feriez mieux la prochaine fois";
// }
// echo "Blabla";

//exo1 et exo2
// $age = readline("Entrez votre age : ");
// if($age > 18){
//     echo "Vous êtes un adulte et vous avez ". $age . " ans";
// }else if ($age == 18){
//     echo "Bienvenu dans l'age adulte";
// }else{
//     echo "Vous avez " .$age." ans et vous n'êtes pas encore un adulte";
// }

//exo3 et exo 4
// $genre = readline("Veuillez introduire votre genre (M, F ou X) : ");
// if ($genre == 'M'){
//     echo "Vous êtes un homme";
// }else if ($genre == "F"){
//     echo "Vous êtes une femme";
// }else if ($genre == "X"){
//     echo "Vous êtes non binaire";
// }else{
//     echo "Erreur vous n'avez pas introduis les bonnes valeurs";
// }

// $note = (int)readline('Entrez votre note : ');
// if ($note > 10) {
//     echo "Bien joué vous avez réussi !";
// } else if($note === 0) {
//     echo "Tu es nul";
// }else{
//     echo "C'est dommage, vous feriez mieux la prochaine fois";
// }

//on peut aussi catser d'un entier a un string
// $nb = 10;
// $nbs = (string)$nb;
// echo $nbs;

// $action = (int)readline("Entrez une action : (1 : Attaquer, 2 : Defendre, 3 : Se soigner, 4 : Fuir, 5 : Ne rien faire) : ");
// if ($action === 1){
//     echo "Vous attaquez";
// }else if($action === 2){
//     echo "Vous défendez";
// }elseif($action === 3){
//     echo "Vous vous soignez";
// }elseif($action === 4){
//     echo "Vous fuyez";
// }elseif($action === 5){
//     echo "Vous ne faites rien";
// }else{
//     echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5";
// }

// switch($action){
//     case 1:
//         echo "Vous attaquez !";
//         break;
//     case 2:
//         echo "Vous défendez !";
//         break;
//     case 3:
//         echo "Vous vous soignez !";
//         break;
//     case 4:
//         echo "Vous fuyez !";
//         break;
//     case 5:
//         echo "Vous ne faites rien !";
//         break;
//     default:
//     echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5";
// }

//exo1 sur le switch
$joursDeSemaine = readline("Entrez le jour de la semaine (1 = Lundi, 2 = Mardi, 3 =Mercredi...7 = Dimanche) : ");
//ici je verifie si on a bien introduis les bons numéros, il affichera nous sommes
if ($joursDeSemaine <=7 && $joursDeSemaine >=1 ){
    echo "Nous sommes ";
}
switch($joursDeSemaine){
    case 1:
        echo "Lundi";
        break;
    case 2:
        echo "Mardi";
        break;
    case 3:
        echo "Mercredi";
        break;
    case 4:
        echo "Jeudi";
        break;
    case 5:
        echo "Vendredi";
        break;
    case 6:
        echo "Samedi";
        break;
    case 7:
        echo "Dimanche";
        break;
    default:
    echo "Relancez le programme et Entrez un jour de 1 à 7";
}

?>