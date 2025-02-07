<?php
class Personne{
    private string $prenom;
    private string $genre;
    private int $age;

    public function __construct(string $unPrenom, string $unGenre, int $unAge)
    {
        $this->prenom = $unPrenom;
        $this->genre = $unGenre;
        $this->age = $unAge;
    }

    public function getPrenom(): string{
        return $this->prenom;
    }
    public function getGenre(): string{
        return $this->genre;
    }
    public function getAge(): int{
        return $this->age;
    }

    public function setPrenom(string $nouveauPrenom): void{
        $this->prenom = $nouveauPrenom;
    }
    public function setGenre(string $nouveauGenre): void{
        $this->genre = $nouveauGenre;
    }
    public function setAge(int $nouvelAge): void{
        $this->age = $nouvelAge;
    }

    public function __toString(): string
    {
        return "Prénom : ". $this->prenom . "<br>". 
                "Age : ". $this->age . " ans<br>". 
                "Genre : ". $this->genre . "<br><br>";
    }

    public function estPlusAge(Personne $unePersonne) : bool{
        //ternaire
        // return $this->age >= $unePersonne->getAge()? true:false;

        return $this->age >= $unePersonne->getAge();
    }

    
}