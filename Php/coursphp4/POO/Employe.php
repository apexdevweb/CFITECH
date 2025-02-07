<?php
class Employe{
    private string $matricule;
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private DateTime $dateEmbauche;
    private float $salaire;

    public function __construct(string $unMatricule, string $unNom, string $unPrénom, DateTime $uneDateNaissance, DateTime $uneDateEmbauche, float $unSalaire){
        $this->matricule = $unMatricule;
        $this->nom = $unNom;
        $this->prenom = $unPrénom;
        $this->dateNaissance = $uneDateNaissance;
        $this->dateEmbauche = $uneDateEmbauche;
        $this->salaire = $unSalaire;
    }

    public function getMatricule(): string {
        return $this->matricule;
    }
    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getDateNaissance(): DateTime {
        return $this->dateNaissance;
    }
    public function getDateEmbauche(): DateTime {
        return $this->dateEmbauche;
    }

    public function getSalaire(): float {
        return $this->salaire;
    }

    public function setMatricule(string $matricule):void
    {
        $this->matricule = $matricule;
    }
    public function setNom(string $nom):void
    {
        $this->nom = $nom;
    }
    public function setPrenom(string $prenom):void
    {
        $this->prenom = $prenom;

    }
    public function setDateDeNaissance(string $dateNaissance): void
    {
        $this->dateNaissance = $dateNaissance;
    }
    public function setDateEmbauche(string $dateEmbauche): void
    {
        $this->dateEmbauche = $dateEmbauche;
    }
    public function setSalaire(float $salaire): void
    {
        $this->salaire = $salaire;
    }

    public function getAge(): int{
        $dateActuelle = new DateTime();
        $difference = $this->dateNaissance->diff($dateActuelle);
        return $difference->y;
    }

    public function anciennete(): int {
        $dateActuelle = new DateTime();
        $interval = $this->dateEmbauche->diff($dateActuelle);
        return $interval->y;
    }

    public function augmentationDuSalaire() {
        $anciennete = $this->anciennete();
        if ($anciennete < 5) {
            $augmentation = 0.02;
        } elseif ($anciennete < 10) {
            $augmentation = 0.05;
        } else {
            $augmentation = 0.1;
        }
        $this->salaire *= (1 + $augmentation);
    }

    public function afficherEmploye() {
        echo "Matricule : [" . $this->matricule . "]<br>";
        echo "Nom complet : [" . strtoupper($this->nom) . " " . ucfirst(strtolower($this->prenom)) . "]<br> ";
        echo "Age : [" . $this->getAge() . " ans]<br>";
        echo "Ancienneté : [" . $this->anciennete() . " ans]<br>";
        echo "Salaire : [" . $this->salaire . "]<br><br>";
    }

}