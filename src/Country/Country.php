<?php

namespace App\Country;

use App\Currency\Currency;

class Country implements CountryInterface
{
    private $currency;

    public function getName()
    {
        return static::NAME;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency(Currency $currency)
    {
        $this->currency = $currency;
    }
}
