<?php
    // $date1 = new DateTime();
    // $date2 = new DateTime("12/02/1999");
    // var_dump($date1);
    // var_dump($date2);
    require "Voiture.php";
    // $maVoiture = new Voiture("blanche", 1500.0,7800);
    // $maVoiture->demarrer();

    // $maVoiture = new Voiture();
    // $maVoiture->couleur = "Blanche";
    // $maVoiture->poids = 1500.0;
    // $maVoiture->prix = 7800;

    // $couleur = readline("Veuillez introduire une couleur ");
    // $poids = (float)readline("Veuillez introduire un poids ");
    // $prix = (int)readline("Veuillez introduire un prix ");
    // $maVoiture->couleur = $couleur;
    // $maVoiture->poids = $poids;
    // $maVoiture->prix = $prix;

    // $maVoiture->demarrer();
    // $maVoiture->accelerer();
    // echo "La couleur de ma voiture est ". $maVoiture->couleur;

    // var_dump($maVoiture);

    //exo5
    // $voiture = new Voiture();
    // $voiture->couleur = "Rouge";
    // $voiture->poids = 5500.0;
    // $voiture->prix = 35000;
    // echo "Ma voiture est de couleur : ". $voiture->couleur . "<br>" . 
    //     "Ma voiture a un poids de : ". $voiture->poids . " Kg<br>" . 
    //     "Ma voiture a un prix de : ". $voiture->prix . " Euros<br>";

       
        // $maVoiture = new Voiture();        
        // $maVoiture->changerCouleur("Jaune");
        // $maVoiture->changerPoids(695.56);
        // $maVoiture->changerPrix(5000);
        // echo "Ma voiture est de couleur ". $maVoiture->obtenirCouleur(). "<br>";
        // $maVoiture->changerCouleur("Noire");
        // echo "J'ai changé la couleur de ma voiture en : " .$maVoiture->obtenirCouleur(). "<br>";
        
        // $maVoiture->demarrer();

        // echo "L'ancien prix de ma voiture était de ". $maVoiture->obtenirPrix()."<br>";
        // $maVoiture->augmenterPrix(500);
        // echo "Le nouveau prix de ma voiture après augmentation est de ". $maVoiture->obtenirPrix(). "<br>";
        // $maVoiture->couleur = "Blanche";
        // $maVoiture->poids = 1500.0;
        // $maVoiture->prix = 7800;
        // echo "Ma voiture est de couleur : ". $maVoiture->couleur . "<br>" . 
        // "Ma voiture a un poids de : ". $maVoiture->poids . " Kg<br>" . 
        // "Ma voiture a un prix de : ". $maVoiture->prix . " Euros<br>";

        // $maVoiture->couleur = "Noire";
        // echo "Ma nouvelle couleur de voiture est : ". $maVoiture->couleur . "<br>";

        // $voiture1 = new Voiture();
        // $voiture2 = new Voiture();
        // $voiture2->changerCouleur("Verte");
        // $voiture2->changerPoids(600.95);
        // $voiture2->changerPrix(7800);
       
        // echo "La voiture 1<br>";
        // echo "Couleur : ". $voiture1->obtenirCouleur(). "<br>";
        // echo "Poids : ". $voiture1->obtenirPoids(). " Kg<br>";
        // echo "Prix : ". $voiture1->obtenirPrix(). " Euros<br><br>";

        // echo "La voiture 2<br>";
        // echo "Couleur : ". $voiture2->obtenirCouleur(). "<br>";
        // echo "Poids : ". $voiture2->obtenirPoids(). " Kg<br>";
        // echo "Prix : ". $voiture2->obtenirPrix(). " Euros<br><br>";
        // $voiture1->comparerPrix($voiture1,$voiture2);
        // echo $voiture1->comparerPrix($voiture2);
        // echo $voiture1->comparerPrix2($voiture2);
        // echo "La différence du prix est de : ".$voiture1->differenceDePrix($voiture2) . " Euros";

        // $maVoiture = new Voiture("blanche", 1500.0,7800 );
        // $maVoiture2 = new Voiture("Verte",600.95,5000);
        
        //manière de changer l'ordre d'entrée des valeurs pour le constructeur
        // $voiture = new Voiture(unPrix: 1500,uneCouleur: "Mauve", unPoids: 500);

        //exo1
        // $voiture3 = new Voiture("Noire",1740.4,10000);
        // echo "La voiture 3<br>";
        // echo "Couleur : ". $voiture3->obtenirCouleur(). "<br>";
        // echo "Poids : ". $voiture3->obtenirPoids(). " Kg<br>";
        // echo "Prix : ". $voiture3->obtenirPrix(). " Euros<br><br>";

        //exo2
        // $voiture4 = new Voiture("Rose",564.54,250000);
        // $voiture5 = new Voiture("Bleue",558.0,35000);

        //exo3
        // $voiture6 = new Voiture("Jaune",1300.5,8000,"Audi");
        // $voiture7 = new Voiture("Brune",1900.5,16000,"BWM");
        // echo "La voiture 6<br>";
        // echo $voiture6;
        // echo "La voiture 7<br>";
        // echo $voiture7;
        // echo "La voiture 6<br>";
        // echo "Couleur : ". $voiture6->getCouleur(). "<br>";
        // echo "Poids : ". $voiture6->getPoids(). " Kg<br>";
        // echo "Prix : ". $voiture6->getPrix(). " Euros<br>";
        // echo "Marque : ". $voiture6->getMarque(). "<br><br>";

        // echo "La voiture 7<br>";
        // echo "Couleur : ". $voiture7->getCouleur(). "<br>";
        // echo "Poids : ". $voiture7->getPoids(). " Kg<br>";
        // echo "Prix : ". $voiture7->getPrix(). " Euros<br>";
        // echo "Marque : ". $voiture7->getMarque(). "<br><br>";

        // $voiture8 = new Voiture("Grise", 975.8, 6450, "Mercedes");
        // echo "La voiture 8<br>";
        // echo $voiture8;

        //exo4
        // if($voiture6->plusChere($voiture7)){
        //     echo "La voiture ". $voiture6->getCouleur()  . " est plus chere que la voiture ".  $voiture7->getCouleur(). "<br>";
        // }else{
        //     echo "La voiture ". $voiture7->getCouleur()  . " est plus chere que la voiture ".  $voiture6->getCouleur(). "<br>";
        // }
        // echo "La différence du prix est de : ".$voiture6->differenceDePrix($voiture7) . " Euros";

        // require "Personne.php";
        // //exo5
        // // $personne1 = new Personne("Taricia","F",18);
        // // $personne2 = new Personne("Thibault","M",12);
        // // $personne3 = new Personne("Tiana","F",27);
        // // $personne4 = new Personne("Laura","F",34);
        // // $personne5 = new Personne("Julien","M",37);

        // // $tabPersonnes = [$personne1,$personne2,$personne3,$personne4,$personne5];
        // // foreach($tabPersonnes as $personne){
        // //     echo $personne;
        // // }
        // // $p1 = $personne4;
        // // $p2 = $personne2;
        // // if($p1->estPlusAge($p2)){
        // //     echo $p1->getPrenom(). " a ". $p1->getAge() . " ans et est plus agé(e) que ". $p2->getPrenom(). " qui a ". $p2->getAge(). " ans.<br>";
        // // }else{
        // //     echo $p2->getPrenom(). " a ". $p2->getAge() . " ans et est plus agé(e) que ". $p1->getPrenom(). " qui a ". $p1->getAge(). " ans.<br>";
        // // }

        // require "Personnage.php";
        // //exo6
        // $ryu = new Personnage("Ryu",70,24);
        // $ken = new Personnage("Ken",60,20);
        // $sub_zero = new Personnage("Sub-Zero",80,48);
        // $jin = new Personnage("Jin Kazama",100,46);
        // $mario = new Personnage("Mario",60,42);

        // $tableauPersonnages = [$ryu,$ken,$sub_zero,$jin,$mario];

        // for($i = 0; $i < sizeof($tableauPersonnages); $i++){
        //     echo "<p>" . $tableauPersonnages[$i] . "</p>";
        // }

        // $nbrAttaque = 0;
        // $p1 = $mario;
        // $p2 = $sub_zero;

        // while($p1->estVivant() && $p2->estVivant()){
        //     $nbrAttaque++;
        //     $p2->lanceAttaque($p1);
        //     $p1->lanceAttaque($p2);        
        // }

        // if($p1->estVivant()){
        //     echo "Le personnage " . $p1->getNom() . " a battu le personnage " . $p2->getNom() . " en " . $nbrAttaque . " coups.";
        //     echo "<br>Il lui reste " . $p1->getVie() . " points de vie.";
        // }elseif($p2->estVivant()){
        //     echo "Le personnage " . $p2->getNom() . " a battu le personnage " . $p1->getNom() . " en " . $nbrAttaque . " coups.";
        //     echo "<br>Il lui reste " . $p2->getVie() . " points de vie.";
        // }else{
        //     echo "Match nul";
        // }
       

    //Heritage
    // require "PersonnageJeux.php";
    // require "Mage.php";
    // require "Guerrier.php";

    // $mage1 = new Mage(105,"Gandalf",75.6,"Baton en bois",500);
    // $guerrier1 = new Guerrier(35,"Conan",95.2,"Grande épée");
    // echo $mage1; 
    // echo $guerrier1;
    
    // echo $mage1->avancer();
    // echo $guerrier1->avancer();

    require ('Employe.php');
    
    $employe1 = new Employe(123, "dupont", "jean", new DateTime("1990-01-01"), new DateTime("2020-01-01"), 2000);
    $employe1->afficherEmploye();
    $employe1->augmentationDuSalaire();
    echo "Après augmentation :<br>";
    echo $employe1->afficherEmploye();



?>
