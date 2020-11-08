<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Camion.php';
require_once 'Speedometer.php';

echo Speedometer::convertKilometersToMiles(10);
echo Speedometer::convertMilesToKilometers(10);


/**
$car = new Car('green', 4, 'electric');
$car->setParkBrake(true);
try {
    $car->start();
}
catch (exception $e) {
   echo $message = 'your car cannot start: '.$e->getMessage();
    $car->setParkBrake(false);
}finally{
    echo 'Ma voiture roule comme un donut';
}

echo $car->start();
echo $car->forward();



$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);



$camion = new Camion (10,'red',2, 'electric');
$camion->setLoad(10);
echo $camion->isFull();
var_dump($camion);

echo $camion->forward();
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();



$bike = new Bicycle('blue', 2);
var_dump($bike);

$bike->setCurrentSpeed (5);
var_dump($bike);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


$basicCar = new Car ('red', 2, 10);

var_dump($basicCar);
*/
