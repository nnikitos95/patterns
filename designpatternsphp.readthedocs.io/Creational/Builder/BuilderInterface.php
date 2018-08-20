<?php

namespace DPRDIO\Creational\Builder;

use DPRDIO\Creational\Builder\Vehicle\Vehicle;

interface BuilderInterface
{

    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle;
}