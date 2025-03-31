<?php

class Album implements JsonSerializable
{
    private string $nameArtist;
    private int $nbrPiste;
    private DateTime $dteSortie;

    public function __construct(string $nom_artist, int $pistNbr, DateTime $uneDateSortie)
    {
        $this->nameArtist = $nom_artist;
        $this->nbrPiste = $pistNbr;
        $this->dteSortie = $uneDateSortie;
    }

    // Méthode pour sérialiser l'objet en JSON
    public function jsonSerialize(): array
    {
        return [
            'nameArtist' => $this->nameArtist,
            'nbrPiste' => $this->nbrPiste,
            'dteSortie' => $this->dteSortie->format('Y-m-d')  // Formater la date au format 'YYYY-MM-DD'
        ];
    }

    // Getters
    public function getNameArtist(): string
    {
        return $this->nameArtist;
    }

    public function getNrbPist(): int
    {
        return $this->nbrPiste;
    }

    public function getDteSortie(): DateTime
    {
        return $this->dteSortie;
    }

    // Setters
    public function setNameArtist(string $nouveauNom): void
    {
        $this->nameArtist = $nouveauNom;
    }

    public function setNbrPiste(int $nouvellePiste): void
    {
        $this->nbrPiste = $nouvellePiste;
    }

    public function setDteSortie(DateTime $nouvelleDate): void
    {
        $this->dteSortie = $nouvelleDate;
    }
}
