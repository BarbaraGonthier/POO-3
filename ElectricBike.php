<?php


class ElectricBike extends Vehicle implements RechargeableInterface
{
    private $currentCharge = 0;

    public function charge(int $percentage) :int
    {
        $this->currentCharge = $percentage;
    }

    public function unLoad(int $percentage) :int
    {
        $this->currentCharge = $percentage;
    }

}