<?php
class City
{
    protected string $city_name;
    protected string $city_country;
    protected string $city_capitale;


    public function __construct(string $cityName, string  $cityCountry, string $cityCapitale)
    {
        $this->city_name = $cityName;
        $this->city_country = $cityCountry;
        $this->city_capitale = $cityCapitale;
    }
    //getters
    public function getCityName(): string
    {
        return $this->city_name;
    }
    public function getCityCountry(): string
    {
        return $this->city_country;
    }
    public function getCityCapitale(): string
    {
        return $this->city_capitale;
    }
    //setters
    public function setName(string $name): void
    {
        $this->city_name = $name;
    }

    public function setCountry(string $country): void
    {
        $this->city_country = $country;
    }

    public function setIsCapital(string $isCapital): void
    {
        $this->city_capitale = $isCapital;
    }
}
