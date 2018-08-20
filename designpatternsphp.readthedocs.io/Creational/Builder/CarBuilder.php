<?php

namespace DPRDIO\Creational\Builder;

use DPRDIO\Creational\Builder\Parts\Engine;
use DPRDIO\Creational\Builder\Vehicle\Car;
use DPRDIO\Creational\Builder\Vehicle\Vehicle;

class CarBuilder implements BuilderInterface
{
    /**
     * @var Car
     */
    private $car;
    
    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelLR', new Parts\Wheel());
        $this->car->setPart('wheelRR', new Parts\Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('leftDoor', new Parts\Door());
        $this->car->setPart('trunkLid', new Parts\Door());
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}