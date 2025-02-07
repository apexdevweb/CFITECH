<?php
class Moto{

    private string $nom;
    private string $marque;
    private string $pays;
    private float $vitesseMax;  
    private bool $connecte;
    

    public function __construct(string $unNom, string $uneMarque, string $unPays, float $uneVitesseMax, bool $connecte ){
          $this->nom = $unNom;
          $this->vitesseMax = $uneVitesseMax;
          $this->pays = $unPays;
          $this->marque = $uneMarque;
          $this->connecte = $connecte;
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
    //quand vous avez un booléen prenez l'habitude de faire le getter avec is
    public function isConnecte():bool{
        return $this->connecte;
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
    public function setConnecte(bool $connecte): void{
        $this->connecte = $connecte;
    }

    public function faireWheeling():void {
        echo "La moto " . $this->marque . " " . $this->nom . " fait un wheeling<br>";
    }

    

    //toString
    public function __toString() : string{
        return  "Nom : " . $this->nom."<br>".
                "Marque : " . $this->marque ."<br>".
                "Pays : " . $this->pays ." <br>".
                "VitesseMax : " . $this->vitesseMax." Km/h<br>".
                "Connecté ? : " . ($this->connecte?"oui":"non"). "<br><br>";
    }
 

}