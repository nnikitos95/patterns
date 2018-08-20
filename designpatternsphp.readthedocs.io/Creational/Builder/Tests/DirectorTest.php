<?php

namespace DPRDIO\Creational\Builder\Tests;

use DPRDIO\Creational\Builder\CarBuilder;
use DPRDIO\Creational\Builder\Director;
use DPRDIO\Creational\Builder\TruckBuilder;
use DPRDIO\Creational\Builder\Vehicle\Car;
use DPRDIO\Creational\Builder\Vehicle\Truck;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanCreateCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}