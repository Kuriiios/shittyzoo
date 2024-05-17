<?php 

namespace App;

class Insect extends Arthropode
{
    protected $pawNumber = 6;

    public function __construct (string $name)
    {
        parent::__construct($name);
    }

}