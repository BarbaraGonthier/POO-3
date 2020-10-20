<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 4;
        $this->masxSpeed = 130;
    }

    public function addVehicle()
    {
        if ($this instanceof Car) {
            $currentVehicles[] = $this;
        }
    }

}