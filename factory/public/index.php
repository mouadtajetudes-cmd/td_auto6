<?php
require('../vendor/autoload.php');

# Essayer d'utiliser votre factory ici

$factory = new App\Factory\VehicleFactory();
try {
    $vehicle1 = $factory->createVehicle('car');
    echo "Vehicle 1 (Car) <br/>";
    echo "Cost per km: " . $vehicle1->getCostPerKm() . "<br/>";
    echo "Fuel type: " . $vehicle1->getFuelType() . "<br/><br/>";

    $vehicle2 = $factory->createpartype(10, 5);
    echo "Vehicle 2 (Distance 10 - Poids 5) <br/>";
    echo "Cost per km: " . $vehicle2->getCostPerKm() . "<br/>";
    echo "Fuel type: " . $vehicle2->getFuelType() . "<br/><br/>";

    $vehicle3 = $factory->createpartype(50, 300);
    echo "Vehicle 3 (Distance 50 - Poids 300) <br/>";
    echo "Cost per km: " . $vehicle3->getCostPerKm() . "<br/>";
    echo "Fuel type: " . $vehicle3->getFuelType() . "<br/><br/>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}