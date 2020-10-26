<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Camion.php';



$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);



$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);



$camion = new Camion (10,'red',2, 'electric');
$camion->setLoad(10);
echo $camion->isFull();
var_dump($camion);

echo $camion->forward();
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();


$tesla = new Car('black', 4);
$ferrari = new Car('red', 2);


$bike = new Bicycle('blue');
var_dump($bike);


$bike->setCurrentSpeed (5);
var_dump($bike);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$rockrider = new Bicycle('yellow');


$tornado = new Bicycle('black');

$tornado->forward();

$basicCar = new Car ('red', 2, 10);

var_dump($basicCar);

