<?php

namespace DPRDIO\Creational\Builder;

use DPRDIO\Creational\Builder\Vehicle\Truck;
use DPRDIO\Creational\Builder\Vehicle\Vehicle;

class TruckBuilder implements BuilderInterface
{
    /**
     * @var Truck
     */
    private $truck;

    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Parts\Wheel());
        $this->truck->setPart('wheel2', new Parts\Wheel());
        $this->truck->setPart('wheel3', new Parts\Wheel());
        $this->truck->setPart('wheel4', new Parts\Wheel());
        $this->truck->setPart('wheel5', new Parts\Wheel());
        $this->truck->setPart('wheel6', new Parts\Wheel());
    }

    public function addEngine()
    {
        $this->truck->setPart('engine', new Parts\Engine());
    }

    public function addDoors()
    {
        $this->truck->setPart('leftDoor', new Parts\Door());
        $this->truck->setPart('rightDoor', new Parts\Door());
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}