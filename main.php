<?php
namespace Webdev\Fleetops;
require __DIR__ . '/vendor/autoload.php';


$vehicle = new Vehicle();
$calculator = new TripCostCalculator($vehicle);
$tripCost = $calculator->calculateTripCost(32, 200, 100);
echo "Total trip cost: $tripCost UAN";