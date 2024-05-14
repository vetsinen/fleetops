<?php

namespace Webdev\Fleetops;

class BusVehicle{
    private $name = 'Bus';
    private $maxPassengersCount = 32;
    private $maxTripDistance = 200;
    private $maxBaggageWeight = 300;
    private $fuelConsumptionPer100km = 20;

    public function getDepreciationCoefficient()
    {
        return 2;
    }
    public function validateTrip($passangers, $baggageWeight, $routeLength)
    {
        if ($passangers > $this->maxPassengersCount || $baggageWeight>$this->maxBaggageWeight || $routeLength> $this->maxTripDistance) return false;
        return true;
    }

}