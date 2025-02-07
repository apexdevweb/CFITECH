<?php 
class Personnage{
    private string $nom;
    private int $vie;
    private int $attaque;

    public function __construct(string $unNom, int $unVie, int $unAttaque){
          $this->nom=$unNom;
          $this->vie=$unVie;
          $this->attaque=$unAttaque;
    }


    //geters

    public function getNom(): string{
        return $this->nom;
    }

    public function getVie(): int{
        return $this->vie;
    }

    public function getAttaque(): int{
        return $this->attaque;
    }

    // setters
    public function setNom(string $nouvelleNom): void{
        $this-> nom = $nouvelleNom;
    }

    public function setVie(int $nouvelleVie): void{
        $this -> vie = $nouvelleVie;
    }

    public function setAttaque(int $nouvelleAttaque): void{
        $this -> attaque = $nouvelleAttaque;
    }



    //toString
public function __toString() : string{
    return  "Nom : " . $this->nom."\n".
            "Vie : " . $this->vie."  \n".
            "Puissance d'attaque : " . $this->attaque ."\n \n";
}


       public function estVivant(): bool{
        return $this->vie > 0;
       }

     public function lanceAttaque(Personnage $unPersonnage): void{
        //version sur une ligne
        // $unPersonnage->setVie($unPersonnage->getVie() - $this-> attaque);

        $vieRestanteDuPersonnageEnParametre = $unPersonnage->getVie() - $this->attaque;
        $unPersonnage->setVie($vieRestanteDuPersonnageEnParametre);
     }

    }