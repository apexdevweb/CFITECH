<?php

class Artiste implements JsonSerializable
{
    private string $name;
    private string $musicalStyle;
    private int $nbrFollowers;
    private Album $album;

    public function __construct(string $leName, string $leStyle, int $lesFollowers, object $unAlbum)
    {
        $this->name = $leName;
        $this->musicalStyle = $leStyle;
        $this->nbrFollowers = $lesFollowers;
        $this->album = $unAlbum;
    }

    public function jsonSerialize(): array
    {
        return [
        "nom" => $this->name,
        "type musical" => $this->musicalStyle,
        "nb followers" => $this->nbrFollowers,
        "album" => $this->album
        ];
    }
    // getters
    public function getArtsName(): string
    {
        return $this->name;
    }

    public function getArtsStyle(): string
    {
        return $this->musicalStyle;
    }

    public function getArtsFollowers(): int
    {
        return $this->nbrFollowers;
    }
    public function getArtsAlbum(): Album
    {
        return $this->album;
    }
    // setters
    public function setArtsName(string $newName): void
    {
        $this->name = $newName;
    }
    public function setStyle(string $newStyle): void
    {
        $this->musicalStyle = $newStyle;
    }
    public function setNbrFollow(int $newFollowers): void
    {
        $this->nbrFollowers = $newFollowers;
    }
    public function setAlbum(Album $newAlbum): void
    {
        $this->album = $newAlbum;
    }
}
