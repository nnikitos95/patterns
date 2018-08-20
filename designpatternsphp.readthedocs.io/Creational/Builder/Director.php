<?php

namespace DPRDIO\Creational\Builder;

use DPRDIO\Creational\Builder\Vehicle\Vehicle;

class Director
{
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}