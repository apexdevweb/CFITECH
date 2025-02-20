<?php
class City
{
    protected string $city_name;

    public function __construct(string $cityName)
    {
        $this->city_name = $cityName;
    }
    //getters
    public function getCityName(): string
    {
        return $this->city_name;
    }

    //setters
    public function setName(string $name): void
    {
        $this->city_name = $name;
    }
}
