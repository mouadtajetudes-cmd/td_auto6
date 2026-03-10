<?php
namespace App;

use App\Computer;
use App\ComputerDecorator;


class OLEDDecorator extends ComputerDecorator
{

    public function __construct(Computer $computer)
    {
        parent::__construct($computer);
    }

    public function getPrice(): int
    {
        return $this->computer->getPrice() + 100;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . " with an OLED";
    }
}
