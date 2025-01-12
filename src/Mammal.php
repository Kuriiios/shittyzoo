<?php 

namespace App;

class Mammal extends Animal
{
    protected $pawNumber = 4;

    public function __construct (string $name)
    {
        parent::__construct($name);
    }

    public function speak(string $lang = 'fr'): string
    {
        if ($lang === 'fr') {
            $message = 'Bienvenue humain, moi aussi je suis un mammifère et mon nom est ';
        } else {
            $message = 'Welcome human, I\'am a mammal too and my name is  ';
        }
        return $message . $this->name;
    }
}