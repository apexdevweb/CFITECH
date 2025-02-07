<?php
class Bateau{

    private string $nom;
    private string $marque;
    private float $vitesseMax;  
    private int $capacite;
    private bool $enMouvement;
    private bool $aLArret;
    

    public function __construct(string $unNom, string $uneMarque, float $uneVitesseMax, int $uneCapacite){
          $this->nom = $unNom;
          $this->vitesseMax = $uneVitesseMax;
          $this->marque = $uneMarque;
          $this->capacite = $uneCapacite;
          $this->enMouvement = false;
          $this->aLArret = true;
    }

    //getters 
    public function getNom():string{
        return $this->nom;
    }
    public function getVitesseMax():float{
        return $this->vitesseMax;
    }
    public function getMarque():string{
        return $this->marque;
    }
    public function getCapacite():int{
        return $this->capacite;
    }
    //quand vous avez un booléen prenez l'habitude de faire le getter avec is
    public function isEnMouvement():bool{
        return $this->enMouvement;
    }
    //quand vous avez un booléen prenez l'habitude de faire le getter avec is
    public function isALArret():bool{
        return $this->aLArret;
    }

    //setters
    public function setNom(string $nouveauNom): void{
        $this->nom = $nouveauNom;
    }
    public function setVitesseMax(float $nouvelleVitesseMax): void{
        $this->vitesseMax = $nouvelleVitesseMax;
    }
    public function setMarque(string $nouvelleMarque): void{
        $this->marque = $nouvelleMarque;
    }
    public function setCapacite(int $uneCapacite): void{
        $this->capacite = $uneCapacite;
    }
    public function setEnMouvement(bool $enMouvement): void{
        $this->enMouvement = $enMouvement;
    }
    public function setALArret(bool $aLArret): void{
        $this->aLArret = $aLArret;
    }

    public function demarrer():void {
        echo "Le bateau " . $this->marque . " " . $this->nom . " démarre<br>";
        $this->enMouvement = true;
        $this->aLArret = false;
    }

    public function arreter():void{
        if($this->enMouvement){
            echo "Le bateau " . $this->marque . " " . $this->nom . " s'arrête<br>";
            $this->enMouvement = false;
            $this->aLArret = true;
        }else{
            echo "Le bateau " . $this->marque . " " . $this->nom . " est déjà à l'arrêt<br>";
        } 
    }

    public function amarrer():string{
        if($this->enMouvement){
            return "Le bateau " . $this->marque . " " . $this->nom . " est en mouvement et ne peut pas amarrer<br>";
        }
        return "Le bateau " . $this->marque . " " . $this->nom . " est à l'arrêt et peut donc amarrer<br>";
    }
    

    //toString
    public function __toString() : string{
        return  "Nom : " . $this->nom."<br>".
                "Marque : " . $this->marque ."<br>".
                "VitesseMax : " . $this->vitesseMax." Km/h<br>".
                "Nombre de places : " . $this->capacite. " sièges<br>".
                "Est à l'arrêt ? : " . ($this->aLArret?"oui":"non"). "<br><br>";
    }
 

}