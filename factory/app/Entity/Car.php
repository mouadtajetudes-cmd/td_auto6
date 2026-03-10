<?php

namespace App\Entity;

use App\VehicleInterface;

class Car implements VehicleInterface {
    private $costPerKm;
    private $fuelType;

    public function __construct($costPerKm, $fuelType) {
        $this->costPerKm = $costPerKm;
        $this->fuelType = $fuelType;
    }

    public function getCostPerKm() {
        return $this->costPerKm;
    }

    public function getFuelType() {
        return $this->fuelType;
    }
}