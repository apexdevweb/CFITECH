<?php
class Avion{

    private string $nom;
    private string $marque;
    private string $pays;
    private float $vitesseMax;  
    private int $capacite;
    

    public function __construct(string $unNom, string $uneMarque, string $unPays, float $uneVitesseMax, int $uneCapacite ){
          $this->nom = $unNom;
          $this->vitesseMax = $uneVitesseMax;
          $this->pays = $unPays;
          $this->marque = $uneMarque;
          $this->capacite = $uneCapacite;
    }

    //getters 
    public function getNom():string{
        return $this->nom;
    }
    public function getVitesseMax():float{
        return $this->vitesseMax;
    }
    public function getPays():string{
        return $this->pays;
    }
    public function getMarque():string{
        return $this->marque;
    }
    
    public function getCapacite():int{
        return $this->capacite;
    }

    //setters
    public function setNom(string $nouveauNom): void{
        $this->nom = $nouveauNom;
    }
    public function setVitesseMax(float $nouvelleVitesseMax): void{
        $this->vitesseMax = $nouvelleVitesseMax;
    }
    public function setPays(string $nouveauPays): void{
        $this->pays = $nouveauPays;
    }
    public function setMarque(string $nouvelleMarque): void{
        $this->marque = $nouvelleMarque;
    }
    public function setCapacite(int $uneCapacite): void{
        $this->capacite = $uneCapacite;
    }

    public function decoller():void {
        echo "L'avion " . $this->marque . " " . $this->nom . " décolle<br>";
    }

    //toString
    public function __toString() : string{
        return  "Nom : " . $this->nom."<br>".
                "Marque : " . $this->marque ."<br>".
                "Pays : " . $this->pays ." <br>".
                "VitesseMax : " . $this->vitesseMax." Km/h<br>".
                "Nombre de places : " . $this->capacite. " sièges<br><br>";
    }
 
    public function aPlusGrandeCapacite(Avion $avion):bool{
        return $this->capacite > $avion->getCapacite();
    }
    public function differenceCapacite(Avion $avion): int{
        return abs($this->capacite - $avion->getCapacite());
    }
    public function compareCapacite(Avion $avion): string{
        if($this->aPlusGrandeCapacite($avion)){
            return "L'avion ". $this->nom . " a plus de capacité que l'avion ". $avion->getNom() . " avec une différence de ". $this->differenceCapacite($avion). " places<br>";
        }
        return "L'avion ". $avion->getNom() . " a plus de capacité que l'avion ". $this->nom . " avec une différence de ". $this->differenceCapacite($avion). " places<br>";
    }

}