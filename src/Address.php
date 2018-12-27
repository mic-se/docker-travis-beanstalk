<?php

namespace App;

use App\Country\Country;

class Address
{
    private $number;
    private $streetName;
    private $city;
    private $postalCode;
    private $country;

    public function __construct(string $number, string $streetName, string $city, string $postalCode, Country $country)
    {
        $this->number     = $number;
        $this->streetName = $streetName;
        $this->city       = $city;
        $this->postalCode = $postalCode;
        $this->country    = $country;
    }

    public function getFullAddress()
    {
        return "{$this->number}, {$this->streetName} {$this->postalCode} {$this->city} {$this->country->getName()}";
    }

    public function getCountry()
    {
        return $this->country;
    }
}
