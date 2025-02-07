<?php
class PersonnageJeux{
    protected string $nom;
    protected int $age;
    protected float $poids;

    public function __construct( int $unAge,string $unNom, float $unPoids){
        $this->nom = $unNom;
        $this->age = $unAge;
        $this->poids = $unPoids;
    }

    public function getPoids():float{
        return $this->poids;
    }
    public function getAge():int{
        return $this->age;
    }
    public function getNom():string{
        return $this->nom;
    }

    public function setPoids(float $nouveauPoids): void{
        $this->poids = $nouveauPoids;
    }
    public function setAge(int $nouvelAge): void{
        $this->age = $nouvelAge;
    }
    public function setNom(string $nouvelleNom): void{
        $this->nom = $nouvelleNom;
    }

    public function avancer(): string{
        return "Il avance";
    }

}