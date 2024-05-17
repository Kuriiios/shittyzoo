<?php 

namespace App;

class Bird extends Animal
{
    protected $pawNumber = 2;

    public function __construct (string $name)
    {
        parent::__construct($name);
    }
}