<?php
namespace Webdev\Fleetops;
require __DIR__ . '/../vendor/autoload.php';

if (count($argv)<4) {die('not enough parametres');}

$driver = new RegularDriver();
$vehicle = new BusVehicle();

if (!$vehicle->validateTrip($argv[1], $argv[2], $argv[3])) die('suggested vehicle cant be used for trip');

$calculator = new TripCostCalculator($vehicle, $driver);
$tripCost = $calculator->calculateTripCost($argv[3]);
echo "Total trip cost: $tripCost UAN";



