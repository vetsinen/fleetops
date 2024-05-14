<?php

namespace Webdev\Fleetops;

class RegularDriver
{
    private $driverCategoryCoefficient;
    private $kilometerRate;
    /**
     * @param float $driverCategoryCoefficient
     * @param int $kilometerRate
     */
    public function __construct($driverCategoryCoefficient=1.5, $kilometerRate=5)
    {
        $this->driverCategoryCoefficient = $driverCategoryCoefficient;
        $this->kilometerRate = $kilometerRate;
    }

    public function calculateSalary($routeLength)
    {
        return $routeLength * $this->kilometerRate * $this->driverCategoryCoefficient;
    }
}