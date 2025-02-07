<?php
class Mage extends PersonnageJeux{
    private string $baton;
    private int $quantiteMana;

    public function __construct( int $anAge,string $aName, float $aWeight, string $aMagicalStaf, int $aQuantity){
        //c'est l'equivalent du super qui initialise/contruit les attributs 
        parent::__construct($anAge,$aName,$aWeight);
        $this->baton = $aMagicalStaf;
        $this->quantiteMana = $aQuantity;
    }

    public function getBaton(): string{
        return $this->baton;
    }
    public function getQuantiteMana(): int{
        return $this->quantiteMana;
    }

    public function setBaton(string $unBaton): void{
        $this->baton = $unBaton;
    }
    public function setQuantiteMana(string $uneQuantiteMana): void{
        $this->quantiteMana = $uneQuantiteMana;
    }

    public function __toString(): string{
        return "Voici le mage : ". $this->nom . 
                "<br>Age : " . $this->age . " ans<br>Poids : " . $this->poids . " Kg<br>Le nom de son baton : ". 
                $this->baton . "<br>Quantité de mana : ". $this->quantiteMana . "<br><br>";
    }

    public function avancer(): string
    {
        return "Le Mage avance avec prudence<br>";
    }

}