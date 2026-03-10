<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\Laptop;
use App\GPUDecorator;
use App\OLEDDecorator;


class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptop = new GPUDecorator($laptop);

        // TODO: faire le test
        // $this->assertSame(true, 1 === 1);
        $this->assertStringContainsString("with a GPU",$laptop->getDescription());
        $this->assertSame(600, $laptop->getPrice());
    }

    public function testLaptopWithOLEDScreen()
    {
        // TODO: faire le test
        $laptop = new Laptop();
        $laptop = new OLEDDecorator($laptop);
        $this->assertSame(500, $laptop->getPrice());
        $this->assertStringContainsString("with an OLED",$laptop->getDescription());
    }
}