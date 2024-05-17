<?php 

namespace App;

final class Crocodilian extends Reptile
{
    protected $pawNumber= 4;

    public function __construct (string $name)
    {
        parent::__construct($name);
    }
}