<?php

namespace Webdev\Fleetops;

class TripCostCalculator {
    private $vehicle;
    public function __construct(Vehicle $vehicle) {
        $this->vehicle = $vehicle;
    }

    public function calculateTripCost($passengerCount, $baggageWeight, $routeLength) {
        $driverSalary = $this->calculateDriverSalary($routeLength);
        $fuelCost = $this->calculateFuelCost($routeLength);
        $totalCost = $driverSalary + ($fuelCost * $this->vehicle->depreciationCoefficient);
        return $totalCost;
    }

    private function calculateDriverSalary($routeLength) {
        $driverCategoryCoefficient = 1.5; // Example coefficient
        $kilometerRate = 5; // Example kilometer rate
        return 3 * $kilometerRate * $driverCategoryCoefficient;
    }

    private function calculateFuelCost($routeLength) {
        // Fuel cost calculation logic
    }
}