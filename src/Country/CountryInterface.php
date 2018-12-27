<?php

namespace App\Country;

use App\Currency\Currency;

interface CountryInterface
{
    public function getName();
    public function setCurrency(Currency $currency);
}
