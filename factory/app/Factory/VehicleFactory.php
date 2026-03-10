<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\VehicleInterface;

class VehicleFactory {
    public function createVehicle(string $type) : VehicleInterface {
        if(strtolower($type) === 'bicycle') {
            return new Bicycle(1, 'human');
            
        } else if(strtolower($type) === 'car') {
            return new Car(5, 'essence');

        } else if(strtolower($type) === 'truck') {
            return new Truck(10, 'diesel');
        } 
        else{
            throw new \Exception("Invalid vehicle type: $type");
        }
    }
    
    public function createpartype(float $distance, float $weight) : VehicleInterface {
        if ($weight > 200) {
            return new Truck(10, 'diesel');
        }
        
        else if ($weight > 20) {
            return new Car(5, 'essence');
        }
        
        else if ($distance < 20) {
            return new Bicycle(1, 'human');
        }
        else{
        // return new \Exception('distance ou weight non valides');
        return new Car(5, 'essence');
        }
    }
}
