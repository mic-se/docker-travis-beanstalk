<?php

namespace App\Currency;

class Currency implements CurrencyInterface
{
    public function getCode()
    {
        return static::CODE;
    }
}
