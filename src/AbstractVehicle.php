<?php

namespace Webdev\Fleetops;

abstract class AbstractVehicle
{
    public $maxPassengersCount;
    public $maxTripDistance;
    public $maxBaggageWeight;

    public function validateTrip($passangers, $baggageWeight, $routeLength)
    {
        if ($passangers> $this->maxPassengersCount or $baggageWeight>$this->maxBaggageWeight or $routeLength> $this->maxTripDistance) return false;
        return true;
    }
}