<?php

namespace App;

use App\Product;
use App\User;
use App\Currency\Currency;

class Order
{
    private $productList = [];
    private $date;
    private $user;

    public function __construct(\DateTime $date, User $user)
    {
        $this->date     = $date;
        $this->user     = $user;
    }

    public function addProduct(Product $product)
    {
        $this->productList[] = $product;
    }

    public function getProductList()
    {
        return $this->productList;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
    }

    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    public function getCurrency()
    {
        return $this->user->getAddress()->getCountry()->getCurrency();
    }
}
