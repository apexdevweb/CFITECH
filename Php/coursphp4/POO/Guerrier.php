<?php
class Guerrier extends PersonnageJeux{
    private string $epee;

    public function __construct( int $anAge,string $aName, float $aWeight, string $aSword){
        //c'est l'equivalent du super
        parent::__construct($anAge,$aName,$aWeight);
        $this->epee = $aSword;
    }

    public function getEpee(): string{
        return $this->epee;
    }
    public function setEpee(string $uneEpee): void{
        $this->epee = $uneEpee;
    }

    public function __toString(): string{
        return "Voici le guerrier : ". $this->nom . 
                "<br>Age : " . $this->age . " ans<br>Poids : " . $this->poids . " Kg<br>Le nom de son épée : ". 
                $this->epee . "<br><br>";
    }

    public function avancer(): string
    {
        return "Le Guerrier avance avec assurance<br>";
    }


}