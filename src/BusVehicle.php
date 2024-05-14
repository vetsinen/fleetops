<?php

namespace Webdev\Fleetops;

class BusVehicle extends AbstractVehicle {
    public $name = 'Bus';
    public $maxPassengersCount = 32;
    public $maxTripDistance = 200;
    public $maxBaggageWeight = 300;
    public $fuelConsumptionPer100km = 20;

    public $depreciationCoefficient = 2;

}