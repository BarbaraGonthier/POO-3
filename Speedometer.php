<?php


class Speedometer
{
    private const MILE_TO_KILOMETER = 1.609934;
    private const KILOMETER_TO_MILE = 0.621371;

    public static function convertKilometersToMiles(float $distance)
    {
        return number_format( $distance*self::KILOMETER_TO_MILE, 2) ;
    }

    public static function convertMilesToKilometers(float $distance)
    {
        return number_format( $distance*self::MILE_TO_KILOMETER, 2) ;
    }
}