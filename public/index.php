<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';
require __DIR__ . '/../src/Area.php';
require __DIR__ . '/../src/Mammal.php';
require __DIR__ . '/../src/Bird.php';
require __DIR__ . '/../src/Reptile.php';
require __DIR__ . '/../src/Felid.php';
require __DIR__ . '/../src/Equid.php';
require __DIR__ . '/../src/Crocodilian.php';
require __DIR__ . '/../src/Snake.php';
require __DIR__ . '/../src/Arthropode.php';
require __DIR__ . '/../src/Arachnide.php';
require __DIR__ . '/../src/Spider.php';
require __DIR__ . '/../src/Insect.php';

use App\Area;
use App\Animal;
use App\Mammal;
use App\Bird;
use App\Reptile;
use App\Felid;
use App\Equid;
use App\Crocodilian;
use App\Snake;
use App\Arthropode;
use App\Arachnide;
use App\Spider;
use App\Insect;

$lion = new Felid('lion');
$lion->setSize(70);
$lion->setThreatenedLevel('VU');

$tiger = new Felid('tiger');
$tiger->setSize(80);
$tiger->setThreatenedLevel('VU');

$zebra = new Equid('zebra');
$zebra->setSize(50);
$zebra->setThreatenedLevel('EN');

$parrot = new Bird ('parrot');
$parrot->setSize(30);

$elephant = new Mammal ('elephant');
$elephant->setThreatenedLevel('LC');

$alligator = new Crocodilian ('alligator');
$alligator->setThreatenedLevel('LC');

$python = new Snake ('python');
$python->setThreatenedLevel('NT');

$scorpio = new Arachnide ('scorpio');
$scorpio->setThreatenedLevel('NE');

$tarantula = new Spider ('tarantula');
$tarantula->setThreatenedLevel('NE');

$bee = new Insect ('bee');
$bee->setThreatenedLevel('VU');

$animals = [$lion, $tiger, $zebra, $parrot, $elephant, $alligator, $python, $scorpio, $tarantula, $bee];

$savana = new Area('savana');
$savana->addAnimal($lion);
$savana->addAnimal($elephant);
$jungle = new Area('jungle');
$jungle->addAnimal($parrot);

$areas = [$savana, $jungle];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>