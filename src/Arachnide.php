<?php 

namespace App;

class Arachnide extends Arthropode
{
    protected $pawNumber = 8;

    public function __construct (string $name)
    {
        parent::__construct($name);
    }

}