<?php

namespace App;

class Product
{
    private $id;
    private $name;
    private $price;

    public function __construct(string $name, float $price)
    {
        $this->id    = uniqid();
        $this->name  = $name;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
