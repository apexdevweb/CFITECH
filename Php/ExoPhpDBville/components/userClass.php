<?php
require("cityClass.php");

class Utilisateur extends City
{
    private string $firstName;
    private string $lastName;
    private string $email;
    private DateTime $birthDate;

    public function __construct(
        string $firstName,
        string $lastName,
        string $email,
        DateTime $birthDate,
        string $cityName,
        string $cityCountry,
        bool $isCapital
    ) {
        parent::__construct($cityName, $cityCountry, $isCapital);

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->birthDate = $birthDate;
    }

    // Getters
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getBirthDate(): DateTime
    {
        return $this->birthDate;
    }
}
$user = new Utilisateur($firstName, $lastName, $email, $birthDate, $cityName, $cityCountry, $isCapital);
