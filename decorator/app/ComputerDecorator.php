<?php
namespace App;

use App\Computer;



abstract class ComputerDecorator implements Computer
{
    private float $price;
    
    public function __construct(protected Computer $computer)
    {
        $this->computer = $computer;
        $this->price = $computer->getPrice();
    }
    
    public function getPrice(): int
    {
        return $this->price;
    }
}