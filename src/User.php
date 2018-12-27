<?php

namespace App;

use App\Address;

class User
{
    private $firstName;
    private $lastName;
    private $email;
    private $address;

    public function __construct(string $firstName, string $lastName, string $email, Address $address)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        $this->email     = $email;
        $this->address   = $address;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    
    public function getLastName()
    {
        return $this->lastName;
    }
    
    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }
    
    public function getAddress()
    {
        return $this->address;
    }
}
