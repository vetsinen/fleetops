<?php

namespace Webdev\Fleetops;

class TripCostCalculator
{
    private $vehicle;
    private $driver;
    private $fuelPrice = 15;

    public function __construct($vehicle, $driver)
    {
        $this->vehicle = $vehicle;
        $this->driver = $driver;
    }

    public function calculateTripCost($routeLength)
    {
        $driverSalary = $this->driver->calculateSalary($routeLength);
        $fuelCost = $this->fuelPrice*$routeLength;
        $totalCost = $driverSalary + ($fuelCost * $this->vehicle->getDepreciationCoefficient());
        return $totalCost;
    }
}