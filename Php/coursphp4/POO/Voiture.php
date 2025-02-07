<?php
class Voiture{
    private string $couleur;
    private float $poids;  
    private int $prix;
    private string $marque;

    public function __construct(string $uneCouleur, float $unPoids, int $unPrix, string $uneMarque){
          $this->couleur = $uneCouleur;
          $this->poids = $unPoids;
          $this->prix = $unPrix;
          $this->marque = $uneMarque;
    }

    //getters 
    public function getCouleur():string{
        return $this->couleur;
    }
    public function getPoids():float{
        return $this->poids;
    }
    public function getPrix():int{
        return $this->prix;
    }
    public function getMarque():string{
        return $this->marque;
    }

    //setters
    public function setCouleur(string $nouvelleCouleur): void{
        $this->couleur = $nouvelleCouleur;
    }
    public function setPoids(float $nouveauPoids): void{
        $this->poids = $nouveauPoids;
    }
    public function setPrix(int $nouveauPrix): void{
        $this->prix = $nouveauPrix;
    }
    public function setMarque(string $nouvelleMarque): void{
        $this->marque = $nouvelleMarque;
    }

    //toString
    public function __toString() : string{
        return  "Couleur : " . $this->couleur."<br>".
                "Poids : " . $this->poids." Kg<br>".
                "Prix : " . $this->prix ." Euros<br>".
                "Marque : " . $this->marque ."<br><br>";
    }
 

    public function demarrer(): void{
        echo "La voiture démarre<br>";
    }

    public function accelerer(): void{
        echo "La voiture accélère<br>";
    }

    public function augmenterPrix(int $augmentation):void{
        $this->prix += $augmentation;
        //$this->prix = $this->prix + $augmentation;
    }

    public function comparerPrix(Voiture $v2):string{
        if($this->prix === $v2->getPrix()){
            return "Les deux voitures ont le même prix<br>";
        }elseif($this->prix > $v2->getPrix()){
            return "La voiture ". $this->couleur . " est plus chere que la voiture ". $v2->getCouleur() . "<br>La différence du prix est de : ". $this->prix - $v2->getPrix(). " Euros";
        }else{
            return "La voiture ". $v2->getCouleur()  . " est plus chere que la voiture ".  $this->couleur . "<br>La différence du prix est de : ".  $v2->getPrix() - $this->prix . " Euros";
        }
    }

    public function comparerPrix2(Voiture $v2):string{
        if($this->prix === $v2->getPrix()){
            return "Les deux voitures ont le même prix<br>";
        }elseif($this->prix > $v2->getPrix()){
            return "La voiture ". $this->couleur . " est plus chere que la voiture ". $v2->getCouleur() . "<br>";
        }else{
            return "La voiture ". $v2->getCouleur()  . " est plus chere que la voiture ".  $this->couleur . "<br>";
        }
    }

    public function differenceDePrix(Voiture $v2): int{
        return abs($this->prix - $v2->getPrix());
    }

    public function plusChere(Voiture $uneVoiture): bool{
        // if($this->prix >= $uneVoiture->getPrix()){
        //     return true;
        // }
        // return false;
        // //ternaire
        // return $this->prix >= $uneVoiture->getPrix()? true:false;

        //version ultime
        return $this->prix >= $uneVoiture->getPrix();
    }
}