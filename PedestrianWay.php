<?php
require_once 'HighWay.php';


final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 1;
        $this->masxSpeed = 10;
    }

    public function addVehicle()
    {
        if ($this instanceof Bicycle) {
            $currentVehicles[] = $this;
        }
    }



}