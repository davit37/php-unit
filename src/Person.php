<?php

namespace Davit37\PhpUnit;

class Person 
{
    public function __construct(private string $name)
    {}

    public function sayHello(?string $name) 
    {
        if($name == null ) throw new \Exception("Name Is Null");

        return "Hello $name, my name is $this->name";
    }
}