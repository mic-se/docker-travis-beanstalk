<?php

namespace App;

require __DIR__ . '/../vendor/autoload.php';

use App\User;
use App\Address;
use App\Country\FranceCountry;
use App\Currency\EURCurrency;
use App\Product;
use App\Order;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ExceptionHandler;

Debug::enable();
ExceptionHandler::register();

$faker = \Faker\Factory::create();

$country = new FranceCountry();

$address = new Address(
    $faker->buildingNumber,
    $faker->streetName,
    $faker->city,
    $faker->postcode,
    $country
);

$user = new User(
    $faker->firstName,
    $faker->lastName,
    $faker->email,
    $address
);

$currency = new EURCurrency();

$country->setCurrency($currency);

$order = new Order(new \DateTime(), $user);

for ($i = 0; $i <= 100; $i++)
{
    $order->addProduct(new Product('Product number '.$i, $i));
}
