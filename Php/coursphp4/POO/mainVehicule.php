<?php
require "Moto.php";
require "Velo.php";
require "Bateau.php";
require "Avion.php";

$moto1 = new Moto("Ninja","Kawasaki","Japon",280.5,true);
$moto2 = new Moto("Tracer900","Yamaha","Japon",220.8,false);
$moto3 = new Moto("V4","Ducati","Italie",305.89,true);
$moto4 = new Moto("M70","Ural","Russie",183.69,false);

$velo1 = new Velo("Vtt","Trek","USA",55.2,true);
$velo2 = new Velo("Revolt Advanced", "Gyant","France",30.5,false);

$avion1 = new Avion("747","Boeing","USA",920,467);
$avion2 = new Avion("A320","Airbus", "France", 850,180);

$bateau1 = new Bateau("Predator74","Sunseeker",511,150);
$bateau2 = new Bateau("Titanic","White starline",324.12,2200);

//exo1
// $velo1->faireWheeling();
// $moto1->faireWheeling();

//exo2
// $bateau1->demarrer();
// echo $bateau1->amarrer();
// $bateau1->arreter();

//exo3
// $bateau2->arreter();
// $bateau2->demarrer();
// $bateau2->arreter();
// echo $bateau2->amarrer();

//exo4
// if($velo1->getVitesseMax() > $velo2->getVitesseMax()){
//     $veloRapide = $velo1;
//     $veloLent = $velo2;
// }else{
//     $veloRapide = $velo2;
//     $veloLent = $velo1;
// }
// $differenceVitesseVelo = abs($velo1->getVitesseMax() - $velo2->getVitesseMax());
// echo "Le vélo ". $veloRapide->getNom() . " est plus rapide que le vélo " .$veloLent->getNom() . " avec une différence de ". $differenceVitesseVelo . " km/h.<br>";

//exo5
// echo $avion1->compareCapacite($avion2);

//exo6 
$tabMotoVelo = [$velo1,$velo2,$moto1,$moto2,$moto3,$moto4];
function motoVeloConnecte(array $tabMotoVelo): void{
    foreach($tabMotoVelo as $vehicule){
        if($vehicule->isConnecte()){
            echo "Voici les vehicule connecte : <br>" . $vehicule;
        }
    }
}
motoVeloConnecte($tabMotoVelo);

//exo6 ameliorer
$tabMotoVelo = [$velo1,$velo2,$moto1,$moto2,$moto3,$moto4];
function motoVeloConnecte2(array $tabMotoVelo): void{
    foreach($tabMotoVelo as $vehicule){
        if($vehicule->isConnecte()){
            echo "Voici les vehicule connecte : <br>" . $vehicule;
        }
    }
}
motoVeloConnecte($tabMotoVelo);










?>