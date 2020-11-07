<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): string
    {
        if ($this->currentSpeed>10) {
            $status = true;
        }else{
            $status = false;
        }

        return $status;
    }

    public function switchOff(): string
    {
        return false;
    }
}

