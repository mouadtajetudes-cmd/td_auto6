<?php

namespace App;

use App\Computer;
use App\ComputerDecorator;


class GPUDecorator extends ComputerDecorator
{
    public function __construct(Computer $computer)
    {
        parent::__construct($computer);
    }

    public function getPrice(): int
    {
        return $this->computer->getPrice() + 200;
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . " with a GPU";
    }
}
